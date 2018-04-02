<?php 
  class inventoryPOAdd_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  

  
  function insertChosenSupplier($dataInsert){
      $this->db->insert("test_supp_temp_po" , $dataInsert);
  }
   
      
  function insertOrder($data){
      $this->db->insert_batch("test_multi_insert" , $data);
      $this->db->empty_table("test_supp_temp_po"); 
  }    
      
      
      
  function retrieveSuppliers(){
      $query = $this->db->query('SELECT * from supplier');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
      
  function retrieveItems(){
   
      $query = $this->db->query('SELECT * from test_items join supplier on supplier_id = sup_id join test_supp_temp_po on sup_company = supp_name ');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
  function retrieveTruckingFee(){
   
      $query = $this->db->query('SELECT * from test_supp_temp_po');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
      
      
      
      
  }
  
  
  
  
  
  


?>
