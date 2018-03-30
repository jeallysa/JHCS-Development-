<?php

	class InventoryMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model("InventoryMachines_Model");
				$data["machine"] = $this->InventoryMachines_Model->retrieveMachine();
				$this->load->view('Inventory_Module/inventoryMachines', $data);
			} else {
				redirect('login');
			}
		}


		function update(){
			$this->load->model('InventoryMachines_Model');
			$machid = $this->input->post("machid");
			$count = $this->input->post("count");
			$discrepancy = $this->input->post("discrepancy");
			$remarks = $this->input->post("remarks");
			$this->InventoryStickers_Model->update($machid, $count, $discrepancy, $remarks);
			echo "<script>alert('Update successful!');</script>";
			redirect('inventoryMachines', 'refresh');
		}


	}

?>