<?php
           $full = 1;
                                            
                                                
                                                     
                                                      
                                                 
           if(!empty($order)) {                                                                           
           foreach($order as $object){
           $temp =  $object->supp_po_id;
           

?>


            <div class="modal fade" id="<?php echo "full" . $full   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        
                        
                        <form action="InventoryPOOrder/insertFull/<?php echo $temp ?>" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><b>Record Full Delivery</b>
                                            <br>
                                            <b> <?php echo date('m-d-Y') ?></b></center>
                                        
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label>Date Received:</label>
                                                         <input type="date" class="form-control" name="date[]" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label>Received By: </label>
                                                        <select class="form-control" name="receivedBy[]" required>
                                                            
                                                            
                                      <?php
                                                if(!empty($user)){ 
                                                   
                                                         foreach($user as $object){ 
                                                           echo '<option>'  .$object->u_fname ." ".  $object->u_lname.  '</option>' ;
                                                           }
                                                             
                                                }
                                            ?>
                                                            
                                                            
                                                            
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped" id="table-mutasi">
                                                <thead>
                                                    <tr>
                                                        <th>Item Name</th>
                                                        <th>Type</th>
                                                        <th>Original Weight(g)</th>
                                                        <th>Yield Weight(g)</th>
                                                        <th>Yield(g)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    
              
              <?php
                $i = 1;
                 $arrayItem = array("raw_coffee","sticker","packaging","machine");
                 $arrayOn = array("raw_coffee","sticker","package_name","brewer_type");
                   for($table = 0 ; $table < 4 ; $table++){
                          
                             $retrieveDetails ="SELECT * FROM ".$arrayItem[$table]." join supp_po_ordered  on ".$arrayOn[$table] ." = item join supp_po using (supp_po_id) where supp_PO_id = $temp" ;  
                       
                                              $query = $this->db->query($retrieveDetails);
                       
                                              if ($query->num_rows() > 0) {
                                                  
                                              foreach ($query->result() as $object) {
                                              
                                              $tempItemId = $object->supp_po_ordered_id;
                                             
                                        
                                                  
                                                  
                                                 
                                           echo        
                                                '<tr>' ;
                                             ?>
                                                
                                                <td>
                                                      <input type="text" class="form-control" name="item[]" value="<?php echo $object->item ?>" readonly> 
                                                </td> 
                                                    
                                             <?php       
                                                echo '<td>'  . $object->type  . '</td>' ;
                                        
                                                ?>      
                                                    
                                                <td>
                                            <input type="number" class="form-control" name="qty[]" id ="<?php echo "qty".$i?>" value="<?php echo $object->qty ?>" readonly> <!-- name of id=qty-->
                                                  </td>
                                                    
                                                  <td>
                                            <input type="number" class="form-control" name="yield_weight[]" id="<?php echo "yield_weight".$i?>" required>
                                                  </td>  
                                                    
                                                 <td>
                                             <input type="number" class="form-control" name="yield[]" id="<?php echo "yield".$i?>" readonly></td>  
                                                    
                                                    
                                  
                                            <input type="hidden" class="form-control" name="itemId[]"  value = "<?php echo $tempItemId ?>" >  
                                                 <?php   
                                                    
                                                  
                                                '</tr>' ;
                                                   $i++;
                                              }
                                            }
                   }
                                        ?>                      
                                                    
                                                
                                                </tbody>
                                            </table>
                                      
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                 <button type="submit" class="btn btn-success accept">Save</button>
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">CLOSE</button>
                        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php                       
                   $full++;
                               
           }                          
        }      
 ?>





<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->





   <?php
      $partial = 1;
        if(!empty($order)) {                                
           foreach($order as $object){
            $temp =  $object->supp_po_id;
           

?>
        
            <div class="modal fade" id="<?php echo "partial" . $partial   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        
                 
                        <form method = "post"  action ="InventoryPOOrder/insertPartial/<?php echo $temp ?>" >  
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><b>Partial Delivery</b>
                                            <br>
                                            <b><?php echo date('m-d-Y') ?></b></center>
                                        
                                            <table class="table table-striped" id="table-mutasi">
                                                <thead>
                                                    <tr>
                                                        <th>Item Name</th>
                                                        <th>Type</th>
                                                        <th>Original Weight(g)</th>
                                                        <th>Yield Weight(g)</th>
                                                        <th>Yield(g)</th>
                                                        <th>Date Received</th>
                                                        <th>Received By</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  
                                          
              <?php
               

             $i = 1;  
                 $arrayItem = array("raw_coffee","sticker","packaging","machine");
                 $arrayOn = array("raw_coffee","sticker","package_name","brewer_type");
                 for($table = 0 ; $table < 4 ; $table++){
                          
                     $retrievePartial ="SELECT * FROM ".$arrayItem[$table]." join supp_po_ordered  on ".$arrayOn[$table] ." = item join supp_po using (supp_po_id) where supp_PO_id = ".$temp ." and supp_po_ordered.delivery_stat = 0";                   
                                                    
                         
                                              $query = $this->db->query($retrievePartial);
                       
                                              if ($query->num_rows() > 0) {
                                                               
                                                  
                                                  //used for the id counter in qty,yield_weild,yield
                                              foreach ($query->result() as $object) {
                                              $tempItemId = $object->supp_po_ordered_id;
                                              
                                           
                                                  
                                               
                                                echo        
                                                '<tr>' ;
                                             ?>
                                               
                                                    
                                                <td>
                                                      <input type="text" class="form-control" name="item[]" value="<?php echo $object->item ?>" readonly> 
                                                </td> 
                                                    
                                             <?php 
                                                 
                                               echo '<td>'  . $object->type  . '</td>' ;
                                        
                                                ?>      
                                                   <td>
                                                      <input type="number" class="form-control" name="qty[]" id ="<?php echo "qtyp".$i?>" value="<?php echo $object->qty ?>" readonly> <!-- name of id=qty-->
                                                  </td>        
                                                  <td>
                                                      <input  type="number" class="form-control" maxlength="4" name="yield_weight[]" id ="<?php echo "yield_weight".$i?>"> <!-- name of id=yield_weight-->
                                                  </td>   
                                                  <td><input type="number" class="form-control"  name="yield[]" id ="<?php echo "yield".$i?>" readonly></td>  <!-- name of id=yield-->
                                                    
                                                  <td>
                                                            <input type="date" class="form-control" name="date[]"  >
                                                 </td>
                                                 <td>
                                                            <select            class="form-control" name="receivedBy[]" >
                                                                
                                                                
                                          <?php
                                                if(!empty($user)){ 
                                                   
                                                         foreach($user as $object){ 
                                                           echo '<option>'  .$object->u_fname ." ".  $object->u_lname.  '</option>' ;
                                                           }
                                                             
                                                }
                                            ?> 
                                                              
                                                                
                                                                
                                                                            
                                                        
                                                                
                                                                
                                                                
                                                                
                                                            </select>
                                                     
                                                     
                                                   </td> 
                                                      
                             
                                                 <input type="hidden" class="form-control" name="itemId[]"  value = "<?php echo $tempItemId ?>" > 
                                                    
                                                 <?php  
                                                '</tr>';  
                                                              $i++;
                                        
                                                 
                                              }
                                            }
                   }
                                        ?>   
                                     
                                                </tbody>
                                            </table>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                <button type="submit" name = "submit"  value ="Insert" class="btn btn-success accept">Save</button>
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">CLOSE</button>
                              
                            </div>
                        </form>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
  <?php                       
                   $partial++;
              }
           }      
 ?>      
         <!----------------------------------------------------------END     OF     MODAL -------------------------------------->
        
        
     


<?php
           $details = 1; //used to map the Modal.  //put here because if not. the if returns false the i becomes 1 again 
      if(!empty($order)) {                                     
           foreach($order as $object){
            $temp =  $object->supp_po_id; //dynamic query WHERE.
           
?>
                                             
         <!-----------------------------------------------------------------------  MODAL DETAILS -------------------------------------->
            <div class="modal fade" id="<?php echo "details" . $details   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                   
                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    
                                                   
                                                    <th>Item Name</th>
                                                    <th>Type</th>
                                                    <th>Quantity/ Weight(g)</th>
                                                    <th>Unit Price</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                
                                                
          <?php
                 
            $arrayItem = array("raw_coffee","sticker","packaging","machine");
             $arrayOn = array("raw_coffee","sticker","package_name","brewer_type");
                   for($table = 0 ; $table < 4 ; $table++){
                          
                     $retrieveDetails ="SELECT * FROM ".$arrayItem[$table]." join supp_po_ordered  on ".$arrayOn[$table] ." = item join supp_po using (supp_po_id) where supp_PO_id = $temp" ; 
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                               
                                                '<td>'  . $object->item   . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->qty  . '</td>' ,
                                                '<td>'  . $object->unitPrice  . '</td>' ,
                                                '<td>'  . $object->amount  . '</td>' ,
                                                '</tr>' ;
                                              }
                                            }
                                           }
                                        ?>    
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">CLOSE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<?php                       
                   $details++;
                               
              }
           }      
 ?>
        <!----------------------------------------------------------END     OF     MODAL -------------------------------------->




        
        
         
        
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                 
                                                 <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOAdd">
                                                    Add Purchase Order
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="active">
                                                <a href="<?php echo base_url(); ?>inventoryPOOrder">
                                                    Orders
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOUnpaidDelivery">
                                                    Unpaid Delivery
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                               <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOTransactionHistory">
                                                    Transaction History
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                                
                                                
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="card-content ">
                                    <br>
                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">PO #</b></th>
                                            <th><b class="pull-left">PO Credit Term</b></th>
                                            <th><b class="pull-left">Date Ordered</b></th>
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b class="pull-left">See Details</b></th>
                                            <th><b class="pull-left">Types of Delivery</b></th>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                  <?php
                              if(!empty($order)) {                  
                                      $mapModal = 1;
                                      $details = 'details';
                                      $partial = 'partial';
                                      $full    = 'full';       
                                          foreach($order as $object){ 
                                             
                                            
                                           echo '<tr>' ,
                                                
                                                '<td>'  . $object->supp_po_id . '</td>' ,
                                                '<td>'  . $object->supp_creditTerm. '</td>' ,
                                                '<td>'  . $object->suppPO_date   . '</td>' ,
                                                '<td>'  . $object->sup_company  . '</td>' ;
                                        		                      
                                        ?>
                                                                              
                                               <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $details . $mapModal  ?>">Details</a></td>
                                               <td><a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#<?php echo $partial . $mapModal  ?>">Partial</a><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $full . $mapModal   ?>">Full</a> </td>
                                            
                                            
                                            
                <?php                          '</tr>' ; 
                           $mapModal++;
                                         }  
                              }
               ?>
                                            
                                            
                                            
                                            
                                            
                                            
                                        
                                        </tbody>
                                    </table>
                                </div>
                                
                                
                           
                                
                                
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
              </div>
          </div>
     </div>   
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>


<script type="text/javascript">
    
$(document).ready(function() {
    var table = $('#example').DataTable({
        select: {
            style: 'single'
        }
    });

});
 
    
        
                                                  
      <?php
           
           $c = 1; 
          
    foreach($order as $object){
       $temp =  $object->supp_po_id;
          
         
        
        
         $i = 1; //after every PO it returns to 1
         $arrayItem = array("raw_coffee","sticker","packaging","machine");
         $arrayOn   = array("raw_coffee","sticker","package_name","brewer_type");
        
        
        
                for($table = 0 ; $table < 4 ; $table++){
                        $retrieveDetails ="SELECT * FROM ".$arrayItem[$table]." join supp_po_ordered  on ".$arrayOn[$table] ." = item join supp_po using (supp_po_id) where supp_PO_id = $temp" ; 
                                    
                        $query = $this->db->query($retrieveDetails);
                                       
                    
                       if ($query->num_rows() > 0){
                              foreach ($query->result() as $object){
               ?>                               
                                                  
    
  $(document).ready(function(){                
           $(<?php echo "'#partial".$c." input[id=yield_weight".$i."]'"?>).keyup(function(){
            var y = parseFloat($(this).val());
			var x = parseFloat($(<?php echo "'#partial".$c." input[id=qtyp".$i."]'"?>).val());
			var res = x - y ;
			$(<?php echo "'#partial".$c." input[id=yield".$i."]'"?>).val(res);
});      
});     
    
    
      $(document).ready(function(){                               
            $(<?php echo "'#full".$c." input[id=yield_weight".$i."]'"?>).keyup(function(){
            var y = parseFloat($(this).val());
			var x = parseFloat($(<?php echo "'#full".$c." input[id=qty".$i."]'"?>).val());
			var res = x - y ;
			$(<?php echo "'#full".$c." input[id=yield".$i."]'"?>).val(res);
});      
});   
    
    
    
<?php                                                  
                                                  
                            $i++;
                      }
                       
                 }
                       
            }
       $c++;
     }
               
?>
    
    

    
    
    

    
</script>
</html>