<?php 
  class inventoryPOAdd_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
  function checkIfTempIsEmpty(){
      $query = $this->db->query('select * from supp_temp_po');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  
  }
    function emptyTemp($dataInsert){
       $this->db->empty_table("supp_temp_po"); 
  }   
      
   
  
  function insertChosenSupplier($dataInsert){
      $this->db->insert("supp_temp_po" , $dataInsert);
  }
   
      
      
  function insertOrder($data){
      
      $this->db->insert_batch("supp_po_ordered" , $data);
      $this->db->empty_table("supp_temp_po"); 
  }  
  
      
      
   function cancelPO(){
      
      $this->db->empty_table("supp_temp_po"); 
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
      $arrayActivation = array("raw_activation","sticker_activation","pack_activation","mach_activation");
       
      $query = $this->db->query('SELECT * from ' . $array[$i] . ' join supplier using(sup_id) join supp_temp_po on sup_company = supp_name where '. $arrayActivation[$i].' = 1');      
      
      
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
