<?php

	class AdminClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Clients_Model');
				$cli_data["fetch_data"] = $this->Admin_Clients_Model->fetch_data();
				$this->load->view('Admin_Module/adminClients', $cli_data);
			} else {
				redirect('login');
			}
		}

		function update(){
			$this->load->model('Admin_Clients_Model');
			$id = $this->input->post("id");
			$comp_name = $this->input->post("comp_name");
			$cli_type = $this->input->post("cli_type");
			$l_name = $this->input->post("last_name");
			$f_name = $this->input->post("first_name");
			$address = $this->input->post("address");
			$email = $this->input->post("email");
			$cell_no = $this->input->post("cell_no");
			$this->Admin_Clients_Model->update($id, $comp_name, $cli_type, $l_name, $f_name, $address, $email, $cell_no);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminClients', 'refresh');
		}

	}
?>