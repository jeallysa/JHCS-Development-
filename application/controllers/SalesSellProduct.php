<?php

	class SalesSellProduct extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('sellProduct_model');
			$data1['sellCoffee']=$this->sellProduct_model->getSoldCoffee();
			$data2['sellMachine']=$this->sellProduct_model->getSoldMachine();
			$this->load->view('Sales_Module/salesSellProduct', ['data1' => $data1, 'data2' => $data2]);
		}
		public function salesMachine()
		{ 
			$this->load->view('Sales_Module/salesMachine');
		}
		public function salesWalkin()
		{ 
			$this->load->view('Sales_Module/salesWalkin');
		}
		

	}

?>