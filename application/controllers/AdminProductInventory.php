<?php

	class AdminProductInventory extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		function index()
		{ 
			$this->load->model('AdminProductInventory_model');
            $data["product"] = $this->AdminProductInventory_model->getProducts();
            $data1['getSupplier'] = $this->AdminProductInventory_model->getSupplier();
			$this->load->view('Admin_Module/adminProductInventory', ['data' => $data,  'data1' => $data1]);
            
		}
        
        function insert()
		{
			$this->load->model('AdminProductInventory_model');
			$data = array(
				"raw_coffee" =>$this->input->post("name"),
				"raw_reorder" =>$this->input->post("reorder"),
				"raw_limit" =>$this->input->post("stocklimit"),
                "raw_stock" =>$this->input->post("stocks"),
                "sup_id" =>$this->input->post("sup_company")
        
			);
			$this->AdminProductInventory_model->insert_data($data);
			$this->index();
		}

	}
?>