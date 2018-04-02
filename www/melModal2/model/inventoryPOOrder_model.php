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
      $query = $this->db->query('SELECT * FROM test_supp_po join supplier on supp_id = sup_id where (delivery_stat) = 0 and (payment_stat = 0)');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
   function details(){
      $query = $this->db->query('SELECT * FROM test_supp_po_ordered where supp_PO_id = 3;');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }   
      
      
   function full(){
      $query = $this->db->query('SELECT * FROM test_supp_po join supplier on supp_id = sup_id where (delivery_stat) = 0 and (payment_stat = 0)');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }      
      
      
   function partial(){
      $query = $this->db->query('SELECT * FROM test_supp_po join supplier on supp_id = sup_id where (delivery_stat) = 0 and (payment_stat = 0)');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  } 
      
      
     function insertPartialDelivery($data){
         
      $this->db->insert_batch("test_supp_deliveryx" , $data);
         
  }  
      
      
      
      
      
  }
  
  
  
  
  
  


?>
