<?php

	class AdminMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('AdminMachines_model');
			$data['machines']=$this->AdminMachines_model->getMachines();
			$this->load->view('Admin_Module/adminMachines', $data);
		}

	}
?>