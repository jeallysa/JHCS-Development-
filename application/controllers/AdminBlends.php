<?php

	class AdminBlends extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Blends_Model');
				$blend_data["fetch_data_eb"] = $this->Admin_Blends_Model->fetch_data_eb();
				$this->load->view('Admin_Module/adminBlends', $blend_data);
			} else {
				redirect('login');
			}
		}
        

	}
?>