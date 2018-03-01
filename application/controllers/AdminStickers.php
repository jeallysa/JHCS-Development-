<?php

	class AdminStickers extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		function index()
		{ 
			$this->load->model('AdminStickers_model');
			$data['stickers']=$this->AdminStickers_model->getStickers();
            $data1['getSupplier'] = $this->AdminStickers_model->getSupplier();
			$this->load->view('Admin_Module/adminStickers',  ['data' => $data,  'data1' => $data1]);
		}
        
         function insert()
		{
			$this->load->model('AdminStickers_model');
			$data = array(
				"sticker" =>$this->input->post("name"),
				"sticker_reorder" =>$this->input->post("reorder"),
				"sticker_limit" =>$this->input->post("stocklimit"),
                "sticker_stock" =>$this->input->post("stocks"),
                "sup_id" =>$this->input->post("sup_company")
			);
			$this->AdminStickers_model->insert_data($data);
			$this->index();
		}

	}
?>