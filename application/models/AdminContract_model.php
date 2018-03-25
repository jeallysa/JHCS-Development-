<?php

class AdminContract_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data($id){
		$query = $this->db->query("SELECT client_company, contract_id, date_started, blend_id, blend, package_id, package_type, mach_id, brewer, required_qty FROM contract NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging NATURAL JOIN machine WHERE client_id='".$id."';");
		return $query;
	}

	function update($id, $date_started, $blend_id, $package_id, $mach_id, $required_qty){
		$data = array(
	        'date_started' => $date_started,
	        'blend_id' => $contract_blend,
	        'package_id' => $contract_bag,
	        'mach_id' => $contract_machine,
	        'required_qty' => $contract_qty   
		);

		$this->db->where('contract_id', $id);
		$this->db->update('contract', $data);
	}

}
?>