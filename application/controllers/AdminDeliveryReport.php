<?php

	class AdminDeliveryReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('AdminDeliveryReport_model');
			$data['delivery']=$this->AdminDeliveryReport_model->getDelivery();
			$this->load->view('Admin_Module/adminDeliveryReport', $data);
		}

	}

?>