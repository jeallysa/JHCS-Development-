<?php

	class AdminClientBlends extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Blends_Model');
				$blend_data["fetch_data_cb"] = $this->Admin_Blends_Model->fetch_data_cb();
				$this->load->view('Admin_Module/adminClientBlends', $blend_data);
			} else {
				redirect('login');
			}
		}

	}
?>