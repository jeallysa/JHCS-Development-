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
    <title>List of Samples</title>
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
                    <li class="active">
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
            <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><b>Add New Samples</b>
                                            <br>
                                            <b>1/31/18</b></center>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-3 form-group">
                                                    <div class="form-group label-floating">
                                                        <label>Sample For</label>
                                                        <select class="form-control" name="supplier" required>
                                                            <option>Walk in</option>
                                                            <option>Client A</option>
                                                            <option>Client B</option>
                                                            <option>Client C</option>
                                                            <option>Client D</option>
                                                            <option>Client E</option>
                                                            <option>Client F</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <div class="form-group label-floating">
                                                        <label>Type</label>
                                                        <select class="form-control" name="supplier" required>
                                                            <option>Light Roast</option>
                                                            <option>Medium Roast</option>
                                                            <option>City Roast</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <div class="form-group label-floating">
                                                        <label>Packaging</label>
                                                        <select class="form-control" name="supplier" required>
                                                            <option>Clear Bag</option>
                                                            <option>Brown Bag</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <div class="form-group label-floating">
                                                        <label>Date Released</label>
                                                        <input class="form-control" type="date" name=""/>
                                                    </div>
                                                </div>
                                            </div>

                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    <th>GUATEMALA</th>
                                                    <th>SUMATRA</th>
                                                    <th>ROBUSTA</th>
                                                    <th>BENGUET</th>
                                                    <th>COLOMBIA</th>
                                                    <th>BARAKO</th>
                                                    <th><b>Quantity</b></th>
                                                    <th><b>Unit Price</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="number" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
            <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><b>(Client Blend Name)</b>
                                            <br>
                                            <b>1/31/18</b></center>
                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    <th>Blend Name</th>
                                                    <th>GUATEMALA</th>
                                                    <th>SUMATRA</th>
                                                    <th>ROBUSTA</th>
                                                    <th>BENGUET</th>
                                                    <th>COLOMBIA</th>
                                                    <th>BARAKO</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Mario's Blend
                                                    </td>
                                                    <td>600</td>
                                                    <td>400</td>
                                                    <td>0</td>
                                                    <td>600</td>
                                                    <td>0</td>
                                                    <td>400</td>
                                                    <td>3</td>
                                                    <td>199</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4>List of Samples</h4>
                                </div>
                                <div class="card-content">
                                    <a class="btn btn-success" data-toggle="modal" data-target="#contact" data-original-title style="float: right;">Add Samples</a>
                                    <div class="card-content table-responsive">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div class="fresh-datatables">
                                                <!--  Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange, full-color-purple, full-color-gray
                                    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange, toolbar-color-purple, toolbar-color-gray -->
                                                <table id="fresh-datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th><b>#</b></th>
                                                            <th><b>Date Released</b></th>
                                                            <th><b>Type</b></th>
                                                            <th><b>Recipient</b></th>
                                                            <th><b>Packaging</b></th>
                                                            <th><b>Stickers</b></th>
                                                            <th><b>Actions</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>01/31/18</td>
                                                            <td>Sample</td>
                                                            <td>Leon Araneta</td>
                                                            <td>Brown Bag</td>
                                                            <td>Blend A Sticker</td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details">Details</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>01/26/18</td>
                                                            <td>Free taste</td>
                                                            <td>Guards at SLU Main Campus</td>
                                                            <td>Brown Bag</td>
                                                            <td>Blend A Sticker</td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details">Details</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>01/23/18</td>
                                                            <td>Sample</td>
                                                            <td>CSE Sumatra night</td>
                                                            <td>Brown Bag</td>
                                                            <td>Blend A Sticker</td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details">Details</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>01/14/18</td>
                                                            <td>Free taste</td>
                                                            <td>Pedestrians along Session Road</td>
                                                            <td>Brown Bag</td>
                                                            <td>Blend A Sticker</td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details">Details</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>01/11/18</td>
                                                            <td>Freebies</td>
                                                            <td>The Manor Hotel</td>
                                                            <td>Brown Bag</td>
                                                            <td>Blend A Sticker</td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details">Details</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>01/04/18</td>
                                                            <td>Sample</td>
                                                            <td>Tazabelle</td>
                                                            <td>Brown Bag</td>
                                                            <td>Blend A Sticker</td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#details">Details</a>
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