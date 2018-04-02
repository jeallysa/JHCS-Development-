<?php

class InventoryPackaging_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function retrievePackaging(){
      $query = $this->db->query("SELECT * FROM jhcs.packaging NATURAL JOIN supplier WHERE pack_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }

	function update($data, $id){
              
    $this->db->where('package_id', $id ); 
    $this->db->update('packaging', $data);    
   
        
  }

}
