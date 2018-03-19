<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOOrder extends CI_Controller{
        
        
		function __construct(){
			parent::__construct();
            
            $this->load->model('inventoryPOOrder_model');
		}
		
        
        
        
        
		public function index(){ 
           $this->load->view('layout/header');
            
            
            $data['order'] = $this->inventoryPOOrder_model ->retrieveOrder();
            $data['details'] = $this->inventoryPOOrder_model ->details();
            
            
			$this->load->view('inventoryPOOrder' , $data);
		}
        
        
   
        public function insertPartial($temp){
    /*
         $dataInsert = array(
                            
                             "supp_po_id"    => $temp,
                          
                             "yield_weight"  => $this->input->post("yield_weight"),
                             "date_received" => $this->input->post("date"),
                             "received_by"   => $this->input->post("receivedBy"),
                            
                            );
         
         $this->inventoryPOOrder_model->insertPartialDelivery($dataInsert);
         
         
         
         
         redirect(base_url('inventoryPOOrder'));
     } 
        */
        if ($_POST)  {
           
        $itemIdv=$this->input->post('itemId');
        $yield_weightv=$this->input->post('yield_weight');
        $datev=$this->input->post('date');
        $receivedByv=$this->input->post('receivedBy');
        $status = 1;
            
        $data = array();
           
        for ($i = 0; $i < count($this->input->post('itemId')); $i++){
            $data[$i] = array(
                'test_supp_po_ordered_id' => $itemIdv[$i],
                'yield_weight' => $yield_weightv[$i],
                'date_received' => $datev[$i],
                'received_by' =>$receivedByv[$i],
                'supp_po_id'    => $temp,
               
            );
        }
           
        $this->inventoryPOOrder_model->insertPartialDelivery($data);
    }  
        
       redirect(base_url('inventoryPOOrder'));
 
        
  

	}
    }

?>