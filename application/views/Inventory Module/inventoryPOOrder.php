<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Orders</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
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
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryStocks.php">
                            <i class="material-icons">assessment</i>
                            <p>Inventory Stocks</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryInventoryReport.php">
                            <i class="material-icons">content_paste</i>
                            <p>Inventory Report</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>inventoryPOAdd.php">
                            <i class="material-icons">shopping cart</i>
                            <p>Purchase Order</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryOutRawCoffee.php">
                            <i class="material-icons">reply</i>
                            <p>Inventory Out</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryItemList.php">
                            <i class="material-icons">storage</i>
                            <p>Items</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryReturnsList.php">
                            <i class="material-icons">input</i>
                            <p>Returns</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventorySamplesList.php">
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
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <li>
                                    <p class="title">Hi, User 1</p>
                                </li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryUser.php">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryChangePassword.php">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryActivityLogs.php">Activity Logs</a>
                                    </li>
                                    <li>
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
            
            
        
        <!-----------------------------------------------------------------------  MODAL -------------------------------------->
      
        
        
            <div class="modal fade" id="full" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
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
                                                    <tr>
                                                        <td>coffee A</td>
                                                        <td>City Roast</td>
                                                        <td>200000</td>
                                                        <td>
                                                            <input type="text" class="form-control">
                                                        </td>
                                                        <td>00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Packaging C</td>
                                                        <td>500g</td>
                                                        <td>200</td>
                                                        <td>
                                                            <input type="text" class="form-control">
                                                        </td>
                                                        <td>00.00</td>
                                                    </tr>
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
        
         <!----------------------------------------------------------END     OF     MODAL -------------------------------------->
        
        
        
        
        
         <!-----------------------------------------------------------------------  MODAL DETAILS 1 -------------------------------------->
            <div class="modal fade" id="details1" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><b>Supplier 1</b>
                                            <br>
                                            <b>2/05/18</b></center>
                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    <th>Ordered Date</th>
                                                    <th>Credit Terms</th>
                                                    <th>Item Name</th>
                                                    <th>Type</th>
                                                    <th>Quantity/ Weight(g)</th>
                                                    <th>Unit Price</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>February 05, 2018</td>
                                                    <td>30 Days</td>
                                                    <td>Raw coffee A</td>
                                                    <td>City Roast</td>
                                                    <td>20000</td>
                                                    <td>39.90</td>
                                                    <td>877800</td>
                                                </tr>
                                                <tr>
                                                    <td>February 05, 2018</td>
                                                    <td>30 Days</td>
                                                    <td>Packaging C</td>
                                                    <td>Medium Roast</td>
                                                    <td>200</td>
                                                    <td>160.00</td>
                                                    <td>32000</td>
                                                </tr>
                                                
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
        <!----------------------------------------------------------END     OF     MODAL -------------------------------------->

        <!-----------------------------------------------------------------------  MODAL -------------------------------------->
      
        
        
            <div class="modal fade" id="partial" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
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
                                                    <tr>
                                                        <td>coffee A</td>
                                                        <td>City Roast</td>
                                                        <td>200000</td>
                                                        <td>
                                                            <input type="text" class="form-control">
                                                        </td>
                                                        <td>00.00</td>
                                                        <td>
                                                            <input type="date" class="form-control">
                                                        </td>
                                                        <td><select class="form-control" name="supplier">
                                                                <option>Ms. A</option>
                                                                <option>Mr. B</option>
                                                                <option>Mr. C</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Packaging C</td>
                                                        <td>500g</td>
                                                        <td>200</td>
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
                                                    </tr>
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
        
         <!----------------------------------------------------------END     OF     MODAL -------------------------------------->
        
        
        
        
        
         <!-----------------------------------------------------------------------  MODAL DETAILS 1 -------------------------------------->
            <div class="modal fade" id="details1" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><b>Supplier 1</b>
                                            <br>
                                            <b>2/05/18</b></center>
                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    <th>Ordered Date</th>
                                                    <th>Credit Terms</th>
                                                    <th>Item Name</th>
                                                    <th>Type</th>
                                                    <th>Quantity/ Weight(g)</th>
                                                    <th>Unit Price</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>February 05, 2018</td>
                                                    <td>30 Days</td>
                                                    <td>Raw coffee A</td>
                                                    <td>City Roast</td>
                                                    <td>20000</td>
                                                    <td>39.90</td>
                                                    <td>877800</td>
                                                </tr>
                                                <tr>
                                                    <td>February 05, 2018</td>
                                                    <td>30 Days</td>
                                                    <td>Packaging C</td>
                                                    <td>Medium Roast</td>
                                                    <td>200</td>
                                                    <td>160.00</td>
                                                    <td>32000</td>
                                                </tr>
                                                
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
                                                    <a href="<?php echo base_url(); ?>inventoryPOAdd.php">
                                                        Add Purchase Order
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>inventoryPOOrder.php">
                                                        Orders
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryPOUnpaidDelivery.php">
                                                        Unpaid Delivery
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                   <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryPOTransactionHistory.php">
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
                                            <tr>
                                                <td>7</td>
                                                <td>02/05/18</td>
                                                <td>Supplier 1</td>
                                                <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#details1">Details</a></td>
                                                <td><a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#partial">Partial</a><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#full">Full</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>02/06/18</td>
                                                <td>Supplier 2</td>
                                                <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#details1">Details</a></td>
                                                <td><a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#partial">Partial</a><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#full">Full</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>02/07/18</td>
                                                <td>Supplier 2</td>
                                            
                                                <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#details1">Details</a></td>
                                                <td><a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#partial">Partial</a><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#full">Full</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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