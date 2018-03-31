<?php 
  class inventoryPOAdd_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
      
      
      
      
         public function querySelectedType($item_name, $sup_id){
            $arrayTable = array("raw_coffee","sticker","packaging","machine");
            $arrayOn = array("raw_coffee","sticker","package_type","brewer");
            $arrayType = array("raw_type","sticker_type","package_size","brewer_type");
      
                   for($table = 0 ; $table <= 3 ; $table++){
                          
             $retrieveDetails ="SELECT ".$arrayType[$table]." as type  FROM ".$arrayTable[$table]." where ".$arrayOn[$table]." = '".$item_name."' AND sup_id =".$sup_id; 
             $query = $this->db->query($retrieveDetails);
                      if ($query->num_rows() > 0) {
                         return $query->result();     
                          
                       }
                 }
         }   
      
       
      
   
      public function querySelectedAmount($item_name, $sup_id , $item_type){
            $arrayTable = array("raw_coffee","sticker","packaging","machine");
            $arrayOn = array("raw_coffee","sticker","package_type","brewer");
            $arrayType = array("raw_type","sticker_type","package_size","brewer_type");
      
                   for($table = 0 ; $table <= 3 ; $table++){
                          
             $retrieveDetails ="SELECT unitPrice , category FROM ".$arrayTable[$table]." where ".$arrayOn[$table] ." = '".$item_name."' and ".$arrayType[$table] ." = '".$item_type."' AND sup_id =".$sup_id; 
             $query = $this->db->query($retrieveDetails);
                      if ($query->num_rows() > 0) {
                         return $query->row();      // im expecting only 1 row
                           }
                   
                   }
         } 
   
      
      
      
      /*
      public function querySelectedType($item_name, $sup_id){
            $arrayTable = array("raw_coffee","sticker","packaging","machine");
            $arrayOn = array("raw_coffee","sticker","package_name","brewer");
                   for($table = 0 ; $table < 4 ; $table++){
                          
             $retrieveDetails ="SELECT * FROM ".$arrayTable[$table]." where ".$arrayOn[$table] ." = '".$item_name."' AND sup_id =".$sup_id; 
             $query = $this->db->query($retrieveDetails);
                      if ($query->num_rows() > 0) {
                         return $query->result();      // im expecting only 1 row
                           }
                   
                   }
         }   
      */
    
      
      
     function displayOrderedTemp(){
      $query = $this->db->query('SELECT * FROM supp_temp_po_order order by idsupp_temp_po_order desc ');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  
  }  
      
              
      
  function checkIfTempIsEmpty(){
      $query = $this->db->query('select *  from supp_temp_po left join supplier on supp_name = sup_company');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  
  }
      
      
      
    function emptyTemp($dataInsert){  //diko sure kung kelangan pa to dito eh nalimutan ko na.
       $this->db->empty_table("supp_temp_po"); 
  }   
      
   
  
  function insertChosenSupplier($dataInsert){
      $this->db->insert("supp_temp_po" , $dataInsert);
  }
      
  function insertTempOrder($dataInsert){ 
      $this->db->insert("supp_temp_po_order" , $dataInsert);
         
  }     
      
      
   
      
      
  function insertOrder($data){
      
      $this->db->insert_batch("supp_po_ordered" , $data);
      $this->db->empty_table("supp_temp_po"); 
      $this->db->empty_table("supp_temp_po_order");
  }  
  

      
      
      
   function cancelPO(){
      $this->db->empty_table("supp_temp_po"); 
      $this->db->empty_table("supp_temp_po_order"); 
  } 
      
    function resetOrder(){
      $this->db->empty_table("supp_temp_po_order"); 
  } 
      
      
      
      
  function retrieveSuppliers(){
      $query = $this->db->query('SELECT * from supplier');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
      
  function retrieveItems(){
 
      $result = array("");
   for($i=0 ; $i <= 3 ; $i++){
      $array = array("raw_coffee","sticker","packaging","machine");
      $arrayName = array("raw_coffee","sticker","package_type","brewer"); 
      $arrayActivation = array("raw_activation","sticker_activation","pack_activation","mach_activation");
       
      $query = $this->db->query('SELECT distinct '. $arrayName[$i] .' from '. $array[$i] .' join supplier using(sup_id) join supp_temp_po on sup_company = supp_name where '. $arrayActivation[$i].' = 1');      
      
      
    if($query->num_rows() > 0){
        
       $result[$i] =  $query->result();  
     
     
     }else                                  
        $result[$i] =  NULL;           //for example index 1 doesnt exist it will just null. so that it is easier to map in the view POAdd. because index 1 returns null.
 
      
  } return $result;
      
}
      
  function retrieveTruckingFee(){
   
      $query = $this->db->query('SELECT * from supp_temp_po');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
    function retrieveTemp(){
     // I think this should be moofied with Supplier is deactivated/
    $query = $this->db->query('select * from supp_temp_po join supplier on supp_name = sup_company');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
   function insertPO($datax){
       $this->db->insert_batch("supp_po" , $datax);
   }   
      
   
function RetrieveLastPO(){
    $query = $this->db->query("SELECT distinct  supp_po_id from supp_po order by 1 desc limit  1");
    if($query->num_rows() > 0){
          return $query->result();
      }else
          return NULL;
  }
        
      
}
     


?>
