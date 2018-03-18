<?php

	class SalesDashboard extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('sales_model');
				$this->load->view('Sales_Module/salesDashboard');
			} else {
				redirect('login');
			}

		}
	}

?>