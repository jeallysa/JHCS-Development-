<?php

	class SalesReturns extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('SalesReturns_model');
			$data1['coffee'] = $this->SalesReturns_model->get_coffee_return();
			$data2['machine'] = $this->SalesReturns_model->get_machine_return();
			$data3['resolved_coffee'] = $this->SalesReturns_model->get_resolved_coffee();
			$data4['resolved_machine'] = $this->SalesReturns_model->get_resolved_machine();
			$this->load->view('Sales_Module/salesReturns', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
		}

	}

?>