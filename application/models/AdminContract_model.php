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
		$query = $this->db->query("SELECT client_company, contract_id, date_started, contract_blend, contract_bag, contract_size, contract_machine FROM contract NATURAL JOIN contracted_client WHERE client_id='".$id."';");
		return $query;
	}

	function update($id, $date_started, $contract_blend, $contract_bag, $contract_size, $contract_machine){
		$data = array(
	        'date_started' => $date_started,
	        'contract_blend' => $contract_blend,
	        'contract_bag' => $contract_bag,
	        'contract_size' => $contract_size,
	        'contract_machine' => $contract_machine     
		);

		$this->db->where('contract_id', $id);
		$this->db->update('contract', $data);
	}

}
?>