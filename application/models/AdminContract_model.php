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
		$query = $this->db->query("SELECT a.client_company, b.contract_id, b.credit_term, b.date_started, c.blend, d.package_type, d.package_size, b.required_qty, e.brewer, f.mach_qty, f.mach_serial  FROM contracted_client a JOIN contract b JOIN coffee_blend c JOIN packaging d JOIN machine e JOIN machine_out f ON a.client_id = b.client_id AND b.blend_id = c.blend_id AND b.package_id = d.package_id AND b.mach_id = e.mach_id AND b.mach_salesID = f.mach_salesID WHERE a.client_id = '".$id."';");
		return $query;
	}

	function update($id, $date_started, $contract_term, $contract_blend, $contract_size, $contract_bqty, $contract_machine, $contract_mqty, $contract_serial){
		$data = array(
	        'date_started' => $date_started,
	        'credit_term' => $contract_term,
	        'blend_id' => $contract_blend,
	        'package_id' => $contract_size,
	        'required_qty' => $contract_bqty,
	        'mach_id' => $contract_machine,
	        'mach_qty' => $contract_mqty,
	        'mach_serial' => $contract_serial

		);

		$this->db->where('contract_id', $id);
		$this->db->update('contract', $data);
	}
}
?>