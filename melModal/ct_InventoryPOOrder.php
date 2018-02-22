<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class ct_InventoryPOOrder extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
           $this->load->view('layout/header');
            
            
            $this->load->model('model_inventoryPOOrder');
            $data['order'] = $this->model_inventoryPOOrder ->retrieveOrder();
            $data['details'] = $this->model_inventoryPOOrder ->details();
            
            
			$this->load->view('Inventory_Module/inventoryPOOrder' , $data);
		}

	}

?>