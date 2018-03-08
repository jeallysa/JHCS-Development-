<?php 
  class inventoryItemList_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  

  
  
  function retrieveItems(){
      $query = $this->db->query('SELECT * from test_items join supplier on supplier_id = sup_id');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
  }
  
  
  
  
  
  


?>
