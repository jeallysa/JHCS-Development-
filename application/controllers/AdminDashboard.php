<?php

	class AdminDashboard extends CI_Controller
	{
		function __construct(){
			parent::__construct();
        	$this->load->model('login_model');  

		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminDashboard_model');
	            $rawcoffeeStock = $this->AdminDashboard_model->get_rawcoffeestock();
	            $data1['rawcoffeestock'] = $rawcoffeeStock[0]->rawstock;
	            $packagingStock = $this->AdminDashboard_model->get_packagingstock();
	            $data2['packagingstock'] = $packagingStock[0]->packstock;
	            $stickerStock = $this->AdminDashboard_model->get_stickerstock();
	            $data3['stickerstock'] = $stickerStock[0]->stickerstock;
	            $machineStock = $this->AdminDashboard_model->get_machinestock();
	            $data4['machinestock'] = $machineStock[0]->machinestock;
	            $data5['sales']=$this->AdminDashboard_model->getSales();
            
            
            $this->load->view('Admin_Module/adminDashboard', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5] );
			} else {
				redirect('login');
			}
			
		}

	}
?>