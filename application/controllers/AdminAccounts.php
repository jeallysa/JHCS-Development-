<?php

	class AdminAccounts extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model("Admin_Accounts_Model");
			$acc_data["fetch_data"] = $this->Admin_Accounts_Model->fetch_data();
			$this->load->view('Admin_Module/adminAccounts', $acc_data);
		}

		function update(){
			$this->load->model('Admin_Accounts_Model');
			$id = $this->input->post("id");
			$l_name = $this->input->post("l_name");
			$f_name = $this->input->post("f_name");
			$position = $this->input->post("position");
			$address = $this->input->post("address");
			$email = $this->input->post("email");
			$cell_no = $this->input->post("cell_no");
			$this->Admin_Accounts_Model->update($id, $l_name, $f_name, $position, $address, $email, $cell_no);
			echo "<script>alert('Update successful!');</script>";
			$this->index();
		}

	}
?>