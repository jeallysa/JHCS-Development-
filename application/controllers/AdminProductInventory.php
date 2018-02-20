<?php

	class AdminProductInventory extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('AdminProductInventory_model');
			$data['product']=$this->AdminProductInventory_model->getProduct();
			$this->load->view('Admin_Module/adminProductInventory', $data);
		}

	}
?>