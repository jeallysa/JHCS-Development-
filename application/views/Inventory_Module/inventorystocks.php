<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Inventory Stocks</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="<?php echo base_url(); ?>assets/img/sidebar-0.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryDashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>inventoryStocks">
                            <i class="material-icons">assessment</i>
                            <p>Inventory Stocks</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryInventoryReport">
                            <i class="material-icons">content_paste</i>
                            <p>Inventory Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryPOAdd">
                            <i class="material-icons">shopping cart</i>
                            <p>Purchase Order</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryOutRawCoffee">
                            <i class="material-icons">reply</i>
                            <p>Inventory Out</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryItemList">
                            <i class="material-icons">storage</i>
                            <p>Items</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryReturnsList">
                            <i class="material-icons">input</i>
                            <p>Returns</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventorySamplesList">
                            <i class="material-icons">dvr</i>
                            <p>Samples</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <li>
                                    <?php $username = $this->session->userdata('username') ?>
                                
                                <?php
                                              $retrieveUserDetails ="SELECT * FROM jhcs.user WHERE username = '$username';" ;
                                              $query = $this->db->query($retrieveUserDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<p class="title">Hi, '  . $object->u_fname  . ' ' . $object->u_lname  . '</p>' ;
                                              }
                                            }
                                        ?>
                                </li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryUser">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryActivityLogs">Activity Logs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('Login/logout');  ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#rawcoffee" data-toggle="tab">
                                                        <i class="material-icons">local_cafe</i>Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryBlends">
                                                        <i class="material-icons">opacity</i>Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryPackaging">
                                                        <i class="material-icons">local_mall</i>Packaging
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryStickers">
                                                        <i class="material-icons">wallpaper</i>Stickers
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryMachines">
                                                        <i class="material-icons">local_laundry_service</i>Machines
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="rawcoffee">
                                            <br>
                                            <br>
                                             <table id="" class="table hover order-column" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><b class="pull-left">Raw Coffee No.</b></th>
                                                    <th><b class="pull-left">Name</b></th>
                                                    <th><b class="pull-left">Reorder Level (grams)</b></th>
                                                    <th><b class="pull-left">Stock Limit (grams)</b></th>
                                                    <th><b class="pull-left">Supplier</b></th>
                                                    <th><b class="pull-left">Number of Stocks (grams)</b></th>
                                                    <th><b class="pull-left">Physical Count (grams)</b></th>
                                                    <th><b class="pull-left">Cue Card</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    if($fetch_data->num_rows() > 0){
                                                        foreach ($fetch_data -> result() as $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row->raw_id; ?></td>
                                                    <td><?php echo $row->raw_coffee; ?></td>
                                                    <td><?php echo $row->raw_reorder; ?></td>
                                                    <td><?php echo $row->raw_limit; ?></td>
                                                    <td><?php echo $row->sup_company; ?></td>
                                                    <td><b><?php echo $row->raw_stock; ?></b></td>
                                                    <td><b><?php echo $row->raw_physcount; ?></b></td>
                                                    <td><a class="btn btn-info" data-toggle="modal" data-target="#<?php echo $row->raw_coffee; ?>" data-original-title style="float: right">View</a>

                                                        <!-- Modal -->
                                                <div class="modal fade" id="<?php echo $row->raw_coffee; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span>Cue Card Details</h4>
                                                        </div>
                                                      <div class="modal-body" style="padding: 5px;">
                                                          <label>Set Date from </label>
                                                            <input type="date" name="">
                                                            <label> to </label>
                                                            <input type="date" name="">
                                                          <button style="float: right;" onclick="printDiv('toBePrinted<?php echo $row->raw_coffee; ?>')"><i class="material-icons">print</i></button>
                                                        <div id="toBePrinted<?php echo $row->raw_coffee; ?>">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                                                <h3><b><?php echo $row->raw_coffee; ?></b></h3>
                                                                <hr>
                                                            </div>
                                                        <table id="fresh-datatables" class="table table-striped table-hover responsive" cellspacing="0" width="100%">
                                                        <thead>
                                                          <tr>
                                                            <th><b>Client/Supplier</b></th>
                                                            <th><b>Date</b></th>
                                                            <th><b>Weight(grams)</b></th>
                                                            <th><b>Remarks</b></th>
                                                            <th><b>Type</b></th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                              $retrieveDetails3 ="SELECT * FROM jhcs.company_returns NATURAL JOIN supplier WHERE sup_returnItem = '$row->raw_id';" ;
                                              $query = $this->db->query($retrieveDetails3);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->sup_company  . '</td>' ,
                                                '<td>'  . $object->sup_returnDate  . '</td>' ,
                                                '<td>'  . $object->sup_returnQty  . '</td>' ;
                                                ?>
                                                    <td>Company Return</td>
                                                    <td>Out</td>
                                                 <?php   
                                                '</tr>' ;
                                              }
                                            }
                                        ?>
                                                            
                                                            <?php
                                              $retrieveDetails4 ="SELECT item, qty, date_received, yield_weight, sup_company FROM jhcs.supp_po_ordered INNER JOIN supp_delivery ON supp_po_ordered.supp_po_ordered_id = supp_delivery.supp_po_ordered_id INNER JOIN supp_po ON supp_po.supp_po_id = supp_po_ordered.supp_po_id INNER JOIN supplier ON supplier.sup_id = supp_po.supp_id WHERE item = '$row->raw_coffee';" ;
                                              $query = $this->db->query($retrieveDetails4);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->sup_company  . '</td>' ,
                                                '<td>'  . $object->date_received  . '</td>' ,
                                                '<td>'  . $object->yield_weight  . '</td>' ;
                                                ?>
                                                    <td>Company Delivery</td>
                                                    <td>IN</td>
                                                 <?php   
                                                '</tr>' ;
                                              }
                                            }
                                        ?> 
                                                        </tbody>
                                                      </table><hr>
                                                          <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-offset-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control">Total In :</label>
                                                                    <div class="col-md-4">
                                                                    <?php
                                              $retrieveDetails5 ="SELECT SUM(qty) AS totalQty FROM (SELECT item, qty, date_received, yield_weight, sup_company FROM jhcs.supp_po_ordered INNER JOIN supp_delivery ON supp_po_ordered.supp_po_ordered_id = supp_delivery.supp_po_ordered_id INNER JOIN supp_po ON supp_po.supp_po_id = supp_po_ordered.supp_po_id INNER JOIN supplier ON supplier.sup_id = supp_po.supp_id WHERE item = '$row->raw_coffee') AS coffetrans;" ;
                                              $query = $this->db->query($retrieveDetails5);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<p>'  . $object->totalQty  . ' gram/s</p>' ;
                                           }
                                            }
                                                ?>
                                                
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control">Total Out :</label>
                                                                    <div class="col-md-7">
                                                                        <?php
                                              $retrieveDetails6 ="SELECT SUM(sup_returnQty) AS totalQty FROM (SELECT * FROM jhcs.company_returns NATURAL JOIN supplier WHERE sup_returnItem = '$row->raw_id') AS coffeeout;" ;
                                              $query = $this->db->query($retrieveDetails6);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<p>'  . $object->totalQty  . ' gram/s</p>' ;
                                           }
                                            }
                                                ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Physical Count :</label>
                                                                        <div class="col-md-4">
                                                                            <input id="" name="count" type="number" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Discrepancy :</label>
                                                                        <div class="col-md-4">
                                                                            <input placeholder="0 grams" class="form-control" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Remarks :</label>
                                                                        <div class="col-md-10">
                                                                            <textarea style="resize:vertical;" class="form-control" rows="2" name="remarks"></textarea>
                                                                            <button style="float: right;" type="submit" class="btn btn-success">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button style="float: right;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                                </tr>
                                                <?php
                                                                }

                                                            }
                                                        else{
                                                         ?>
                                                        <tr>
                                                            <td colspan = 9 style = "text-align: center;"> <h3>No data found</h3> </td>
                                                        </tr>
                                                        <?php
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
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
<!--   Core JS Files   -->
<!--
    <script src="../assets/js/jquery-1.12.4.js" type="text/javascript"></script>
-->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.datatables.js"></script>
<script>
$(document).ready(function() {
    $('table.table').DataTable({
        select: {
            style: 'single'
        }

    });
});
</script>
<script>
    function printDiv(divName){
        var printme = document.getElementById(divName); 
    
        var wme = window.open("","","width= 900","height=700");
    
        var cancel = document.getElementsByClassName("btn");
        for(var i=0; i < cancel.length; i++){  
            cancel[i].style.visibility = 'hidden';
        }
        wme.document.write(printme.outerHTML);
        wme.document.close();
        wme.focus();
        wme.print();
        wme.close();
    
      
        for(var i=0; i < cancel.length; i++){  
            cancel[i].style.visibility = 'visible';
        }
    
    }
</script> 
 
</html>