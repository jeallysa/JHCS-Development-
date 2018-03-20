<?php

	class InventoryOutRawCoffee extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{
            if ($this->session->userdata('username') != '')
			{
                $this->load->model('InventoryOutRawCoffee_model');
                $data1['coffeeoutwalkin'] = $this->InventoryOutRawCoffee_model->get_coffeeoutwalkin();
                $data2['coffeeoutcontracted'] = $this->InventoryOutRawCoffee_model->get_coffeeoutcontracted();
                $data3['machineout'] = $this->InventoryOutRawCoffee_model->get_machineout();
                $this->load->view('Inventory_Module/inventoryOutRawCoffee', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
            } else {
            	redirect('login');
            }
		}

	}

?>