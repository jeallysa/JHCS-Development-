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
    <title>Client Returns</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css">
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
</head>
<style>
.title {
    font-size: large;
}
</style>

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
                    <li>
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
                    <li class="active">
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="modal fade" id="details1" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="panel panel-primary">
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div id="page-wrapper">
                                                        <div class="table-responsive">
                                                            <center><b>Client 1</b></center>
                                                            <center><b>10/01/18</b></center>
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
                                                                        <td>600</td>
                                                                        <td>400</td>
                                                                        <td>0</td>
                                                                        <td>600</td>
                                                                        <td>0</td>
                                                                        <td>400</td>
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
                                <div class="modal fade" id="details2" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="panel panel-primary">
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div id="page-wrapper">
                                                        <div class="table-responsive">
                                                            <center><b>Client 2</b></center>
                                                            <center><b>10/03/18</b></center>
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
                                                                        <td>100</td>
                                                                        <td>400</td>
                                                                        <td>100</td>
                                                                        <td>600</td>
                                                                        <td>100</td>
                                                                        <td>0</td>
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
                                <div class="modal fade" id="details3" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="panel panel-primary">
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div id="page-wrapper">
                                                        <div class="table-responsive">
                                                            <center><b>Client 3</b></center>
                                                            <center><b>10/05/18</b></center>
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
                                                                        <td>0</td>
                                                                        <td>600</td>
                                                                        <td>400</td>
                                                                        <td>0</td>
                                                                        <td>600</td>
                                                                        <td>300</td>
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
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <span> </span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>returnslist.php">
                                                        <i class="material-icons">home</i> Company Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>clientreturn.php">
                                                        <i class="material-icons">group</i> Client Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="type">
                                            <div class="card-content table-responsive">
                                                <div class="col-md-12 col-md-offset-0">
                                                    <div class="fresh-datatables">
                                                        <!--  Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange, full-color-purple, full-color-gray
                                    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange, toolbar-color-purple, toolbar-color-gray -->
                                                        <table id="fresh-datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th><b>Client Return No.</b></th>
                                                                    <th><b>Date</b></th>
                                                                    <th><b>Client</b></th>
                                                                    <th><b>Coffee</b></th>
                                                                    <th><b>Coffee Bag</b></th>
                                                                    <th><b>Grams</b></th>
                                                                    <th><b>Quantity</b></th>
                                                                    <th><b>Remarks</b></th>
                                                                    <th><b>Action taken</b></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>00001</td>
                                                                    <td>Oct 1, 2017</td>
                                                                    <td>Client 1</td>
                                                                    <td>Sumatra Night</td>
                                                                    <td>Clear Bag</td>
                                                                    <td>250 g</td>
                                                                    <td>3</td>
                                                                    <td>Incorrect Blend</td>
                                                                    <td>Added to Sample</td>
                                                                    <td>
                                                                        <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details1">Details</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>00002</td>
                                                                    <td>Oct 3, 2017</td>
                                                                    <td>Client 2</td>
                                                                    <td>Guatemala Rainforest</td>
                                                                    <td>Brown Bag</td>
                                                                    <td>500 g</td>
                                                                    <td>2</td>
                                                                    <td>Spoiled</td>
                                                                    <td>Disposed</td>
                                                                    <td>
                                                                        <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details2">Details</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>00003</td>
                                                                    <td>Oct 5, 2017</td>
                                                                    <td>Client 3</td>
                                                                    <td>Cordillera Sunrise</td>
                                                                    <td>Clear Bag</td>
                                                                    <td>1000 g</td>
                                                                    <td>1</td>
                                                                    <td>Incorrect Blend</td>
                                                                    <td>Added to Sample</td>
                                                                    <td>
                                                                        <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details3">Details</a>
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
    <script src="../assets/js/jquery-1.12.4.js"); ?>" type="text/javascript"></script>
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
    $('#fresh-datatables').DataTable({
        select: {
            style: 'single'
        }

    });
});
</script>

</html>