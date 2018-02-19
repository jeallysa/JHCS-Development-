<?php

	class InventoryOutMachine extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('InventoryOutMachine_model');
            $data['machineout'] = $this->InventoryOutMachine_model->get_machineout();
            $this->load->view('Inventory_Module/inventoryOutMachine', $data);
		}
	}

?>