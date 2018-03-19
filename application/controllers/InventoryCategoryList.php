<?php

	class InventoryCategoryList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Inventory_Module/inventoryCategoryList');
			} else {
				redirect('login');
			}
		}

	}

?>