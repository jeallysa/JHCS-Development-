<?php 
  class inventoryPOOrder_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
  
//  function retrieveCustomer(){
//      $query = $this->db->query('SELECT * from Customer');
      
//      if($query->num_rows() > 0){
//          return $query-> result();
//      }else
//          return NULL;
//   }
  
  
  function retrieveOrder(){
      $query = $this->db->query('SELECT * FROM supp_po join supplier on supp_id = sup_id where (delivery_stat) = 0 and (payment_stat = 0)');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
  function retrieveUsers(){
   
    $query = $this->db->query('SELECT * FROM user');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }    
      
   function retrieveRawStock(){
    $query = $this->db->query('SELECT * FROM raw_coffee ');  
          if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  } 
      

      
      
      
      
      
      
      
      
function insertORDER($data){
         
      $this->db->insert_batch("supp_delivery" , $data);        //USED BY BOTH FULL AND PARTIAL
         
  }  
          
      
      
      
      
      
      
function updateStock($data3, $supp_po_id){
          
  
      $arrayTable = array("raw_coffee","sticker","packaging","machine");  
         $arrayNameOfItem = array("raw_coffee","sticker","package_type","brewer");  
           $arrayTypeOfItem = array("raw_type","sticker_type", "package_size" , "brewer_type");   
                $stockColumn= array("raw_stock","sticker_stock","package_stock","mach_stocks");
  
     
    $query  = $this->db->query('SELECT supp_id FROM supp_po where supp_po_id='.$supp_po_id);
              $res = $query->row();
               
   
     $i=0;
       
foreach($data3 as $key => $object){
      
    
$loc = 0;                                  //QUERY THE REMAINING STOCK EACH ITEM-TYPE
 for($i = 0 ; $i <= 3 ; $i++){      
   $query = $this->db->query("SELECT sum(".$stockColumn[$i].") as sumx FROM ".$arrayTable[$i]. " where ". $arrayNameOfItem[$i]." LIKE '%".$object['item']."%' and ". $arrayTypeOfItem[$i]." LIKE '%".$object['itemType']."%' and sup_id = ".$res->supp_id);     
      
     if($query->num_rows() > 0){
         $whatStock = $i; //using the I to know which Table
         $whatTable = $i; //using the I to know which Table
        
         $stockCount = $query-> row(); 
         $newStock[$loc] = $stockCount->sumx + $object['received'];
 
         $data = array($stockColumn[$whatStock] => $newStock[$loc] );  //passing the value of the new Stock
            
         $loc++; 
        }
     
     
     
     $where = array( $arrayNameOfItem[$i] =>$object['item'] , $arrayTypeOfItem[$i] =>$object['itemType'] , 'sup_id' => $res->supp_id ,''); // multiple where
     $this->db->where($where);  //used the where here
     $this->db->update($arrayTable[$i], $data);   
     
            }
                
         }
      
   
}
      
      
        
function updateSuppPoOrderReceived($data3, $supp_po_id){
    
          
foreach($data3 as $key => $object){ 
  
$loc = 0;
   $query = $this->db->query("SELECT received FROM supp_po_ordered where item = '".$object['item']."' and type = '".$object['itemType']."'and supp_po_id = ".$supp_po_id);     
      
     if($query->num_rows() > 0){
        
         $receiveCount = $query->row(); 
         
         $newReceiveCount[$loc] = $receiveCount->received + $object['received'];
 
         $data = array('received' => $newReceiveCount[$loc] );  //passing the value of the receive
            
         $loc++; 
        }
     
     
     
     $where = array( 'supp_po_ordered_id' =>$object['itemId'] );
     $this->db->where($where);  //used the where here
     $this->db->update('supp_po_ordered', $data);   
     
  
     
        }
                
    }
      
    
function updateOrderStatus($data3, $supp_po_id){
 

foreach($data3 as $key => $object){ 
 $loc = 0;
   $query = $this->db->query("SELECT * FROM supp_po_ordered where supp_po_ordered_id = '".$object['itemId']."' and supp_po_id = ".$supp_po_id." and qty = received");     
      
     if($query->num_rows() > 0){
          $toBeUpdated= $query->row(); 
         
          $updateThis[$loc] = $toBeUpdated->supp_po_ordered_id ;
 
        
          $data =array(
                'delivery_stat' => 1
                         );
         
         
         $where = array( 'supp_po_ordered_id' =>$updateThis[$loc] );
         $this->db->where($where);  //used the where here
         $this->db->update('supp_po_ordered', $data);  
         
       $loc++;   
        
        
    }
         
         
 }
     
     
    
//just for looking if there is still some orders on a certain PO left.  if none then set the PO delivery_status to 1   
//test if there is a remaining order on a PO - an item found end loop by setting it to 4 to terminate..  but if nothing found set the delivery stat of PO to 1 so it appears on Unpaid.
      
      $query = $this->db->query('SELECT * FROM supp_po_ordered  where supp_PO_id = '. $supp_po_id. ' and supp_po_ordered.delivery_stat = 0');
           if($query->num_rows() > 0){
               
               //Do nothing- it has still some orders left.
               
           }else{
               // no orders left-  update PO delivery to 1.
                            $data =array(
                                 'delivery_stat' => 1
                                        );
    
                           $this->db->where('supp_po_id', $supp_po_id);
                           $this->db->update('supp_po', $data);
          
        }
  }       
      
      
      
      
      
      
      
      
//---------------------------------FULL---------------------------------------------------------------------//
      
      
      
      
      
      
      
      function updateOrderStatusFull($data2, $supp_po_id){
        
    
     foreach($data2 as $object ){
            
            $data =array(
                'delivery_stat' => 1
                         );
             
                  $this->db->where('supp_po_ordered_id', $object['supp_po_ordered_id']);
                  $this->db->update('supp_po_ordered', $data); 
     }

    
    
    
//just for looking if there is still some orders on a certain PO left.  if none then set the PO delivery_status to 1   
//test if there is a remaining order on a PO - an item found end loop by setting it to 4 to terminate..  but if nothing found set the delivery stat of PO to 1 so it appears on Unpaid.
      
      $query = $this->db->query('SELECT * FROM supp_po_ordered  where supp_PO_id = '. $supp_po_id. ' and supp_po_ordered.delivery_stat = 0');
           if($query->num_rows() > 0){
               
               //Do nothing- it has still some orders left.
               
           }else{
               // no orders left-  update PO delivery to 1.
                            $data =array(
                                 'delivery_stat' => 1
                                        );
    
                           $this->db->where('supp_po_id', $supp_po_id);
                           $this->db->update('supp_po', $data);
          
        }
  } 
          

      
      
   function updateStockFull($data3, $supp_po_id){
          
  
      $arrayTable = array("raw_coffee","sticker","packaging","machine");  
       $arrayNameOfItem = array("raw_coffee","sticker","package_type","brewer");  
         $arrayTypeOfItem = array("raw_type","sticker_type", "package_size" , "brewer_type");   
                $stockColumn= array("raw_stock","sticker_stock","package_stock","mach_stocks");
  
     
    $query  = $this->db->query('SELECT supp_id FROM supp_po where supp_po_id='.$supp_po_id);
              $res = $query->row();
               
   
     $i=0;
       
  foreach($data3 as $key => $object){
      
    
      
$loc = 0;                                  //QUERY THE REMAINING STOCK PER OF EACH ITEM-TYPE
 for($i = 0 ; $i <= 3 ; $i++){      
   $query = $this->db->query("SELECT sum(".$stockColumn[$i].") as sumx FROM ".$arrayTable[$i]. " where ". $arrayNameOfItem[$i]." LIKE '%".$object['item']."%' and ". $arrayTypeOfItem[$i]." LIKE '%".$object['itemType']."%' and sup_id = ".$res->supp_id);     
      
     if($query->num_rows() > 0){
         $whatStock = $i; //using the I to know which Table
         $whatTable = $i; //using the I to know which Table
        
         $stockCount = $query-> row(); 
         $newStock[$loc] = $stockCount->sumx + $object['yield_weight'];
 
         $data = array($stockColumn[$whatStock] => $newStock[$loc] );  //passing the value of the new Stock
            
         $loc++; 
        }
     
     
     
     $where = array( $arrayNameOfItem[$i] =>$object['item'] , $arrayTypeOfItem[$i] =>$object['itemType'] , 'sup_id' => $res->supp_id ,''); // multiple where
     $this->db->where($where);  //used the where here
     $this->db->update($arrayTable[$i], $data);   
     
            }
                
         }
      
   
}
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
        
}
  
?>
