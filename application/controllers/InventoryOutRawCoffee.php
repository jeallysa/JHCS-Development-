<?php

	class InventoryOutRawCoffee extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('InventoryOutRawCoffee_model');
            $data['rawcoffeeout'] = $this->InventoryOutRawCoffee_model->get_rawcoffeeout();
            $this->load->view('Inventory_Module/inventoryOutRawCoffee', $data);
		}

	}

?>