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
		$query = $this->db->query("SELECT * FROM jhcs.machine NATURAL JOIN supplier WHERE mach_activation = '1';");
		return $query;
	}

	function update($machid, $count, $discrepancy, $remarks){
		$data = array(
	        
	        'mach_physcount' => $count,
	        'mach_remarks' => $remarks,
	        'mach_discrepancy' => $discrepancy
	        
		);

		$this->db->where('mach_id', $machid);
		$this->db->update('machine', $data);
	}

}
