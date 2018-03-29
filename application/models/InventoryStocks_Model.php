<?php

class InventoryStocks_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT * FROM raw_coffee NATURAL JOIN supplier WHERE raw_activation = '1';");
		return $query;
	}
	
	function update($rawid, $count, $discrepancy, $remarks){
		$data = array(
	        
	        'raw_physcount' => $count,
	        'raw_remarks' => $remarks,
	        'raw_discrepancy' => $discrepancy
	        
		);

		$this->db->where('raw_id', $rawid);
		$this->db->update('raw_coffee', $data);
	}

}
