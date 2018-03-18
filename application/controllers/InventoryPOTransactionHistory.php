<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOTransactionHistory extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
	            $this->load->view('layout/header');
	            $this->load->model('inventoryPOTransactionHistory_model');
	            
	            
	            $data['Transactions'] = $this->inventoryPOTransactionHistory_model ->retrieveTransactions();
	            
	            
	            
				$this->load->view('inventoryPOTransactionHistory' , $data);
			} else {
				redirect('login');
			}
		}

	}

?>