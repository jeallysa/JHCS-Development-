
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs" >
                                <!--------------------------- MODAL Full Payment ------------------------------->
                                
                                
                                
<?php
           $x = 1;
                                        
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;

?>
                                
                                <div class="modal fade" id="<?php echo "full" . $x   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><center>Balance</center> </h4>
                                            </div>

                                            <form action="#" method="post" accept-charset="utf-8">
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
                                              $retrieveDetails ="SELECT * FROM test_supp_delivery left join test_supp_po_ordered using(test_supp_po_ordered_id) left join test_items on item= item_name  where test_supp_po_ordered.supp_po_id = $temp" ;
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->item_name   . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->yield_weight. '</td>' ,
                                                '<td>'  . $object->amount  . '</td>' ,
                                                '</tr>' ;
                                              }
                                            }
                                        ?>  
                                                    </tbody>
                                                </table>
                                                <div class="container"  >
                                                    <div class="row justify-content-end"  >
                                                        <div class="col-md-6 form-group" >
                                                            <div class="form-group label-floating">
                                                                <label for="email">Total Balance:</label>
                                                                <input class="form-control" type="text" value="  P34,000.00   " id="example-number-input" disabled="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><center>
                                                <a class="btn btn-primary" data-toggle="collapse" href="#collapsePayment" aria-expanded="false" aria-controls="collapseExample" data-background-color="red">
                                                Add Payment
                                                </a></center>
                                                <div class="collapse" id="collapsePayment">
                                                    <div class="card-block">
                                                        <form action="#" method="post" accept-charset="utf-8">
                                                            <div class="modal-body" style="padding: 5px;">
                                                                <div class="form-group label-floating">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label for="email">Date of Payment:</label>
                                                                                  <input class="form-control" type="date" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Amount:</label>
                                                                                  <input class="form-control" type="number" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Bank:</label>
                                                                                  <input class="form-control" type="text" name="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-footer">
                                                                <input type="submit" class="btn btn-success" value="Add" />
                                                                <input type="reset" class="btn btn-danger" value="Clear" />
                                                                <button style="float: right;" type="button" class="btn btn-danger btn-close" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>           
                                    
                                    
    <?php                       
                   $x++;
                               
                                         }      
 ?>                                
                                    
                                
                               <!---- END MODAL PO BALANCE 1 ------> 
                                    
                                    
                                    
                                    
                                    
                                    
      <?php
           $c = 1;
                                        
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;

?>                                 
                                    
                               <!--------------------------- MODAL Partial Payment ------------------------------->
                                
                                <div class="modal fade" id="<?php echo "partial" . $c   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary modal-content">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><center>Balance</center> </h4>
                                            </div>

                                            <form action="#" method="post" accept-charset="utf-8">
                                            <div class="modal-body" style="padding: 0px;">
                                                <table class="table table-striped" id="table-mutasi">
                                                    <thead>
                                                        <tr>
                                                            <th>Item Name</th>
                                                            <th>Type</th>
                                                            <th>Yield Weight(g)</th>
                                                            <th>Amount</th>
                                                            <th>Payment</th>
                                                            <th>Payment Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                         
                                            <?php
                                              $retrieveDetails ="SELECT * FROM test_supp_delivery left join test_supp_po_ordered using(test_supp_po_ordered_id) left join test_items on item= item_name 
                                              where test_supp_po_ordered.supp_po_id = $temp" ;
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->item_name   . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->yield_weight. '</td>' ,
                                                '<td>'  . $object->amount  . '</td>' ;
                                            ?>                      
                                                <td><input class="form-control" type="number" name=""></td>
                                                <td><input class="form-control" type="date" name=""></td>
                                          <?php 
                                                   '</tr>' ;
                                              }
                                            }
                                            ?>
                                                            
                                                    </tbody>
                                                </table>
                                                <div class="container"  >
                                                    <div class="row justify-content-end"  >
                                                        <div class="col-md-6 form-group" >
                                                            <div class="form-group label-floating">
                                                                <label for="email">Total Balance:</label>
                                                                <input class="form-control" type="text" value="  P34,000.00   " id="example-number-input" disabled="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><center>
                                                <button type="submit" class="btn btn-success accept">Record Payment</button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>                  
                                
          <?php                       
                   $c++;
                               
                                         }      
 ?>                               
                                      
                                    
                               <!---- END MODAL PO BALANCE 1 ------> 
                                     
                                    
                                    
                           
                                    
                                    
                                    
                                    
                                   
    <?php
           $i = 1;
                                        
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;

?>
                                                      
                                    
                                <div class="modal fade" id="<?php echo "details" . $i   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
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
                                              $retrieveDetails ="SELECT * FROM test_supp_delivery left join test_supp_po_ordered using(test_supp_po_ordered_id) left join test_items  on item= item_name  
                                              where test_supp_po_ordered.supp_po_id = $temp" ;
               
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->item_name   . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->qty  . '</td>' ,
                                                '<td>'  . $object->yield_weight. '</td>' ,
                                                '<td>'  . $object->yields  . '</td>' ,
                                                '<td>'  . $object->unitPrice  . '</td>' ,
                                                '<td>'  . $object->amount  . '</td>' ,
                                                '</tr>' ;
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
                   $i++;
                               
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
                                            <th><b class="pull-left">Date Received</b></th>
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
                                          foreach($unpaid as $object){ 
                                             
                                            
                                           echo '<tr>' ,
                                                '<td>'  . $object->supp_po_id. '</td>' ,
                                                '<td>'  . $object->suppPO_date   . '</td>' ,
                                                '<td>'  . $object->date_received  . '</td>' ,
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