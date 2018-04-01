<?php

	class InventoryStickers extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryStickers_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$data['reorder'] = $this->notification_model->reorder();
				$data["sticker"] = $this->InventoryStickers_Model->retrieveSticker();
				$this->load->view('Inventory_Module/inventoryStickers', $data);
			} else {
				redirect('login');
			}
		}

		function update(){
			$this->load->model('InventoryStickers_Model');
			$stickerid = $this->input->post("stickerid");
			$count = $this->input->post("count");
			$discrepancy = $this->input->post("discrepancy");
			$remarks = $this->input->post("remarks");
			$this->InventoryStickers_Model->update($stickerid, $count, $discrepancy, $remarks);
			echo "<script>alert('Update successful!');</script>";
			redirect('inventoryStickers', 'refresh');
		}

	}

?>