<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOOrder extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
           $this->load->view('layout/header');
            
            
            $this->load->model('inventoryPOOrder_model');
            $data['order'] = $this->inventoryPOOrder_model ->retrieveOrder();
            $data['details'] = $this->inventoryPOOrder_model ->details();
            
            
			$this->load->view('inventoryPOOrder' , $data);
		}

	}

?>