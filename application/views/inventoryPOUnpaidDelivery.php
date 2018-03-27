
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs" >
                                
                                
                                
                                
                                
                                
                                
                            
                                
 <?php
     $full = 1;
     if(!empty($unpaid)) {                                
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;
            $sup_id = $object->sup_id;
?>                                 
                                    
                               <!--------------------------- MODAL Full Payment ------------------------------->
                                
                                <div class="modal fade" id="<?php echo "full" . $full   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary modal-content">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><center>Balance</center> </h4>
                                            </div>

                                            <form action="InventoryPOUnpaidDelivery/insertFullPayment/<?php echo $temp ?>" method="post" accept-charset="utf-8">
                                            <div class="modal-body" style="padding: 0px;">
                                                <table class="table table-striped" id="table-mutasi">
                                                    <thead>
                                                        <tr>
                                                            <th>Item Name</th>
                                                            <th>Type</th>
                                                            <th>Yield Weight(g)</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                         
               <?php
                 //$i = 1;
                 $arrayItem = array("raw_coffee","sticker","packaging","machine");
                 $arrayOn = array("raw_coffee","sticker","package_name","brewer_type");
                   for($table = 0 ; $table < 4 ; $table++){
                          
                             $retrieveDetails ="SELECT * FROM supp_delivery  join supp_po_ordered using(supp_po_ordered_id)  join ".$arrayItem[$table]." on   item =  ".$arrayOn[$table] ." where supp_po_ordered.supp_po_id =".$temp." and sup_id =".$sup_id ;  
                            $query = $this->db->query($retrieveDetails);
                       
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                                  $tempItemId = $object->supp_po_ordered_id;
                                           echo '<tr>' ,
                                                '<td>'  . $object->item   . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->yield_weight. '</td>' ,
                                                '<td>'  . $object->amount  . '</td>' ,
                                                '</tr>' ;
                                                  
                                              }
                                            }
                                         } 
                                            ?>
                                                            
                                                    </tbody>
                                                </table>
                                                <div class="container"  >
                                                    <div class="row justify-content-end"  >
                                                        <div class="col-md-6 form-group" >
                                                            <div class="form-group label-floating">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group label-floating">
                                                                            <label>Total Balance:</label>
                                                           <input class="form-control" type="text" value="" id="" disabled="" />
                                                                             </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-4">
                                                                             <div class="form-group label-floating">
                                                                            <label>Remaining Balance</label>
                                                                             <input class="form-control" type="text" id="" disabled="" />
                                                                             </div>
                                                                        </div>    
                                                                   </div>      
                                                                 <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Date of Payment:</label>
                                                                                  <input class="form-control" type="date" name="date" required>
                                                                                </div>
                                                                            </div>
                                                                          
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Bank:</label>
                                                                                  <input class="form-control" type="text" name="bank" required>
                                                                                </div>
                                                                            </div>
                                                                 </div>
                                                                        <div class="row">
                                                                        </div>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><center>
                                                <button type="submit" class="btn btn-success accept">Record Payment</button></center>
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
                                    
                                
                               <!---- END MODAL PO BALANCE 1 ------> 
                                    
                                    
                                    
                                    
                                    
                                    
      <?php
     $partial = 1;
     if(!empty($unpaid)) {                                
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;
            $sup_id = $object->sup_id;
?>                                 
                                    
                               <!--------------------------- MODAL Partial Payment ------------------------------->
                                
                                <div class="modal fade" id="<?php echo "partial" . $partial   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary modal-content">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><center>Balance</center> </h4>
                                            </div>

                                            <form action="InventoryPOUnpaidDelivery/insertPartialPayment/<?php echo $temp ?>" method="post" accept-charset="utf-8">
                                            <div class="modal-body" style="padding: 0px;">
                                                <table class="table table-striped" id="table-mutasi">
                                                    <thead>
                                                        <tr>
                                                            <th>Item Name</th>
                                                            <th>Type</th>
                                                            <th>Yield Weight(g)</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                         
               <?php
                                               //$i = 1;
                 $arrayItem = array("raw_coffee","sticker","packaging","machine");
                 $arrayOn = array("raw_coffee","sticker","package_name","brewer_type");
                   for($table = 0 ; $table < 4 ; $table++){
                          
                             $retrieveDetails ="SELECT * FROM supp_delivery  join supp_po_ordered using(supp_po_ordered_id)  join ".$arrayItem[$table]." on   item =  ".$arrayOn[$table] ." where supp_po_ordered.supp_po_id =".$temp." and sup_id =".$sup_id ;  
                       
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                                  $tempItemId = $object->supp_po_ordered_id;
                                           echo '<tr>' ,
                                                '<td>'  . $object->item   . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->yield_weight. '</td>' ,
                                                '<td>'  . $object->amount  . '</td>' ,
                                                '</tr>' ;
                                                  
                                              }
                                            }
                                         } 
                                            ?>
                                                            
                                                    </tbody>
                                                </table>
                                                <div class="container"  >
                                                    <div class="row justify-content-end"  >
                                                        <div class="col-md-6 form-group" >
                                                            <div class="form-group label-floating">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group label-floating">
                                                                            <label>Total Balance:</label>
                                                                             <input class="form-control" type="number"  id="total" disabled="" />
                                                                             </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-4">
                                                                             <div class="form-group label-floating">
                                                                            <label>Remaining Balance</label>
                                                                             <input class="form-control" type="number"  id="remaining" disabled="" />
                                                                             </div>
                                                                        </div>    
                                                                   </div>      
                                                                 <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Date of Payment:</label>
                                                                                  <input class="form-control" type="date" name="date" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Amount:</label>
                                                                                  <input class="form-control" type="number" min="1" name="amount" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Bank:</label>
                                                                                  <input class="form-control" type="text" name="bank" required>
                                                                                </div> 
                                                                            </div>
                                                                 </div>
                                                                        <div class="row">
                                                                        </div>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><center>
                                                <button type="submit" class="btn btn-success accept">Record Payment</button></center>
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
                                      
                                    
                               <!---- END MODAL PO BALANCE 1 ------> 
                                     
                                    
                                    
                           
                                    
                                    
                                    
                                    
                                   
    <?php
           $details = 1;
           if(!empty($unpaid)) {                               
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;

?>
                                                      
                                    
                                <div class="modal fade" id="<?php echo "details" . $details   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="panel panel-primary modal-content">
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div id="page-wrapper">
                                                        <div class="table-responsive">
                                                            <h4><b class="pull-left">Supplier 1</b></h4>
                                                            <h4><b class="pull-right">(Credit Terms)</b></h4>
                                                            <table class="table table-striped" id="table-mutasi">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date Received</th>
                                                                        <th>Item Name</th>
                                                                        <th>Type</th>
                                                                        <th>Quantity/ Original Weight(g)</th>
                                                                        <th>Yield Weight(g)</th>
                                                                        <th>Yield(g)</th>
                                                                        <th>Unit Price</th>
                                                                        <th>Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
    
                                                                    
                                                                    
                                 
        <?php
                                                                
      //$i = 1;                                                             
            
                 $arrayItem = array("raw_coffee","sticker","packaging","machine");
                 $arrayOn = array("raw_coffee","sticker","package_name","brewer_type");
                   for($table = 0 ; $table < 4 ; $table++){
                          
                             $retrieveDetails ="SELECT * FROM supp_delivery  join supp_po_ordered using(supp_po_ordered_id)  join ".$arrayItem[$table]." on   item =  ".$arrayOn[$table] ." where supp_po_ordered.supp_po_id = $temp"  ;  
               
                                              $query = $this->db->query($retrieveDetails);
                                           if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                                  
                                                   // $tempItemId = $object->supp_po_ordered_id;    can use later
                                                  
                                           echo '<tr>' ,
                                                '<td>'  . $object->date_received   . '</td>' ,
                                                '<td>'  . $object->item  . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->qty  . '</td>' ,
                                                '<td>'  . $object->yield_weight. '</td>' ,
                                                '<td>'  . $object->yields  . '</td>' ,
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
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOOrder">
                                                    Orders
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="active">
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
                                            <th><b class="pull-left">Date Ordered</b></th>
                                            
                                            <th><b class="pull-left">Supplier</b></th>
                                       
                                       
                                            <th><b class="pull-left">Payment type</b></th>
                                            <th><b class="pull-left">See Details</b></th>
                                        </thead>
                                        <tbody>
                                            
                                            
                                <?php
                                            $i = 1;
                                            $details = 'details';
                                            $partial = 'partial';
                                            $full    = 'full'; 
                                    if(!empty($unpaid)) {  
                                          foreach($unpaid as $object){ 
                                             
                                            
                                           echo '<tr>' ,
                                                '<td>'  . $object->supp_po_id. '</td>' ,
                                                '<td>'  . $object->suppPO_date   . '</td>' ,
                                               
                                                '<td>'  . $object->sup_company  . '</td>';
												                      
                                             ?>
                                                                              
                                               <td><center>
                                                    <a class=" btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $full . $i   ?>">full</a>
                                                    <a class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#<?php echo $partial . $i   ?>">partial</a></center> </td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $details . $i   ?>">Details</a>
                                                </td>
                                            
                                    <?php                          
                                            '</tr>' ; 
                                                  $i++;
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
    
    
      
    
</script>


</html>