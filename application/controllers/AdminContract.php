<?php

	class AdminContract extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{
            $id = $this->input->get('p');
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminContract_model');
				$cli_data["fetch_data"] = $this->AdminContract_model->fetch_data($id);
				$this->load->view('Admin_Module/adminContract', $cli_data);
			} else {
				redirect('login');
			}
		}

		function update(){
			$this->load->model('AdminContract_model');
			$id = $this->input->post("contract_id");
            
			$date_started = $this->input->post("date_started");
			$blend_id = $this->input->post("contract_blend");
			$package_id = $this->input->post("contract_bag");
			$mach_id = $this->input->post("contract_machine");
			$required_qty = $this->input->post("contract_qty");
            
			$this->AdminContract_model->update($id, $date_started, $blend_id, $package_id, $mach_id, $required_qty);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminClients', 'refresh');
		}
        
    }
?>