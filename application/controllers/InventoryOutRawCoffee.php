<?php

	class InventoryOutRawCoffee extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
<<<<<<< HEAD
			$this->load->model('InventoryOutRawCoffee_model');
            $data1['coffeeoutwalkin'] = $this->InventoryOutRawCoffee_model->get_coffeeoutwalkin();
            $data2['coffeeoutcontracted'] = $this->InventoryOutRawCoffee_model->get_coffeeoutcontracted();
            $data3['machineout'] = $this->InventoryOutRawCoffee_model->get_machineout();
            $this->load->view('Inventory_Module/inventoryOutRawCoffee', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
=======
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('InventoryOutRawCoffee_model');
            	$data['rawcoffeeout'] = $this->InventoryOutRawCoffee_model->get_rawcoffeeout();
            	$this->load->view('Inventory_Module/inventoryOutRawCoffee', $data);
            } else {
            	redirect('login');
            }
>>>>>>> f278ebc5390af8d8b83b78a01d5062a138f3c795
		}

	}

?>