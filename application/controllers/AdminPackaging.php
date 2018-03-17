<?php

	class AdminPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('AdminPackaging_model', 'CM');
			$this->load->helper('security');
		}
		
		function index()
		{ 
			$this->load->model('AdminPackaging_model');
			$data['packaging']=$this->AdminPackaging_model->getPackaging();
            $data1['getSupplier'] = $this->AdminPackaging_model->getSupplier();
			$this->load->view('Admin_Module/adminPackaging', ['data' => $data,  'data1' => $data1]);
		}
        
        function update(){
			$this->load->model('AdminPackaging_model');
			$id = $this->input->post("package_id");
			$type = $this->input->post("type");
            $size = $this->input->post("size");
			$reorder = $this->input->post("reorder");
			$stocklimit = $this->input->post("stocklimit");
			$stocks = $this->input->post("stocks");
			$sup_id = $this->input->post("sup_company");
			$this->AdminPackaging_model->update($id, $type, $size, $reorder, $stocks, $stocklimit, $sup_id);
			echo "<script>alert('Update successful!');</script>";
			$this->index();
		}
        
        function insert()
		{
			$this->load->model('AdminPackaging_model');
			$data = array(
				"package_type" =>$this->input->post("type"),
                "package_size" =>$this->input->post("size"),
				"package_reorder" =>$this->input->post("reorder"),
				"package_limit" =>$this->input->post("stocklimit"),
                "package_stock" =>$this->input->post("stocks"),
                "sup_id" =>$this->input->post("sup_company")
        
			);
			$data = $this->security->xss_clean($data);
			$this->AdminPackaging_model->insert_data($data);
			$this->index();
		}

	}
?>