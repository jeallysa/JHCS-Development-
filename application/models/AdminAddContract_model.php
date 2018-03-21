<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminAddContract_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function add_data($date_started, $contract_blend, $contract_bag, $contract_size, $contract_machine){
		$data = array(
			'date_started' => $date_started,
			'contract_blend' => $contract_blend,
			'contract_bag' => $contract_bag,
			'contract_size' => $contract_size,
			'contract_machine' => $contract_machine
		);
		
		$this->db->insert('contract', $data);
		
		
		echo "<script>alert('You have inserted a new contract!');
		window.location.href='" . base_url() . "adminAddContract';
		</script>";
	}

}