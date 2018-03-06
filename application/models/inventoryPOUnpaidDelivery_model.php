<?php 
  class inventoryPOUnpaidDelivery_model extends CI_model {
  
  
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
  
  
  function retrieveUnpaid(){
      $query = $this->db->query('SELECT * FROM supplier join test_supp_po on supp_id = sup_id join test_supp_delivery using(supp_po_id)  where delivery_stat = 1 and payment_stat = 0');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
  }
  
  
  
  
  
  


?>
