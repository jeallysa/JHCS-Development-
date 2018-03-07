<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventorySupplierList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
            $this->load->view('layout/header');
            
            
            $this->load->model('inventorySupplierList_model');
            $data['supplier'] = $this->inventorySupplierList_model ->retrieveSupplier();
            
            
			$this->load->view('Inventory_Module/inventorySupplierList' ,$data);
            
            
            
            
            
		}

	}

?>