<?php

	class InventoryOutPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('InventoryOutPackaging_model');
            	$data['packageout'] = $this->InventoryOutPackaging_model->get_packageout();
            	$this->load->view('Inventory_Module/inventoryOutPackaging', $data);
            } else {
            	redirect('login');
            }
		}

	}

?>