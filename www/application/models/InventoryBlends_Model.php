<?php

class InventoryBlends_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function retrieveBlends(){
      $query = $this->db->query("SELECT blend_id, blend, package_type, package_size, blend_qty, blend_physcount, blend_discrepancy, coffee_blend.inventory_date, blend_remarks FROM jhcs.coffee_blend INNER JOIN packaging ON coffee_blend.package_id = packaging.package_id WHERE blend_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }

  function update($data, $id){
              
    $this->db->where('blend_id', $id ); 
    $this->db->update('coffee_blend', $data);    
   
        
  }

}
