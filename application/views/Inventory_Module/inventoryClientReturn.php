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
                    <li class="active">
                        <a href="<?php echo base_url(); ?>inventoryReturnsList">
                            <i class="material-icons">input</i>
                            <p>Returns</p>
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
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <span> </span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryReturnsList">
                                                        <i class="material-icons">home</i> Company Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>inventoryClientReturn">
                                                        <i class="material-icons">group</i> Client Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-content table-responsive">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div class="fresh-datatables">
                                                <!--  Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange, full-color-purple, full-color-gray
                                    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange, toolbar-color-purple, toolbar-color-gray -->      
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                        <h3><b>Coffee</b></h3>
                                        <hr>
                                    </div>
                                        <table id="" class="table hover order-column" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><b>Delivery Receipt No.</b></th>
                                                    <th><b>Client Return No.</b></th>
                                                    <th><b>Date Returned</b></th>
                                                    <th><b>Client</b></th>
                                                    <th><b>Coffee</b></th>
                                                    <th><b>Bag</b></th>
                                                    <th><b>Grams</b></th>
                                                    <th><b>Quantity</b></th>
                                                    <th><b>Remarks</b></th>
                                                    <th><b>Action Taken</b></th>
                                                    <th><b>Status</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1020</td>
                                                    <td>00001</td>
                                                    <td>Oct 1, 2017</td>
                                                    <td>Client 1</td>
                                                    <td>Sumatra Night</td>
                                                    <td>Clear Bag</td>
                                                    <td>250 g</td>
                                                    <td>3</td>
                                                    <td>Incorrect Blend</td>
                                                    <td>Added to Sample</td>
                                                    <td>Resolved</td>
                                                </tr>
                                                <tr>
                                                    <td>1030</td>
                                                    <td>00002</td>
                                                    <td>Oct 3, 2017</td>
                                                    <td>Client 2</td>
                                                    <td>Guatemala Rainforest</td>
                                                    <td>Brown Bag</td>
                                                    <td>500 g</td>
                                                    <td>2</td>
                                                    <td>Spoiled</td>
                                                    <td>Disposed</td>
                                                    <td>Resolved</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                <h3><b>Machine</b></h3>
                                                <hr>
                                            </div>
                                                <table id="" class="table hover order-column" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th><b>Delivery Receipt No.</b></th>
                                                            <th><b>Client Return No.</b></th>
                                                            <th><b>Date Returned</b></th>
                                                            <th><b>Client</b></th>
                                                            <th><b>Machine</b></th>
                                                            <th><b>Quantity</b></th>
                                                            <th><b>Remarks</b></th>
                                                            <th><b>Action Taken</b></th>
                                                            <th><b>Status</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2352</td>
                                                            <td>1524</td>
                                                            <td>Dec 9, 2017</td>
                                                            <td>Client 1</td>
                                                            <td>Machine A</td>
                                                            <td>2</td>
                                                            <td>Damaged</td>
                                                            <td>Repaired</td>
                                                            <td>Resolved</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5345</td>
                                                            <td>3245</td>
                                                            <td>Dec 10, 2017</td>
                                                            <td>Client 2</td>
                                                            <td>Machine B</td>
                                                            <td>1</td>
                                                            <td>Damaged</td>
                                                            <td>Repaired</td>
                                                            <td>Resolved</td>
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
    $('table.table').DataTable();
});
</script>

</html>