<?php

	class InventoryStocks extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model("InventoryStocks_Model");
				$rawcoff_data["fetch_data"] = $this->InventoryStocks_Model->fetch_data();
				$this->load->view('Inventory_Module/inventoryStocks', $rawcoff_data);
			} else {
				redirect('login');
			}
		}

		function update(){
			$this->load->model('InventoryStocks_Model');
			$rawid = $this->input->post("rawid");
			$count = $this->input->post("count");
			$discrepancy = $this->input->post("discrepancy");
			$remarks = $this->input->post("remarks");
			$this->InventoryStocks_Model->update($rawid, $count, $discrepancy, $remarks);
			echo "<script>alert('Update successful!');</script>";
			redirect('inventoryStocks', 'refresh');
		}

	}

?>