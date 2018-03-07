<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOUnpaidDelivery extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
            $this->load->view('layout/header');
            $this->load->model('inventoryPOUnpaidDelivery_model');
            
            
            $data['unpaid'] = $this->inventoryPOUnpaidDelivery_model->retrieveUnpaid();
            
            
			$this->load->view('Inventory_Module/inventoryPOUnpaidDelivery', $data);
		}

	}

?>