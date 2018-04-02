<?php

	class InventoryStocks extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryStocks_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
                $data['coffee'] = $this->InventoryStocks_Model ->retrieveCoffee();
				$this->load->view('Inventory_Module/inventoryStocks', $data);
			} else {
				redirect('login');
			}
		}

		function update($id){
             
            
            $data = array(
                        'raw_id'         => $this->input->post("rawid"),
                        'raw_physcount'  => $this->input->post("physcount"),
                        'raw_discrepancy'=> $this->input->post("discrepancy"),
                        'raw_remarks'    => $this->input->post("remarks"),
                        'inventory_date'    => $this->input->post("date"),
                    );              
                
        
            $this->InventoryStocks_Model->update($data , $id);    
        
            
            redirect('inventorystocks');
        }  

	}

?>