<?php

class InventoryMachines_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT * FROM jhcs.machine NATURAL JOIN supplier;");
		return $query;
	}

}
