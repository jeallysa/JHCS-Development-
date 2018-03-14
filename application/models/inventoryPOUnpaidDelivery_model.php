<?php 
  class inventoryPOUnpaidDelivery_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
  

  
  function retrieveUnpaid(){
      $query = $this->db->query('SELECT * FROM  supp_po join supplier on supp_id = sup_id   where delivery_stat = 1 and payment_stat = 0');
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
  }
  
  
  
  
  
  


?>
