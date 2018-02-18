<?php

class InventoryActivityLogs_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->get("activitylogs");
		return $query;
	}

}
