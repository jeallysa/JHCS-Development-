<?php

	class SalesSellProduct extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Sales_Module/salesSellProduct');
		}
		public function salesWalkin()
		{ 
			$this->load->view('Sales_Module/salesWalkin');
		}

	}

?>