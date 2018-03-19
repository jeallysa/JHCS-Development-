<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventorySupplierList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
            if ($this->session->userdata('username') != '')
            {
            	$this->load->view('layout/header');
	            $this->load->model('inventorySupplierList_model');
	            $data['supplier'] = $this->inventorySupplierList_model ->retrieveSupplier();
				$this->load->view('inventorySupplierList' ,$data);
			} else {
				redirect('login');
			}
            
            
            
            
            
		}

	}

?>