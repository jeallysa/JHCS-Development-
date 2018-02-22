
        
            
            
        
        <!-----------------------------------------------------------------------  Full -------------------------------------->
      
        
                                  
    <?php
           $x = 1;
                                        
           foreach($order as $object){
            $temp =  $object->supp_po_id;

?>  


            <div class="modal fade" id="<?php echo "full" . $x   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><b>Record Full Delivery</b>
                                            <br>
                                            <b>Current Date: 1/31/18</b></center>
                                         <form>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label>Date Received:</label>
                                                         <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <div class="form-group label-floating">
                                                        <label>Received By: </label>
                                                        <select class="form-control" name="supplier" required>
                                                            <option>Ms. A</option>
                                                            <option>Mr. B</option>
                                                            <option>Mr. C</option>
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
                                              $retrieveDetails ="SELECT * FROM test_items join test_supp_po_ordered  using(item_id) join test_supp_po using (supp_po_id) where supp_PO_id = $temp" ;
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->item_name. '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->qty  . '</td>' ;
                                                ?>
                                                    
                                                  <td>
                                                            <input type="text" class="form-control">
                                                  </td>   
                                                  <td>00.00</td>  
                                                 <?php   
                                                    
                                                  
                                                '</tr>' ;
                                              }
                                            }
                                        ?>                      
                                                    
                                                
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">CLOSE</button>
                                <button type="submit" class="btn btn-success accept">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php                       
                   $x++;
                               
                                         }      
 ?>
         <!----------------------------------------------------------END     OF     MODAL -------------------------------------->
        
  
        





                                  
    <?php
           $i = 1;
                                        
           foreach($order as $object){
            $temp =  $object->supp_po_id;

?>
                                             
         <!-----------------------------------------------------------------------  MODAL DETAILS -------------------------------------->
            <div class="modal fade" id="<?php echo "details" . $i   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                   
                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Credit Terms</th>
                                                    <th>Item Name</th>
                                                    <th>Type</th>
                                                    <th>Quantity/ Weight(g)</th>
                                                    <th>Unit Price</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                
                                                
                                            <?php
                                              $retrieveDetails ="SELECT * FROM test_items join test_supp_po_ordered  using(item_id) join test_supp_po using (supp_po_id) where supp_PO_id = $temp" ;
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->supp_creditTerm. '</td>' ,
                                                '<td>'  . $object->item_name   . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->qty  . '</td>' ,
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
        <!----------------------------------------------------------END     OF     MODAL -------------------------------------->

        <!-----------------------------------------------------------------------  MODAL -------------------------------------->
      
        


   <?php
           $c = 1;
                                        
           foreach($order as $object){
            $temp =  $object->supp_po_id;

?>
        
            <div class="modal fade" id="<?php echo "partial" . $c   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><b>Partial Delivery</b>
                                            <br>
                                            <b>Current Date: 1/31/18</b></center>
                                        <form>
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
                                              $retrieveDetails ="SELECT * FROM test_items join test_supp_po_ordered  using(item_id) join test_supp_po using (supp_po_id) where supp_PO_id = $temp" ;
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->item_name. '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . $object->qty  . '</td>' ;
                                                ?>
                                                    
                                                  <td>
                                                            <input type="text" class="form-control">
                                                  </td>   
                                                  <td>00.00</td>  
                                                  <td>
                                                            <input type="date" class="form-control">
                                                 </td>
                                                 <td>
                                                  <select class="form-control" name="supplier">
                                                                <option>Ms. A</option>
                                                                <option>Mr. B</option>
                                                                <option>Mr. C</option>
                                                            </select>
                                                        </td> 
                                                    
                                                    
                                                    
                                                 <?php   
                                                    
                                                  
                                                '</tr>' ;
                                              }
                                            }
                                        ?>   
                                     
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">CLOSE</button>
                                <button type="submit" class="btn btn-success accept">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
  <?php                       
                   $c++;
                               
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
                                                <a href="<?php echo base_url('ct_inventoryPOAdd'); ?>">
                                                    Add Purchase Order
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="active">
                                                <a href="<?php echo base_url('ct_inventoryPOOrder'); ?>">
                                                    Orders
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="">
                                                <a href="<?php echo base_url('ct_inventoryPOUnpaidDelivery'); ?>">
                                                    Unpaid Delivery
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                               <li class="">
                                                <a href="<?php echo base_url('ct_inventoryPOTransactionHistory'); ?>">
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
                                            <th><b class="pull-left">See Details</b></th>
                                            <th><b class="pull-left">Types of Delivery</b></th>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                  <?php
                                      $i = 1;
                                      $details = 'details';
                                      $partial = 'partial';
                                      $full    = 'full';       
                                          foreach($order as $object){ 
                                             
                                            
                                           echo '<tr>' ,
                                                '<td>'  . $object->supp_po_id . '</td>' ,
                                                '<td>'  . $object->suppPO_date   . '</td>' ,
                                                '<td>'  . $object->sup_company  . '</td>' ;
                                        		                      
                                        ?>
                                                                              
                                               <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $details . $i   ?>">Details</a></td>
                                               <td><a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#<?php echo $partial . $i   ?>">Partial</a><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $full . $i   ?>">Full</a> </td>
                                            
                                            
                                            
                <?php                          '</tr>' ; 
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