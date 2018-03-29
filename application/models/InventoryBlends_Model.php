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
		$query = $this->db->query("SELECT * FROM coffee_blend INNER JOIN packaging ON coffee_blend.package_id = packaging.package_id WHERE blend_activation = '1';");
		return $query;
	}

}
