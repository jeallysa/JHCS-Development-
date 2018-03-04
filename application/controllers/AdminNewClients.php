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
			$this->load->view('Admin_Module/adminNewClients');
		}

	}
?>