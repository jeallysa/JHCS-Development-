<?php

	class AdminNewClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('Admin_Clients_Model', 'CM');
			$this->load->helper('security'); 
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Admin_Module/adminNewClients');
			} else {
				redirect('login');
			}
		}

		function insert($id, $comp_name, $cli_type, $l_name, $f_name, $address, $email, $cell_no){
		$data = array(
	        'client_company' => $comp_name,
	        'client_type' => $cli_type,
	        'client_lname' => $l_name,
	        'client_fname' => $f_name,
	        'client_address' => $address,
	        'client_email' => $email,
	        'client_contact' => $cell_no	        
		);
		$this->Admin_Clients_Model->activity_logs('admin', "Updated Client Information: '".$comp_name."'");	
		$this->db->where('client_id', $id);
		$this->db->update('contracted_client', $data);
	}

	}
?>