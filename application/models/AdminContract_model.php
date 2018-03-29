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
		$query = $this->db->query("SELECT client_company, contract_id, date_started, blend_id, blend, package_id, package_type, mach_id, brewer, required_qty, credit_term FROM contract NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging NATURAL JOIN machine NATURAL JOIN machine_out WHERE client_id='".$id."';");
		return $query;
	}

	function update($id, $date_started, $credit_term, $blend_id, $package_id, $required_qty /*, $mach_qty, $mach_id, $mach_serial*/){
		$data = array(
	        'date_started' => $date_started,
	        'credit_term' => $contract_term,
	        'blend_id' => $contract_blend,
	        'package_id' => $contract_bag,
	        'package_id' => $contract_size,
	        'required_qty' => $contract_bqty/*,
	        'mach_id' => $contract_bag,
	        'mach_qty' => $contract_mqty,
	        'mach_serial' => $contract_serial*/

		);

		$this->db->where('contract_id', $id);
		$this->db->update('contract', $data);
	}

}
?>