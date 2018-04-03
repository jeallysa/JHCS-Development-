<?php 
  class inventoryPOUnpaidDelivery_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
  

  
  function retrieveUnpaid(){
      $query = $this->db->query('SELECT * FROM  supp_po join supplier on supp_id = sup_id   where delivery_stat = 1 and payment_stat = 0');
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
      
   function ajaxTotal($poId){
      $query = $this->db->query('SELECT * from supp_po where supp_po_id ='.$poId);
      if($query->num_rows() > 0){
          return $query-> row();
      }else
          return NULL;
  }
      
      
      
      
      
    function getTotalAmount(){
      $query = $this->db->query('SELECT total_amount FROM jhcs.supp_po');
      if($query->num_rows() > 0){
          return $query->result();
      }else
          return NULL;
  }  
     
      
   function getRemaining($supp_po_id){
      $query = $this->db->query("SELECT * FROM jhcs.supp_po where supp_po_id =".$supp_po_id);
      if($query->num_rows() > 0){
          $result = $query->row();
           
          $total =      $result->total_amount;
          $oldPayment = $result->payment;
          
          $remaining = $total - $oldPayment;
         
          return $remaining;
      }else
          return NULL;
  }  
      
    function getTotal($supp_po_id){
      $query = $this->db->query("SELECT * FROM jhcs.supp_po where supp_po_id =".$supp_po_id);
      if($query->num_rows() > 0){
          $result = $query->row();
           
          $total =      $result->total_amount;
        
          return $total;
      }else
          return NULL;
  }    
      
      
//Insert HERE  ----------------------------------    

    function insertPayment($data){
      $this->db->insert("supp_payment" , $data);
  
    }
      
    function updatePOPayment($data , $supp_po_id ){
      $query = $this->db->query("SELECT * FROM jhcs.supp_po where supp_po_id =".$supp_po_id);
        if($query->num_rows() > 0){
           $result = $query->row();
           
           $oldPayment = $result->payment;
           $newPayment =  $oldPayment + $data['amount']; 
            
            
         $dataUpdate = array('payment' => $newPayment,
                     );     
               
         $this->db->where('supp_po_id', $supp_po_id); 
         $this->db->update('supp_po',  $dataUpdate);  
            
         //after updating check if it is already equal to the total   
            $queryCheckIfPaid = $this->db->query("SELECT * FROM jhcs.supp_po where supp_po_id =".$supp_po_id);
                if($queryCheckIfPaid->num_rows() > 0){
                    $result = $queryCheckIfPaid->row();
                    
                    $total = $result->total_amount;
                    $payment =$result->payment;
                    
                    if($payment >= $total ){
                         $dataUpdate = array('payment_stat' => 1,
                                            );     
               
                          $this->db->where('supp_po_id', $supp_po_id); 
                          $this->db->update('supp_po',  $dataUpdate);  
                        
                    }
                }
            
               
      }else
          return NULL;
        
        
        
        
      }  
  
   
    
      
      
      
      
    }

?>
