<?php 
  class inventoryPOOrder_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
  
//  function retrieveCustomer(){
//      $query = $this->db->query('SELECT * from Customer');
      
//      if($query->num_rows() > 0){
//          return $query-> result();
//      }else
//          return NULL;
//   }
  
  
  function retrieveOrder(){
      $query = $this->db->query('SELECT * FROM supp_po join supplier on supp_id = sup_id where (delivery_stat) = 0 and (payment_stat = 0)');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
  function retrieveUsers(){
   
    $query = $this->db->query('SELECT * FROM user');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }    
      
   function retrieveRawStock(){
    $query = $this->db->query('SELECT * FROM raw_coffee ');  
          if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  } 
      
  
     function insertORDER($data){
         
      $this->db->insert_batch("supp_delivery" , $data);
         
  }  
          
      
function updateOrderStatus($data2, $supp_po_id){
        
    
        foreach($data2 as $object ){
            
            $data =array(
                'delivery_stat' => 1
            );
             
           $this->db->where('supp_po_ordered_id', $object['supp_po_ordered_id']);
           $this->db->update('supp_po_ordered', $data); 
     }

    
    
    
//just for looking if there is still some orders on a certain PO left.  if none then set the PO delivery_status to 1   
//test if there is a remaining order on a PO - an item found end loop by setting it to 4 to terminate..  but if nothing found set the delivery stat of PO to 1 so it appears on Unpaid.
    $arrayTable = array("raw_coffee","sticker","packaging","machine");      
    $arrayOn = array("raw_coffee","sticker","package_name","brewer_type");  
    $array = [];
    
    for($i = 0 ; $i < 4 ; $i++){      
      $query = $this->db->query('SELECT *  FROM '.$arrayTable[$i].' join supp_po_ordered  on item = '.$arrayOn[$i].' join supp_po using (supp_po_id) where supp_PO_id = '.$supp_po_id.
                ' and supp_po_ordered.delivery_stat = 0');
          
    if($query->num_rows() > 0){
       $array[$i] = $query->num_rows() ;
     }
  }
    if(empty($array)){
    $data =array(
             'delivery_stat' => 1
            );
    
    $this->db->where('supp_po_id', $supp_po_id);
    $this->db->update('supp_po', $data);
          
    }
         
  } 
          

      
      
   function updateStock($data3, $supp_po_id){
          
  
    $arrayTable = array("raw_coffee","sticker","packaging","machine");  
    $arrayNameOfItem = array("raw_coffee","sticker","package_name","brewer_type");  
    $stockColumn= array("raw_stock","sticker_stock","package_stock","mach_stocks");
  
     
    $query  = $this->db->query('SELECT supp_id FROM supp_po where supp_po_id='.$supp_po_id);
              $res = $query->row();
               
   
     $i=0;
  foreach($data3 as $key => $object){
      
    
      
    $loc = 0;
 for($i = 0 ; $i <= 3 ; $i++){      
   $query = $this->db->query("SELECT sum(".$stockColumn[$i].") as sumx FROM ".$arrayTable[$i]. " where ". $arrayNameOfItem[$i]." LIKE '%".$object['item']."%' and sup_id = ".$res->supp_id);     
      
       if($query->num_rows() > 0){
         $whatStock = $i; //using the I to know which Table
         $whatTable = $i; //using the I to know which Table
        
         $stockCount = $query-> row(); 
         $newStock[$loc] = $stockCount->sumx + $object['yield_weight'];
 
         $data = array($stockColumn[$whatStock] => $newStock[$loc] );  //passing the value of the new Stock
            
         $loc++; 
        }
     
    $where = array( $arrayNameOfItem[$whatStock] =>$object['item'] , 'sup_id' => $res->supp_id); // multiple where
    $this->db->where($where);  //used the where here
    $this->db->update($arrayTable[$whatTable], $data);    
   }
                
  }
      
      }
        
}
  
  
  
  
  
  


?>
