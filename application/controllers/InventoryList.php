<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
            $this->load->view('layout/header');
            
            $this->load->model('inventoryList_model');
            $data['category'] = $this->inventoryList_model ->retrieveCategory();
            
            
			$this->load->view('Inventory_Module/inventoryList' , $data);
		}

	}

?>