<?php

	class AdminStickers extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('AdminStickers_model');
			$data['stickers']=$this->AdminStickers_model->getStickers();
			$this->load->view('Admin_Module/adminStickers', $data);
		}

	}
?>