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

	function fetch_data(){
		$query = $this->db->query("SELECT blend_id, blend, package_type, package_size, blend_qty, blend_price, blend_physcount, blend_remarks FROM jhcs.coffee_blend NATURAL JOIN packaging WHERE blend_activation = '1';");
		return $query;
	}

}
