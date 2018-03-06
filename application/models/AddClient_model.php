<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddClient_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function add_data($client, $address, $cpfname, $cplname, $position, $email, $tel_number, $cli_type){
		$data = array(
			'client_company' => $client,
			'client_address' => $address,
			'client_fname' => $cpfname,
			'client_lname' => $cplname,
			'client_position' => $position,
			'client_email' => $email,
			'client_contact' => $tel_number,
			'client_type' => $cli_type,
			'client_status' => 'enabled'

		);
		
		$this->db->insert('contracted_client', $data);
		
		
		echo "<script>alert('You have inserted a new client!');
		window.location.href='" . base_url() . "adminClients';
		</script>";
	}

}