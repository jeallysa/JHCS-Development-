<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Raw Coffee Inventory Stocks</title>
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
    
/*
        td.highlight {
            background-color: whitesmoke !important;
        }
*/

.table thead,
thead th {
    text-align: center;
    font-size: 120%;
}


/* Custom Style */

.onoffswitch {
    position: relative;
    width: 110px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}

.onoffswitch-checkbox {
    display: none;
}

.onoffswitch-label {
    display: block;
    overflow: hidden;
    cursor: pointer;
    border: 2px solid #999999;
    border-radius: 20px;
}

.onoffswitch-inner {
    display: block;
    width: 200%;
    margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s;
    -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s;
    transition: margin 0.3s ease-in 0s;
}

.onoffswitch-inner:before,
.onoffswitch-inner:after {
    display: block;
    float: left;
    width: 50%;
    height: 30px;
    padding: 0;
    line-height: 30px;
    font-size: 14px;
    color: white;
    font-family: Trebuchet, Arial, sans-serif;
    font-weight: bold;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.onoffswitch-inner:before {
    content: " Enabled";
    padding-left: 10px;
    background-color: #2FCCFF;
    color: #FFFFFF;
}

.onoffswitch-inner:after {
    content: "Disabled";
    padding-right: 10px;
    background-color: #EEEEEE;
    color: #999999;
    text-align: right;
}

.onoffswitch-switch {
    display: block;
    width: 18px;
    margin: 7px;
    background: #FFFFFF;
    border: 2px solid #999999;
    border-radius: 20px;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 70px;
    -moz-transition: all 0.3s ease-in 0s;
    -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s;
    transition: all 0.3s ease-in 0s;
}

.onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}

.onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-switch {
    right: 0px;
}

.navbar {
    background-color: chartreuse;
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
            
         <div class="modal fade" id="newrawcoffee" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading" >
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add New Raw Coffee</h4>
                        </div>
                        <form action="AdminProductInventory/insert" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Name</label>
                                            <input class="form-control" type="text" name="name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-lg-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Reorder Level</label>
                                            <input class="form-control" type="number" name="reorder" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Stock Limit</label>
                                            <input class="form-control" type="number" name="stocklimit" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Number of Stocks</label>
                                            <input class="form-control" type="number" name="stocks" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                           <div class="form-group label-floating">
                                            <label for="email">Supplier</label>
                                            <select class="form-control" name="sup_company" required>
                                                <option disabled selected value> -- select an item -- </option>
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
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>adminProductInventory">
                                                        Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>adminBlends">
                                                        Existing Blends
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
                                                <li class="">
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
                                    <a class="btn btn-success" data-toggle="modal" data-target="#newrawcoffee" data-original-title style="float: right">Add New Raw Coffee</a>
                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">Name</b></th>
                                            <th><b class="pull-left">Reorder Level (grams)</b></th>
                                            <th><b class="pull-left">Stock Limit (grams)</b></th>
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b class="pull-left">Number of Stocks (grams)</b></th>
                                            <th class="disabled-sorting"><b>Edit</b></th>
                                            <th><b class="pull-left">Activation</b></th>
                                        </thead>
                                        <tbody>
                                              <?php 
                                                    foreach($data['product'] as $row)
                                                    {
                                                ?>
                                             <tr>
                                                 <td><?php echo $row->raw_coffee; ?></td>
                                                 <td><?php echo $row->raw_reorder; ?></td>
                                                 <td><?php echo $row->raw_limit; ?></td>
                                                 <td><?php echo $row->sup_company; ?></td>
                                                 <td><?php echo $row->raw_stock; ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#updateraw<?php echo $row->raw_id;?>">Edit</a>
                                                </td>
                                                 <td>
                                                    <div class="onoffswitch">
                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                        <label class="onoffswitch-label" for="myonoffswitch">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <div class="modal fade" id="updateraw<?php echo $row->raw_id;?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading" >
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Update Raw Coffee </h4>
                                                        </div>
                                                        <form action="<?php echo base_url(); ?>AdminProductInventory/update" method="post" accept-charset="utf-8">
                                                            <div class="modal-body" style="padding: 5px;">
                                                                
                                                                 <div class="row">
                                                                    <div class="col-md-12 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Name</label>
                                                                            <input class="form-control" type="text" name="name" value="<?php echo $row->raw_coffee; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 form-group">
                                                                        <div class="form-group label-floating">
                                                                            
                                                                            <input class="form-control" type="hidden" name="raw_id" value="<?php echo $row->raw_id; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                     <div class="col-lg-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Reorder Level</label>
                                                                            <input class="form-control" value="<?php echo $row->raw_reorder; ?>" type="number" name="reorder" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Stock Limit</label>
                                                                            <input class="form-control" value="<?php echo $row->raw_limit; ?>" type="number" name="stocklimit" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <div class="form-group label-floating">
                                                                            <label for="email">Number of Stocks</label>
                                                                            <input class="form-control" value="<?php echo $row->raw_stock; ?>" type="number" name="stocks" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                           <div class="form-group label-floating">
                                                                            <label for="email">Supplier</label>
                                                                            <select class="form-control" name="sup_company" required>
                                                                                <option disabled selected value> -- select an item -- </option>
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
                    columns: [0, 1, 2, 3, 4]
                }
            },
            
			{ "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> Excel',"className": 'btn btn-success btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4]
                }
            },
            
			{ "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4]
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