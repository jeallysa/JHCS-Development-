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
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminPackaging_model');
				$data['packaging']=$this->AdminPackaging_model->getPackaging();
	            $data1['getSupplier'] = $this->AdminPackaging_model->getSupplier();
				$this->load->view('Admin_Module/adminPackaging', ['data' => $data,  'data1' => $data1]);
			} else {
				redirect('login');
			}
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
			$this->AdminPackaging_model->activity_logs('admin', "Updated Packaging: '".$type." bag, ".$size."g'");
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
			$type = $this->input->post("type");
            $size = $this->input->post("size");
			$this->AdminPackaging_model->activity_logs('admin', "Inserted New Packaging: '".$type." bag, ".$size."g'");
			$data = $this->security->xss_clean($data);
			$this->AdminPackaging_model->insert_data($data);
			$this->index();
		}

        function activation(){
			
			$this->load->model('AdminPackaging_model');
			$id = $this->input->post("deact_id");
			$type = $this->input->post("type");
            $size = $this->input->post("size");

			if ($id == 1){
				$this->AdminPackaging_model->activity_logs('admin', "Activated: '".$type." bag, ".$size."g'");	
				$this->AdminPackaging_model->activation($id);
				redirect('adminPackaging');
			} else {
				$this->AdminPackaging_model->activity_logs('admin', "Deactivated: '".$type." bag, ".$size."g'");
				$this->AdminPackaging_model->activation($id);
				redirect('adminPackaging');
			}


		}
        
	}
?>