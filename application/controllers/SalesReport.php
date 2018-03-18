<?php

	class SalesReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('Sales_model');
				$data['sales']=$this->Sales_model->getSales();
				$this->load->view('Sales_Module/salesReport', $data);
			} else {
				redirect('login');
			}
		}

	}

?>