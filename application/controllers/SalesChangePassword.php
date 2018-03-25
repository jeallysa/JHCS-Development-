<?php

	class SalesChangePassword extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->view('Sales_Module/salesChangePassword');
            } else { 
            	redirect('login');
            } 
		}

		public function updatePwd(){
			$this->form_validation->set_rules('password', 'Current Password', 'required|alpha_numeric|min_length[6]|max_length[20]');
			$this->form_validation->set_rules('newpassword', 'New Password', 'required|alpha_numeric|min_length[6]|max_length[20]');
			$this->form_validation->set_rules('confpassword', 'Confirm Password', 'required|alpha_numeric|min_length[6]|max_length[20]');
			if ($this->form_validation->run()) {
				$curr_password = $this->input->post('password');
				$new_password = $this->input->post('newpassword');
				$conf_password = $this->input->post('confpassword');
				$this->load->model('Changepassword_Model');
				$userid = '1';
				$psword = $this->Changepassword_Model->getCurrPassword($userid);
				
				if ($psword->password == $curr_password) {
					if ($new_password == $conf_password) {
						if ($this->Changepassword_Model->updatePassword($new_password, $userid )){
							$this->session->set_flashdata('success', 'Successfully Updated your Password');
							redirect('salesChangePassword');
						} else {
							$this->session->set_flashdata('error', 'Failed to Update Password');
							redirect('salesChangePassword');
							}
					} else {
						$this->session->set_flashdata('error', 'New Password and Confirmation Password does not Match');
							redirect('salesChangePassword');
					}
				} else {
					$this->session->set_flashdata('error', 'Sorry, You have input a wrong Password');
							redirect('salesChangePassword');
				}
			} else {
				echo validation_errors();
				$this->session->set_flashdata('error', validation_errors());
							redirect('salesChangePassword');
			}
		}

	}

?>