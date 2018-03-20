<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOOrder extends CI_Controller{
        
        
		function __construct(){
			parent::__construct();
            
            $this->load->model('inventoryPOOrder_model');
            $this->load->helper('date');
		}
		
        
        
        
        
		public function index(){ 
           $this->load->view('layout/header');
            
            
            $data['order'] = $this->inventoryPOOrder_model ->retrieveOrder();
            $data['user'] = $this->inventoryPOOrder_model ->retrieveUsers();
            
            
			$this->load->view('inventoryPOOrder' , $data);
		}
        
        
   
        public function insertPartial($temp){

        $itemIdv=$this->input->post('itemId');
        $itemNamev=$this->input->post('item');
        $yield_weightv=$this->input->post('yield_weight');
        $yieldsv = $this->input->post('yield');
        $datev=$this->input->post('date');
        $receivedByv=$this->input->post('receivedBy');
        $supp_po_id = $temp;
            
        $data = array();   
        $data2 = array(); 
            
        if ($_POST)  {
        for ($i = 0; $i < count($this->input->post('itemId')); $i++){
          if(!empty($yield_weightv[$i])){
              
              $data3[$i] = array(
                                    "item" => $itemNamev[$i],
                                    "supp_po_ordered_id" => $itemIdv[$i],
                                    "yield_weight" => $yield_weightv[$i],
                                    "date_received" => $datev[$i],
                                    "received_by" =>$receivedByv[$i],
                                    "supp_po_id"    => $temp,
            );
            
                             $data2[$i] = array('supp_po_ordered_id' => $itemIdv[$i],  //To map what product in a particular PO
                                                
                              );
                                $data[$i] = array(
                                    'supp_po_ordered_id' => $itemIdv[$i],
                                    'yield_weight' => $yield_weightv[$i],
                                    'yields' => $yieldsv[$i],
                                    'date_received' => $datev[$i],
                                    'received_by' =>$receivedByv[$i],
                                    'supp_po_id'    => $temp,
        
                                 );
                               
                             
                           }
    }
        $this->inventoryPOOrder_model->insertORDER($data);
            
        $this->inventoryPOOrder_model->updateOrderStatus($data2, $supp_po_id); //updating the status first before refreshing.
        $this->inventoryPOOrder_model->updateStock($data3, $supp_po_id); 
	}
            
            
            
            
            
            redirect(base_url('inventoryPOOrder'));
    }
        
    
        
        
    
        public function insertFull($temp){

        $itemIdv=$this->input->post('itemId');
        $itemNamev=$this->input->post('item');
        $itemNamev=$this->input->post('itemName');
        $yield_weightv=$this->input->post('yield_weight');
        $datev=$this->input->post('date');
        $receivedByv=$this->input->post('receivedBy');
        $supp_po_id = $temp;
            
        $data = array();   
        $data2 = array(); 
            
        if ($_POST)  {
        for ($i = 0; $i < count($this->input->post('itemId')); $i++){       //to have a length used the itemID
                             
                            
            $data3[$i] = array(
                                    'item' => $itemNamev[$i],
                                    'supp_po_ordered_id' => $itemIdv[$i],
                                    'yield_weight' => $yield_weightv[$i],
                                    'date_received' => $datev[$i],
                                    'received_by' =>$receivedByv[$i],
                                    'supp_po_id'    => $temp,
            );
            
            
                   
              
                             $data2[$i] = array('supp_po_ordered_id' => $itemIdv[$i],  //To map what product in a particular PO
                                                
                              );
                                $data[$i] = array(
                                    'supp_po_ordered_id' => $itemIdv[$i],
                                    'yield_weight' => $yield_weightv[$i],
                                    'date_received' => $datev[$i],
                                    'received_by' =>$receivedByv[$i],
                                    'supp_po_id'    => $temp,
        
                                 );
                               
                             
                           
    }
        $this->inventoryPOOrder_model->insertORDER($data);
        $this->inventoryPOOrder_model->updateOrderStatus($data2, $supp_po_id);  //updating the status first before refreshing.
            
            
        $this->inventoryPOOrder_model->updateStock($data3, $supp_po_id);    
       
}
            
            
            
            
            
            redirect(base_url('inventoryPOOrder'));
    }   
        
        
        
}
?>