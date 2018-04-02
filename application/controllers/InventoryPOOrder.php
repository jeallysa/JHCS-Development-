<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOOrder extends CI_Controller{
        
        
		function __construct(){
			parent::__construct();
            
            $this->load->model('inventoryPOOrder_model');
            $this->load->model('notification_model');
            $this->load->helper('date');
		}
		
        
        
        
        
		public function index(){ 
       //    $this->load->view('layout/header');
            
            
            $data['order'] = $this->inventoryPOOrder_model ->retrieveOrder();
            $data['user'] = $this->inventoryPOOrder_model ->retrieveUsers();
            
            
            $data['reorder'] = $this->notification_model->reorder();
            
            
			$this->load->view('inventoryPOOrder' , $data);
		}
        
        
   
        public function insertPartial($temp){
           
        $DRNO=$this->input->post('DRNO');
        $itemIdv=$this->input->post('itemId');
        $itemNamev=$this->input->post('item');
        $itemTypev=$this->input->post('itemType');
        $yield_weightv=$this->input->post('yield_weight');
        $yieldsv = $this->input->post('yield');
       
        $receivedv = $this->input->post('received');    
        $datev=$this->input->post('date');
        $receivedByv=$this->input->post('receivedBy');
        $supp_po_id = $temp;
            
       
  if ($_POST)  {
        
 for ($i = 0; $i < count($this->input->post('itemId')); $i++){                                                       // i need these two condition first look at the post if there is no problem and all are good..
 //     if((!empty($yield_weightv[$i]))&&($datev[$i] <= date('Y-m-d'))){                                              // because if the next for loop returns false nothing will be inserted and will cause error
   if((!empty($receivedv[$i]) && !empty($yield_weightv[$i]) && !empty($datev[$i]) )&&($datev[$i] <= date('Y-m-d'))){     //The only thing that can go to the 2nd loop are the one that passes the validation
      
      
      
        for ($i = 0; $i < count($this->input->post('itemId')); $i++){
           if((!empty($receivedv[$i]) && !empty($yield_weightv[$i])  && !empty($datev[$i]) )&&($datev[$i] <= date('Y-m-d'))){   
              
                                   //Data used for mapping 
              $data3[$i] = array(
                                    "drNo"=>$DRNO,
                                    "itemId"=>$itemIdv[$i],
                                    "item" => $itemNamev[$i],
                                    "itemType" => $itemTypev[$i],
                                    "supp_po_ordered_id" => $itemIdv[$i],
                                    "yield_weight" => $yield_weightv[$i],
                                    'received' => $receivedv[$i],
                                    "date_received" => $datev[$i],
                                    "received_by" =>$receivedByv[$i],
                                    "supp_po_id"    => $temp,
            );
            
              
              
                               //Data to be inserted in the Delivery table
                             $data[$i] = array(
                                    'drNo'=>$DRNO,
                                    'supp_po_ordered_id' => $itemIdv[$i],
                                    'yield_weight' => $yield_weightv[$i],
                                    'yields' => $yieldsv[$i],
                                    'received' => $receivedv[$i],
                                    'date_received' => $datev[$i],
                                    'received_by' =>$receivedByv[$i],
                                    'supp_po_id'    => $temp,
        
                                 );
                               
                             
                           
          
        }
    }
        $this->inventoryPOOrder_model->insertORDER($data);
      
        $this->inventoryPOOrder_model->updateStock($data3, $supp_po_id); 
              
        $this->inventoryPOOrder_model->updateSuppPoOrderReceived($data3, $supp_po_id);       
          
        $this->inventoryPOOrder_model->updateOrderStatus($data3, $supp_po_id); //updating the status first before refreshing.      
              
  }
      
}
      
	}
           redirect(base_url('inventoryPOOrder'));
 }
        
    
        
        
        
        
   //--------------------------------------------        FULL    
        
        
        
    
  public function insertFull($temp){
        $DRNO=$this->input->post('DRNO');   
        $itemIdv=$this->input->post('itemId');
        $itemNamev=$this->input->post('item');
        $itemTypev=$this->input->post('itemType');
        $yield_weightv=$this->input->post('yield_weight');
        $yieldsv = $this->input->post('yield');
        $datev=$this->input->post('date');
        $receivedByv=$this->input->post('receivedBy');
        $supp_po_id = $temp;
            
  
            
 if ($_POST)  {
            
 for ($x = 0; $x < count($this->input->post('itemId')); $x++){   
      if($datev[$x] <= date('Y-m-d')){
                      
        for ($i = 0; $i < count($this->input->post('itemId')); $i++){
       
                                     //Date used for mapping 
              $data3[$i] = array(
                                     "drNo"=>$DRNO,
                                    "itemId"=>$itemIdv[$i],
                                    "item" => $itemNamev[$i],
                                    "itemType" => $itemTypev[$i],
                                    "supp_po_ordered_id" => $itemIdv[$i],
                                    "yield_weight" => $yield_weightv[$i],
                                    "date_received" => $datev[$i],
                                    "received_by" =>$receivedByv[$i],
                                    "supp_po_id"    => $temp,
            );
            
                             $data2[$i] = array('supp_po_ordered_id' => $itemIdv[$i],  //To map what product in a particular PO
                                 );
              
            
                                          //Data to be inserted in the Delivery table
                             $data[$i] = array(
                                    'drNo'=>$DRNO,
                                    'supp_po_ordered_id' => $itemIdv[$i],
                                    'yield_weight' => $yield_weightv[$i],
                                    'yields' => $yieldsv[$i],
                                    'date_received' => $datev[$i],
                                    'received_by' =>$receivedByv[$i],
                                    'supp_po_id'    => $temp,
        
                                 );
                               
                             
                           
    }
        $this->inventoryPOOrder_model->insertORDER($data);
            
       
        $this->inventoryPOOrder_model->updateStockFull($data3, $supp_po_id); 
          
        $this->inventoryPOOrder_model->updateOrderStatusFull($data2, $supp_po_id); //updating the status first before refreshing.  
          
    }
 }
            
            
    }
            
            redirect(base_url('inventoryPOOrder'));
    }
        
        
        
}
?>