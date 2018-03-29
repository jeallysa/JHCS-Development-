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

	function fetch_data(){
		$query = $this->db->query("SELECT * FROM packaging NATURAL JOIN supplier WHERE pack_activation = '1';");
		return $query;
	}

	function update($packageid, $count, $discrepancy, $remarks){
		$data = array(
	        
	        'package_physcount' => $count,
	        'package_remarks' => $remarks,
	        'package_discrepancy' => $discrepancy
	        
		);

		$this->db->where('package_id', $packageid);
		$this->db->update('packaging', $data);
	}

}
