<?php

	class AdminPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('AdminPackaging_model');
			$data['packaging']=$this->AdminPackaging_model->getPackaging();
			$this->load->view('Admin_Module/adminPackaging', $data);
		}

	}
?>