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
      $query = $this->db->query("SELECT * FROM jhcs.coffee_blend NATURAL JOIN packaging WHERE blend_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }

}
