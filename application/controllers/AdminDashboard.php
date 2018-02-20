<?php

	class AdminDashboard extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('AdminDashboard_model');
			$data['sales']=$this->AdminDashboard_model->getSales();
			$this->load->view('Admin_Module/adminDashboard', $data);
		}

	}
?>