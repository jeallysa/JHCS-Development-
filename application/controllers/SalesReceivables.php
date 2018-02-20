<?php

	class SalesReceivables extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('Receivable_model');
			$data['receivable']=$this->Receivable_model->getReceivable();
			$this->load->view('Sales_Module/salesReceivables', $data);
		}

	}

?>