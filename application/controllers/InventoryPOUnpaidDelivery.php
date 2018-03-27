<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOUnpaidDelivery extends CI_Controller
	{
		function __construct(){
			parent::__construct();
            $this->load->model('inventoryPOUnpaidDelivery_model');
            
		}
		
		public function index(){ 
            $this->load->view('layout/header');
            
            
            $data['unpaid'] = $this->inventoryPOUnpaidDelivery_model->retrieveUnpaid();
            $data['total'] = $this->inventoryPOUnpaidDelivery_model->getTotalAmount();
            
            
			$this->load->view('inventoryPOUnpaidDelivery',$data);
		}
        
        
        
        
         public function insertPartialPayment($temp){
         $supp_po_id = $temp;
         $data = array(   "supp_po_id" => $temp,
                          "date"       => $this->input->post("date"),
                          "amount"     => $this->input->post("amount"),
                          "bank"       => $this->input->post("bank"),
                       );
             
        $data2 = array("amount"     => $this->input->post("amount"),
                       );
             
             
         $this->inventoryPOUnpaidDelivery_model->insertPayment($data);
         $this->inventoryPOUnpaidDelivery_model->updatePOPayment($data2 , $supp_po_id);
             
         redirect(base_url('inventoryPOUnpaidDelivery'));
     }     
        
        
        
        
        public function insertFullPayment($temp){
         $remaining = $this->inventoryPOUnpaidDelivery_model->getRemaining($temp); //get the remaining balance and used it as the amount to be inserted
         $supp_po_id = $temp;
         
         $data = array(   "supp_po_id" => $temp,
                          "date"       => $this->input->post("date"),
                          "amount"     => $remaining,
                          "bank"       => $this->input->post("bank"),
                       );
             
        $data2 = array("amount"     => $remaining,
                       );
             
             
         $this->inventoryPOUnpaidDelivery_model->insertPayment($data);
         $this->inventoryPOUnpaidDelivery_model->updatePOPayment($data2 , $supp_po_id);
             
         redirect(base_url('inventoryPOUnpaidDelivery'));
     }     
        
        
        
        
        
        
        
        
        /*
        public function insertFullPayment($temp){
         
         $data = array(   "supp_po_id" => $temp,
                          "date"       => $this->input->post("date"),
                          "amount"     => $this->input->post("amount"),
                          "bank"       => $this->input->post("bank"),
                       );
         
         $this->inventoryPOUnpaidDelivery_model->insertFull($data);
             
         redirect(base_url('inventoryPOUnpaidDelivery'));
     }    
       */ 
        
        
        

	}

?>