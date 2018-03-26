<?php

	class SalesDashboard extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('SalesDashboard_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['sum'] = $this->SalesDashboard_model->getSales();
				$this->load->view('Sales_Module/salesDashboard', ['data'=>$data]);
			} else {
				redirect('login');
			}

		}
		
	}

?>