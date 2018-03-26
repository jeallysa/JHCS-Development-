<?php

	class AdminAddContract extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
                $this->load->model('AdminAddContract_model');
	            $data1['getBlend'] = $this->AdminAddContract_model->getBlend();
                $data2['getBag'] = $this->AdminAddContract_model->getBag();
                $data3['getMachine'] = $this->AdminAddContract_model->getMachine();
                $data4['getName'] = $this->AdminAddContract_model->getName();
				$this->load->view('Admin_Module/adminAddContract', ['data1' => $data1,'data2' => $data2,'data3' => $data3,'data4' => $data4]);
                
			} else {
				redirect('login');
			}
		}
        
          function insert()
		{
			$this->load->model('AdminAddContract_model');
			$data = array(
                "client_id" =>$this->input->post("client_company"),
				"date_started" =>$this->input->post("date_started"),
				"blend_id" =>$this->input->post("contract_blend"),
				"package_id" =>$this->input->post("contract_bag"),
				"mach_id" =>$this->input->post("contract_bag"),
                "required_qty" =>$this->input->post("contract_qty")
                
			);
			$data = $this->security->xss_clean($data);
			$this->AdminAddContract_model->insert_data($data);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminClients', 'refresh');
		}


	}
?>