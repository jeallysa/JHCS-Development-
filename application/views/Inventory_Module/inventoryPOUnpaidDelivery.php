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
    <title>Unpaid Delivery</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >
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
                                        <a href="./user.php">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="./changepassword.php">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="./activitylogs.php">Activity Logs</a>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs" >
                                <!--------------------------- MODAL Full Payment ------------------------------->
                                
                                <div class="modal fade" id="pobalance1" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
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
                                                        <tr>
                                                            
                                                            <td>Raw coffee A</td>
                                                            <td>City Roast</td>
                                                            <td>20000</td>  
                                                            <td>180000</td>
                                                        </tr>
                                                        <tr>
                                                           
                                                            <td>Raw coffee A</td>
                                                            <td>City Roast</td>
                                                            <td>20000</td> 
                                                            <td>160000</td>
                                                        </tr>
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
                                
                               <!---- END MODAL PO BALANCE 1 ------> 
                               <!--------------------------- MODAL Partial Payment ------------------------------->
                                
                                <div class="modal fade" id="pobalance2" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
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
                                                        <tr>
                                                            
                                                            <td>Raw coffee A</td>
                                                            <td>City Roast</td>
                                                            <td>20000</td>  
                                                            <td>180000</td>
                                                            <td><input class="form-control" type="number" name=""></td>
                                                            <td><input class="form-control" type="date" name=""></td>
                                                        </tr>
                                                        <tr>
                                                           
                                                            <td>Raw coffee A</td>
                                                            <td>City Roast</td>
                                                            <td>20000</td> 
                                                            <td>160000</td>
                                                            <td><input class="form-control" type="number" name=""></td>
                                                            <td><input class="form-control" type="date" name=""></td>
                                                        </tr>
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
                                
                               <!---- END MODAL PO BALANCE 1 ------> 
                                     
                                <div class="modal fade" id="Details1" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
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
                                                                    <tr>
                                                                        
                                                                        <td>Raw coffee A</td>
                                                                        <td>City Roast</td>
                                                                        <td>20000</td>  
                                                                        <td>15000</td>
                                                                        <td>50000.00</td>
                                                                        <td>9.00</td>
                                                                        <td>180000</td>
                                                                    </tr>
                                                                    <tr>
                                                                       
                                                                        <td>Raw coffee A</td>
                                                                        <td>City Roast</td>
                                                                        <td>20000</td> 
                                                                        <td>16000</td>
                                                                        <td>40000.00</td>
                                                                        <td>8.00</td>
                                                                        <td>160000</td>
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
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                
                                                <li class="">
                                                    <a href="./PO.php">
                                                        Add Purchase Order
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="./PO2.php">
                                                        Orders
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="active">
                                                    <a href="./PO4.php">
                                                        Unpaid Delivery
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                   <li class="">
                                                    <a href="./PO5.php">
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
                                            <tr>
                                                <td>2</td>
                                                <td>01/31/18</td>
                                                <td>02/02/18</td>
                                                <td>Supplier 1</td>
    											<td><center><a class=" btn btn-success btn-sm" data-toggle="modal" data-target="#pobalance1">full</a>
                                                <a class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#pobalance2">partial</a></center> 
                                                </td>
                                                <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#Details1">Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>01/31/18</td>
                                                <td>02/02/18</td>
                                                <td>Supplier 2</td>
    											<td><center>
                                                    <a class=" btn btn-success btn-sm" data-toggle="modal" data-target="#pobalance1">full</a>
                                                    <a class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#pobalance2">partial</a></center> </td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#Details1">Details</a>
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