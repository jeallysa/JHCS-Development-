<?php

	class SalesReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('Sales_model');
			$data['sales']=$this->Sales_model->getSales();
			$this->load->view('Sales_Module/salesReport', $data);
		}

	}

?>