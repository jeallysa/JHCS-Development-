<?php

	class InventoryPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model("InventoryPackaging_Model");
				$data["packaging"] = $this->InventoryPackaging_Model->retrievePackaging();
				$this->load->view('Inventory_Module/inventoryPackaging', $data);
			} else {
				redirect('login');
			}
		}

		function update(){
			$this->load->model('InventoryPackaging_Model');
			$packageid = $this->input->post("packageid");
			$count = $this->input->post("count");
			$discrepancy = $this->input->post("discrepancy");
			$remarks = $this->input->post("remarks");
			$this->InventoryPackaging_Model->update($packageid, $count, $discrepancy, $remarks);
			echo "<script>alert('Update successful!');</script>";
			redirect('inventoryPackaging', 'refresh');
		}

	}

?>