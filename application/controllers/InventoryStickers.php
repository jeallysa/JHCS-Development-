<?php

	class InventoryStickers extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryStickers_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$data['reorder'] = $this->notification_model->reorder();
				$data["sticker"] = $this->InventoryStickers_Model->retrieveSticker();
				$this->load->view('Inventory_Module/inventoryStickers', $data);
			} else {
				redirect('login');
			}
		}

		function update($id){
             
            
            $data = array(
                        'sticker_id'         => $this->input->post("stckrid"),
                        'sticker_physcount'  => $this->input->post("physcount"),
                        'sticker_discrepancy'=> $this->input->post("discrepancy"),
                        'sticker_remarks'    => $this->input->post("remarks"),
                        'inventory_date'    => $this->input->post("date"),
                    );              
                
        
            $this->InventoryStickers_Model->update($data , $id);    
        
            
            redirect('inventoryStickers');
        }  

	}

?>