<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Machines Inventory Stocks</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    </head>
    <style>

    .table thead,
    thead th {
        text-align: center;
        font-size: 120%;
    }

    input[type=checkbox].toggle-switch {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        width: 4em;
        height: 2em;
        border-radius: 2em;
        background-color: #ddd;
        outline: 0;
        cursor: pointer;
        transition: background-color 0.09s ease-in-out;
        position: relative;
    }

    input[type=checkbox].toggle-switch:checked {
        background-color: #3af;
    }

    input[type=checkbox].toggle-switch::after {
        content: '';
        width: 2em;
        height: 2em;
        background-color: white;
        border-radius: 2em;
        position: absolute;
        transform: scale(0.7);
        left: 0;
        transition: left 0.09s ease-in-out;
        box-shadow: 0 0.1em rgba(0, 0, 0, 0.5);
    }

    input[type=checkbox].toggle-switch:checked::after {
        left: 2em;
    }
    .navbar {
        background-color: chartreuse;
    }
    
.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
    background-color: #4caf50;
    border-color: #9c27b0;
    color: #FFFFFF;
    box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);
}

.page-header {
    height: 60vh;
    background-position: center center;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

a {
    color: #4caf50;
}

a:hover,
a:focus {
    color: #4caf50;
    text-decoration: none;
}

.navbar .dropdown-menu li a:hover,
.navbar .dropdown-menu li a:focus,
.navbar .dropdown-menu li a:active,
.navbar.navbar-default .dropdown-menu li a:hover,
.navbar.navbar-default .dropdown-menu li a:focus,
.navbar.navbar-default .dropdown-menu li a:active {
    background-color: #4caf50;
    color: #FFFFFF;
    box-shadow: 0 12px 20px -10px rgba(156, 39, 176, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
}
</style>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo ">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>adminDashboard">
                            <i class="material-icons">dashboard</i>
                            
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>adminProductInventory">
                            <i class="material-icons">assessment</i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url(); ?>adminAccounts">
                            <i class="material-icons">account_circle</i>
                            <p>Accounts</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminClients">
                            <i class="material-icons">person</i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminSupplier">
                            <i class="material-icons">person</i>
                            <p>Suppliers</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminSalesReport">
                            <i class="material-icons">library_books</i>
                            <p>Reports</p>
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
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <li>
                                    <p class="title">Hi, <?php $username = $this->session->userdata('username'); print_r($username); ?></p>
                                </li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminUser">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminActivityLogs">Activity Logs</a>
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
            <div class="modal fade" id="stock" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading" >
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add New Machines</h4>
                        </div>
                        <form action="AdminMachines/insert" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                               <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Brewer</label>
                                            <input class="form-control" type="text" name="brewer" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Brewer should only countain letters">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Type</label>
                                            <input class="form-control" type="text" name="type" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Type should only countain letters">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Reorder Level</label>
                                            <input class="form-control" type="number" name="reorder" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Price Per Unit</label>
                                            <input class="form-control" type="number" name="price" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                           <div class="form-group label-floating">
                                            <label for="email">Supplier</label>
                                            <select class="form-control" name="sup_company" required>
                                                <option disabled selected value> -- select a supplier -- </option>
                                                <?php 

                                                    foreach($data1['getSupplier'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->sup_id.'">'.$row->sup_company.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="panel-footer" style="margin-bottom:-14px;">
                                <input type="submit" class="btn btn-success" value="Add" />
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                                <input type="reset" class="btn btn-danger" value="Clear" />
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                                <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs" data-background-color="green">
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminProductInventory">
                                                        Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>adminBlends">
                                                        Company Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminClientBlends">
                                                        Client Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>adminPackaging">
                                                        Packaging
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminStickers">
                                                        Stickers
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>adminMachines">
                                                       Machines
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <a class="btn btn-success" data-toggle="modal" data-target="#stock" data-original-title style="float: right">Add New Machine</a>
                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">Machine No.</b></th>
                                            <th><b class="pull-left">Machine</b></th>
                                            <th><b class="pull-left">Type</b></th>
                                            <th><b class="pull-left">Price Per Unit</b></th>
                                            <th><b class="pull-left">Reorder Level</b></th>
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b class="pull-left">Number of Stocks </b></th>
                                            <th><b class="pull-left">Edit</b></th>
                                            <th><b class="pull-left">Activation</b></th>
                                        </thead>
                                        <tbody>
                                            
                                             <?php 
                                                foreach ($data['machines'] as $row) {
                                             ?>
                                             <tr>
                                                 <td><?php echo $row->mach_id; ?></td>
                                                 <td><?php echo $row->brewer; ?></td>
                                                 <td><?php echo $row->brewer_type; ?></td>
                                                 <td>Php<?php echo number_format($row->mach_price,2); ?></td>
                                                 <td><?php echo $row->mach_reorder; ?></td>
                                                 <td><?php echo $row->sup_company; ?></td>
                                                 <td><?php echo $row->mach_stocks; ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#updatemachines<?php echo $row->mach_id;?>">Edit</a>
                                                </td>
                                                 <td>
                                                     <div class="onoffswitch">
                                                         <?php
                                                        if($row->mach_activation == 1){

                                                    ?>
                                                         <input type="checkbox" id="button<?php echo $row->mach_id;?>" class="toggle-switch" data-toggle="modal" data-target="#deactivate<?php echo $row->mach_id;?>" checked>
                                                    <?php
                                                        }else{

                                                    ?>

                                                        <input type="checkbox" id="button<?php echo $row->mach_id;?>" class="toggle-switch" data-toggle="modal" data-target="#deactivate<?php echo $row->mach_id;?>">
                                                    <?php
                                                        }

                                                    ?>
                                                    </div>
                                                </td>
                                                <div class="modal fade" id="deactivate<?php echo $row->mach_id;?>" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading" >
                                                                <button type="button" class="close" data-dismiss="modal" onclick="document.getElementById('button<?php echo $row->mach_id;?>').click()" aria-hidden="true">×</button>
                                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-warning-sign"></span> Activation/Deactivation </h4>
                                                            </div>
                                                            <form action="<?php echo base_url(); ?>AdminMachines/activation" method="post" accept-charset="utf-8">
                                                                <div class="modal-body" style="padding: 5px;">
                                                                    <div class="row" style="text-align: center">
                                                                        <br>
                                                                        <h4> Are you sure you want to activate/deactivate this machine?</h4>
                                                                        <br>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <input class="form-control" type="hidden" name="deact_id" value="<?php echo $row->mach_id; ?>" required>
                                                                            </div>
                                                                            <div class="form-group label-floating">
                                                                                <input class="form-control" type="hidden" name="brewer" value="<?php echo $row->brewer; ?>" required>
                                                                            </div>
                                                                            <div class="form-group label-floating">
                                                                                <input class="form-control" type="hidden" name="type" value="<?php echo $row->brewer_type; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                                    <input type="submit" class="btn btn-success" value="Yes" />
                                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                                    
                                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                                    <button type="button" class="btn btn-danger btn-close" onclick="document.getElementById('button<?php echo $row->mach_id;?>').click()" data-dismiss="modal">No</button>
                                                                </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="updatemachines<?php echo $row->mach_id;?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading" >
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Update Machine</h4>
                                                            </div>
                                                            <form action="<?php echo base_url(); ?>AdminMachines/update" method="post" accept-charset="utf-8">
                                                                <div class="modal-body" style="padding: 5px;">
                                                                     <div class="row">

                                                                         <div class="col-md-6 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <label for="email">Machine Number</label>
                                                                                <input class="form-control" type="number" name="id" value="<?php echo $row->mach_id; ?>" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" disabled >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <label for="email">Brewer</label>
                                                                                <input class="form-control" type="text" name="brewer" value="<?php echo $row->brewer; ?>" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Brewer should only countain letters">
                                                                            </div>
                                                                        </div>
                                                                            <div class="col-md-12 form-group">
                                                                                <div class="form-group label-floating">
                                                                                    
                                                                                    <input class="form-control" type="hidden" name="mach_id" value="<?php echo $row->mach_id; ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <label for="email">Type</label>
                                                                                <input class="form-control" type="text" name="type" value="<?php echo $row->brewer_type; ?>" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Type should only countain letters">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <label for="email">Price</label>
                                                                                <input class="form-control" type="number" name="price" value="<?php echo $row->mach_price; ?>" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                                                            </div>
                                                                        </div>
                                                                         <div class="col-lg-6 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <label for="email">Reorder Level</label>
                                                                                <input class="form-control" type="number" name="reorder" value="<?php echo $row->mach_reorder; ?>" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <label for="email">Number of Stocks</label>
                                                                                <input class="form-control" type="number" name="stock_level" value="<?php echo $row->mach_stocks; ?>" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                                                            
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                               <div class="form-group label-floating">
                                                                                <label for="email">Supplier</label>
                                                                                <select class="form-control" name="sup_company" required>
                                                                                    <option disabled selected value> -- select a supplier -- </option>
                                                                                    <?php 

                                                                                        foreach($data1['getSupplier'] as $row2)
                                                                                        { 
                                                                                        ?>
                                                                                        <option value="<?php echo $row2->sup_id;?>" <?php if ($row->sup_id==$row2->sup_id) { ?> selected="selected" <?php } ?> ><?php echo $row2->sup_company; ?></option>
                                                                                    <?php
                                                                                        }
                                                                                     ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                                    <input type="submit" class="btn btn-success" value="Update" />
                                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                                    <input type="reset" class="btn btn-danger" value="Clear" />
                                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                                    <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.Html5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/datepicker.js" type="text/javascript"></script>
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
    $('#example').DataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
		buttons: [
            { "extend": 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5]
                }
            },
            
			{ "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> CSV',"className": 'btn btn-success btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5]
                }
            },
            
			{ "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5]
                }
            }
        ]
    });
});

$('table tbody tr  td').on('click', function() {
    $("#myModal").modal("show");
    $("#txtfname").val($(this).closest('tr').children()[0].textContent);
    $("#txtlname").val($(this).closest('tr').children()[1].textContent);
});
</script>

<script>
$(function() {
    $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
    });
})
</script>

</html>