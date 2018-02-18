<?php

	class AdminClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('Admin_Clients_Model');
			$cli_data["fetch_data"] = $this->Admin_Clients_Model->fetch_data();
			$this->load->view('Admin_Module/adminClients', $cli_data);
		}

	}
?>