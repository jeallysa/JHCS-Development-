<?php

	class SalesClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Sales_Module/salesClients');
		}
		public function salesClientsInfo()
		{
			$this->load->view('Sales_Module/salesClientsInfo');
		}
		public function salesContract()
		{
			$this->load->view('Sales_Module/salesContract');
		}

	}

?>