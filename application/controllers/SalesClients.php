<?php

	class SalesClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('SalesClients_model');
			$data['clients'] = $this->SalesClients_model->get_clients_list();
			$this->load->view('Sales_Module/salesClients', $data);
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