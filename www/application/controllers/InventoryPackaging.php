<?php

	class InventoryPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryPackaging_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
				$data["packaging"] = $this->InventoryPackaging_Model->retrievePackaging();
				$this->load->view('Inventory_Module/inventoryPackaging', $data);
			} else {
				redirect('login');
			}
		}

		function update($id){
             
            
            $data = array(
                        'package_id'         => $this->input->post("pckgid"),
                        'package_physcount'  => $this->input->post("physcount"),
                        'package_discrepancy'=> $this->input->post("discrepancy"),
                        'package_remarks'    => $this->input->post("remarks"),
                        'inventory_date'    => $this->input->post("date"),
                    );              
                
        
            $this->InventoryPackaging_Model->update($data , $id);    
        
            
            redirect('inventoryPackaging');
        }  

	}

?>