<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryItemList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
            $this->load->view('layout/header');
            
            $this->load->model('inventoryItemList_model');
            $data['items'] = $this->inventoryItemList_model->retrieveItems();
            
			$this->load->view('Inventory_Module/inventoryItemList' , $data);
		}

	}

?>