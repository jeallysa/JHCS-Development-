<?php

	class AdminNewAccounts extends CI_Controller
	{
		function __construct(){
			parent::__construct();
            $this->load->model('Admin_Accounts_Model', 'CM');
			$this->load->helper('security');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Admin_Module/adminNewAccounts');
			} else {
				redirect('login');
			}
		}

	}
?>