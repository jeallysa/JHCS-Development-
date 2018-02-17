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
    <title>Inventory Out</title>
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
                    <li>
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
                    <li class="active">
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
                                        <a href="<?php echo base_url(); ?>inventoryUser">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryActivityLogs">Activity Logs</a>
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
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>inventoryOutRawCoffee">
                                                        Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryOutPackaging">
                                                        Packaging
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryOutMachine">
                                                        Machines
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
                                            <th><b>Delivery Receipt No.</b></th>
                                            <th><b>Client</b></th>
                                            <th><b>Date Delivered</b></th>
                                            <th><b>Bag</b></th>
                                            <th><b>Weight(g)</b></th>
                                            <th><b>Quantity</b></th>
                                            <th><b>Remarks</b></th>
                                            <th><b>Action</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12345</td>
                                                <td>Tazabelle</td>
                                                <td>01/30/18</td>
                                                <td>Clear</td>
                                                <td>500</td>
                                                <td>32</td>
                                                <td>G</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#blend1">Details</a>
                                                    <div class="modal fade" id="blend1" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="panel panel-primary">
                                                                <form action="#" method="post" accept-charset="utf-8">
                                                                    <div class="modal-body" style="padding: 5px;">
                                                                        <div id="page-wrapper">
                                                                            <div class="table-responsive">
                                                                                <center><b>Tazabelle</b>
                                                                                    <br>
                                                                                    <b>1/30/18</b></center>
                                                                                <table class="table table-striped" id="table-mutasi">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>GUATEMALA</th>
                                                                                            <th>SUMATRA</th>
                                                                                            <th>ROBUSTA</th>
                                                                                            <th>BENGUET</th>
                                                                                            <th>COLOMBIA</th>
                                                                                            <th>BARAKO</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>60</td>
                                                                                            <td>40</td>
                                                                                            <td> </td>
                                                                                            <td>60</td>
                                                                                            <td> </td>
                                                                                            <td>40</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> </td>
                                                                                            <td>10</td>
                                                                                            <td>25</td>
                                                                                            <td> </td>
                                                                                            <td>15.5</td>
                                                                                            <td>60</td>
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
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>23456</td>
                                                <td>Cafe Lupe</td>
                                                <td>01/28/18</td>
                                                <td>Clear</td>
                                                <td>250</td>
                                                <td>26</td>
                                                <td>B</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#blend2">Details</a>
                                                    <div class="modal fade" id="blend2" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="panel panel-primary">
                                                                <form action="#" method="post" accept-charset="utf-8">
                                                                    <div class="modal-body" style="padding: 5px;">
                                                                        <div id="page-wrapper">
                                                                            <div class="table-responsive">
                                                                                <center><b>Cafe Lupe</b>
                                                                                    <br>
                                                                                    <b>1/28/18</b></center>
                                                                                <table class="table table-striped" id="table-mutasi">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>GUATEMALA</th>
                                                                                            <th>SUMATRA</th>
                                                                                            <th>ROBUSTA</th>
                                                                                            <th>BENGUET</th>
                                                                                            <th>COLOMBIA</th>
                                                                                            <th>BARAKO</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>20</td>
                                                                                            <td>40</td>
                                                                                            <td>20</td>
                                                                                            <td>60</td>
                                                                                            <td> </td>
                                                                                            <td> </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> </td>
                                                                                            <td>10</td>
                                                                                            <td> </td>
                                                                                            <td> </td>
                                                                                            <td>65.5</td>
                                                                                            <td>55</td>
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
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>34567</td>
                                                <td>The Merry Cooks, Inc.</td>
                                                <td>01/15/18</td>
                                                <td>Brown</td>
                                                <td>1000</td>
                                                <td>30</td>
                                                <td>B</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#blend3">Details</a>
                                                    <div class="modal fade" id="blend3" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="panel panel-primary">
                                                                <form action="#" method="post" accept-charset="utf-8">
                                                                    <div class="modal-body" style="padding: 5px;">
                                                                        <div id="page-wrapper">
                                                                            <div class="table-responsive">
                                                                                <center><b>The Merry Cooks, Inc.</b>
                                                                                    <br>
                                                                                    <b>1/15/18</b></center>
                                                                                <table class="table table-striped" id="table-mutasi">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>GUATEMALA</th>
                                                                                            <th>SUMATRA</th>
                                                                                            <th>ROBUSTA</th>
                                                                                            <th>BENGUET</th>
                                                                                            <th>COLOMBIA</th>
                                                                                            <th>BARAKO</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>60</td>
                                                                                            <td> </td>
                                                                                            <td>40</td>
                                                                                            <td>60</td>
                                                                                            <td>20</td>
                                                                                            <td>10</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>60</td>
                                                                                            <td> </td>
                                                                                            <td>25</td>
                                                                                            <td>10</td>
                                                                                            <td>13.5</td>
                                                                                            <td> </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                                                        <button type="button" class="btn btn-default btn-close" data-dismiss="modal">OKAY</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>45678</td>
                                                <td>Patch Cafe</td>
                                                <td>01/12/18</td>
                                                <td>Clear</td>
                                                <td>500</td>
                                                <td>25</td>
                                                <td>B</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#blend4">Details</a>
                                                    <div class="modal fade" id="blend4" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="panel panel-primary">
                                                                <form action="#" method="post" accept-charset="utf-8">
                                                                    <div class="modal-body" style="padding: 5px;">
                                                                        <div id="page-wrapper">
                                                                            <div class="table-responsive">
                                                                                <center><b>The Patch cafe</b>
                                                                                    <br>
                                                                                    <b>1/12/18</b></center>
                                                                                <table class="table table-striped" id="table-mutasi">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>GUATEMALA</th>
                                                                                            <th>SUMATRA</th>
                                                                                            <th>ROBUSTA</th>
                                                                                            <th>BENGUET</th>
                                                                                            <th>COLOMBIA</th>
                                                                                            <th>BARAKO</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>20</td>
                                                                                            <td>20</td>
                                                                                            <td>20</td>
                                                                                            <td>60</td>
                                                                                            <td> </td>
                                                                                            <td> </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>10</td>
                                                                                            <td>25</td>
                                                                                            <td> </td>
                                                                                            <td> </td>
                                                                                            <td>45</td>
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
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>56789</td>
                                                <td>Connie's Kitchen</td>
                                                <td>01/09/18</td>
                                                <td>Brown</td>
                                                <td>500</td>
                                                <td>12</td>
                                                <td>B</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#blend5">Details</a>
                                                    <div class="modal fade" id="blend5" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="panel panel-primary">
                                                                <form action="#" method="post" accept-charset="utf-8">
                                                                    <div class="modal-body" style="padding: 5px;">
                                                                        <div id="page-wrapper">
                                                                            <div class="table-responsive">
                                                                                <center><b>Connie's Kitchen</b>
                                                                                    <br>
                                                                                    <b>1/09/18</b></center>
                                                                                <table class="table table-striped" id="table-mutasi">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>GUATEMALA</th>
                                                                                            <th>SUMATRA</th>
                                                                                            <th>ROBUSTA</th>
                                                                                            <th>BENGUET</th>
                                                                                            <th>COLOMBIA</th>
                                                                                            <th>BARAKO</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>40</td>
                                                                                            <td>60</td>
                                                                                            <td> </td>
                                                                                            <td>55</td>
                                                                                            <td> </td>
                                                                                            <td>35</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> </td>
                                                                                            <td>15</td>
                                                                                            <td>20</td>
                                                                                            <td> </td>
                                                                                            <td>15</td>
                                                                                            <td>60.5</td>
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
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>67890</td>
                                                <td>The Manor Hotel</td>
                                                <td>01/05/18</td>
                                                <td>Brown</td>
                                                <td>250</td>
                                                <td>48</td>
                                                <td>B</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#blend6">Details</a>
                                                    <div class="modal fade" id="blend6" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="panel panel-primary">
                                                                <form action="#" method="post" accept-charset="utf-8">
                                                                    <div class="modal-body" style="padding: 5px;">
                                                                        <div id="page-wrapper">
                                                                            <div class="table-responsive">
                                                                                <center><b>The Manor Hotel</b>
                                                                                    <br>
                                                                                    <b>1/05/18</b></center>
                                                                                <table class="table table-striped" id="table-mutasi">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>GUATEMALA</th>
                                                                                            <th>SUMATRA</th>
                                                                                            <th>ROBUSTA</th>
                                                                                            <th>BENGUET</th>
                                                                                            <th>COLOMBIA</th>
                                                                                            <th>BARAKO</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>120</td>
                                                                                            <td>100</td>
                                                                                            <td>150</td>
                                                                                            <td>60</td>
                                                                                            <td>25</td>
                                                                                            <td>160</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> </td>
                                                                                            <td>110</td>
                                                                                            <td>125</td>
                                                                                            <td> </td>
                                                                                            <td>115.5</td>
                                                                                            <td>160</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                                                        <button type="button" class="btn btn-default btn-close" data-dismiss="modal">OKAY</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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