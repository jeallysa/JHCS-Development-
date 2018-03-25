<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class AddAccounts extends CI_Controller
	{
		public function __construct(){
			parent::__construct();

			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AddAccounts_model');  
			} else {
				redirect('login');
			}

		}
		
		public function insertAccounts()
		{ 
			$user_no = $this->input->post('user_no');
			$u_lname = $this->input->post('u_lname');
			$u_fname = $this->input->post('u_fname');
			$u_type = $this->input->post('u_type');
			$u_address = $this->input->post('u_address');
			$u_email = $this->input->post('u_email');
			$tel_number = $this->input->post('tel_number');
			$u_contact = $this->input->post('u_contact');
            $username = $this->input->post('username');
			$password = $this->input->post('password');


			$this->AddAccounts_model->add_data($user_no, $u_lname, $u_fname, $u_type, $u_address, $u_email, $u_contact, $username, $password);
			
			
			
		}

	}
?>