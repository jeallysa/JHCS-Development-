<?php

	class SalesReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Sales_Module/salesReport');
		}

	}

?>