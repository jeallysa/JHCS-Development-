<?php

	class AdminSupplier extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('Admin_Suppliers_Model');
		}
		
		public function index()
		{ 
			
			$sup_data["fetch_data"] = $this->Admin_Suppliers_Model->fetch_data();
			$this->load->view('Admin_Module/adminSupplier', $sup_data);
		}




		public function ajax_edit($id)
		{
			$data = $this->Admin_Suppliers_Model->get_by_id($id);
			echo json_encode($data);
		}



		public function book_update()
		{
			$data = array(
				'supplier_name' => $this->input->post('supplier_name'),
				'supplier_address' => $this->input->post('supplier_address'),
				'supplier_email' => $this->input->post('supplier_email'),
				'supplier_contact' => $this->input->post('supplier_contact'),
				'supplier_product' => $this->input->post('supplier_product'),
				'supplier_position' => $this->input->post('supplier_position'),
				'supplier_lname' => $this->input->post('supplier_lname'),
				'supplier_fname' => $this->input->post('supplier_fname'),
			);
			$this->Admin_Suppliers_Model->sup_update(array('sup_id' => $this->input->post('sup_id')), $data);
			echo json_encode(array("status" => TRUE));
		}

	}
?>