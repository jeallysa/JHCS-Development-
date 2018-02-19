<?php

	class AdminAccounts extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model("Admin_Accounts_Model");
			$acc_data["fetch_data"] = $this->Admin_Accounts_Model->fetch_data();
			$this->load->view('Admin_Module/adminAccounts', $acc_data);
		}

	}
?>