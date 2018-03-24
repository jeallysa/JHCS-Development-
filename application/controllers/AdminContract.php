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
			$contract_blend = $this->input->post("contract_blend");
			$contract_bag = $this->input->post("contract_bag");
			$contract_size = $this->input->post("contract_size");
			$contract_machine = $this->input->post("contract_machine");
            
			$this->AdminContract_model->update($id, $date_started, $contract_blend, $contract_bag, $contract_size, $contract_machine);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminClients', 'refresh');
		}
        
    }
?>