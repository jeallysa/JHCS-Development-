<?php

	class InventorySamplesList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model("InventorySamplesList_Model");
			$smpl_data["fetch_data"] = $this->InventorySamplesList_Model->fetch_data();
			$data1['get_drnumber'] = $this->InventorySamplesList_Model->get_drnumber();
			$data2['get_packaging'] = $this->InventorySamplesList_Model->get_packaging();
			$data3['get_sticker'] = $this->InventorySamplesList_Model->get_sticker();
			$this->load->view('Inventory_Module/inventorySamplesList', ['smpl_data' => $smpl_data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3] );
		}

		public function insert()
		{
			$this->load->model('InventorySamplesList_Model');
			$data = array(
				"sample_date" =>$this->input->post("date"),
				"sample_recipient" =>$this->input->post("recipient"),
				"sample_type" =>$this->input->post("type"),
				"client_coffReturnID" =>$this->input->post("drnumber"),
				"package_id" =>$this->input->post("packaging"),
				"sticker_id" =>$this->input->post("sticker")
			);
			$this->InventorySamplesList_Model->insert_data($data);
			$this->index();
		}

	}

?>