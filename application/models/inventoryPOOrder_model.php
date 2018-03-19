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

      $query = $this->db->query('SELECT * FROM items join supp_po_ordered  on item = item_name join supp_po using (supp_po_id) where supp_PO_id ='.$supp_po_id.
                ' and supp_po_ordered.delivery_stat = 0');
          
    if($query->num_rows() > 0){
         
    }else{
        
         $data =array(
                'delivery_stat' => 1
            );
        
          $this->db->where('supp_po_id', $supp_po_id);
          $this->db->update('supp_po', $data);
    }
         
  } 
          
          
          
          
           
      
      
      
      
      
    
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
  }
  
  
  
  
  
  


?>
