<?php

	class AdminProductInventory extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('AdminProductInventory_model', 'CM');
			$this->load->helper('security');
		}
		
		function index()
		{ 
			$this->load->model('AdminProductInventory_model');
            $data["product"] = $this->AdminProductInventory_model->getProducts();
            $data1['getSupplier'] = $this->AdminProductInventory_model->getSupplier();
			$this->load->view('Admin_Module/adminProductInventory', ['data' => $data,  'data1' => $data1]);
            
		}

		function update(){
			$this->load->model('AdminProductInventory_model');
			$id = $this->input->post("raw_id");
			$name = $this->input->post("name");
			$reorder = $this->input->post("reorder");
			$stocklimit = $this->input->post("stocklimit");
			$stocks = $this->input->post("stocks");
			$sup_id = $this->input->post("sup_company");
			$this->AdminProductInventory_model->update($id, $name, $reorder, $stocks, $stocklimit, $sup_id);
			echo "<script>alert('Update successful!');</script>";
			$this->index();
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
			$data = $this->security->xss_clean($data);
			$this->AdminProductInventory_model->insert_data($data);
			$this->index();
		}

	}
?>