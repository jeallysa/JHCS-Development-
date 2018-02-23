<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>List of Items</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
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
                    <li>
                        <a href="<?php echo base_url(); ?>adminProductInventory">
                            <i class="material-icons">assessment</i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url(); ?>adminAccounts">
                            <i class="material-icons">account_circle</i>
                            <p>User Accounts</p>
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
                                    <p class="title">Hi, Player!</p>
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
            <div class="modal fade" id="contact" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Create New Item</h4>
                        </div>
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding-left: 100px;">
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="Item Name" placeholder="item Name" type="text" required autofocus />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="Description" placeholder="Description" type="text" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <select class="form-control" name="Type" placeholder="Type" type="text" required>
                                            <option>Raw Coffee</option>
                                            <option>Blended Coffee</option>
                                            <option>Packaging</option>
                                            <option>Coffee Machine</option>
                                            <option>Coffee Filter</option>
                                            <option>Sticker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                            <option>Light Roast</option>
                                            <option>Medium Roast</option>
                                            <option>City Roast</option>
                                            <option>Existing Blend</option>
                                            <option>Company Blend</option>
                                            <option>Brown Bag</option>
                                            <option>Clear Bag</option>
                                            <option>Machine A</option>
                                            <option>Sticker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="cp number" placeholder="Cellphone Number" type="text" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-12 col-sm-12">
                                        <textarea style="resize:vertical;" class="form-control" placeholder="Address" rows="2" name="address" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
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
            <div class="modal fade" id="stock" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Adjust Stock Limit</h4>
                        </div>
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding-left: 100px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label for="type">(Item Name)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label">Stock Limit</label>
                                    <div class="col-10">
                                        <input class="form-control" type="number" value="100" id="example-number-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label">Reorder Level</label>
                                    <div class="col-10">
                                        <input class="form-control" type="number" value="1000" id="example-number-input">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel-footer" style="margin-bottom:-14px;">
                                        <input type="submit" class="btn btn-success" value="Add" style="float: right;" />
                                        <!--<span class="glyphicon glyphicon-ok"></span>-->
                                        <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Edit Item Information</h4>
                        </div>
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding-left: 100px;">
                                <div class="form-group row">
                                    <div for="example-number-input" class="col-2 col-form-label">
                                        <label for="type">(Item Name)</label>
                                        <input class="form-control" type="textarea" value="Brown Bag" id="example-number-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label">Description</label>
                                    <div class="col-10">
                                        <input class="form-control" type="textarea" value="brown bag from brown bag supplier" id="example-number-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category</label>
                                        <select class="form-control" name="Type" placeholder="Type" type="text" required>
                                            <option>Packaging</option>
                                            <option>Raw Coffee</option>
                                            <option>Blended Coffee</option>
                                            <option>Coffee Machine</option>
                                            <option>Coffee Filter</option>
                                            <option>Sticker</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Type</label>
                                        <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                            <option>Brown Bag</option>
                                            <option>Light Roast</option>
                                            <option>Medium Roast</option>
                                            <option>City Roast</option>
                                            <option>Existing Blend</option>
                                            <option>Company Blend</option>
                                            <option>Clear Bag</option>
                                            <option>Machine A</option>
                                            <option>Sticker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="example-number-input" class="col-2 col-form-label">Supplier</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="Supplier 1" id="example-number-input">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="example-number-input" class="col-2 col-form-label">Unit Price</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" value="150" id="example-number-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel-footer" style="margin-bottom:-14px;">
                                        <input type="submit" class="btn btn-success" value="Add" style="float: right;" />
                                        <!--<span class="glyphicon glyphicon-ok"></span>-->
                                        <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
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
                                <div class="card-header" data-background-color="green">
                                    <h4>List of Items</h4>
                                </div>
                                <div class="card-content">
                                    <a href="<?php echo base_url(); ?>adminNewItem" class="btn btn-success" data-original-title style="float: right"> Create New Item </a>
                                    <br>
                                    <br>
                                    <div class="card-content table-responsive">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div class="fresh-datatables">
                                                <!--  Available colors for the full background: full-color-green, full-color-azure, full-color-green, full-color-red, full-color-orange, full-color-purple, full-color-gray
                                                Available colors only for the toolbar: toolbar-color-green, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange, toolbar-color-purple, toolbar-color-gray -->
                                                <table id="fresh-datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th><b>Item No.</b></th>
                                                            <th><b>Item</b></th>
                                                            <th><b>Description</b></th>
                                                            <th><b>Category</b></th>
                                                            <th><b>Type</b></th>
                                                            <th><b>Supplier</b></th>
                                                            <th><b>Unit Price</b></th>
                                                            <th><b>Activation</b></th>
                                                            <th class="disabled-sorting"><b>Adjust Stock Limit</b></th>
                                                            <th class="disabled-sorting"><b>Edit</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>I1</td>
                                                            <td>Coffee A</td>
                                                            <td>Raw Coffee light roast</td>
                                                            <td>Raw Coffee</td>
                                                            <td>Light Roast</td>
                                                            <td>Lila Enterprise</td>
                                                            <td>599</td>
                                                            <td>
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#stock">Adjust</a>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>I2</td>
                                                            <td>Coffee B</td>
                                                            <td>Raw Coffee light roast </td>
                                                            <td>Raw Coffee</td>
                                                            <td>City Roast</td>
                                                            <td>Zapatina's Trading Inc</td>
                                                            <td>699</td>
                                                            <td>
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#stock">Adjust</a>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>I3</td>
                                                            <td>Guatamella</td>
                                                            <td>Blended Coffee from the existing blend</td>
                                                            <td>Blended Coffee</td>
                                                            <td>Existing Blend</td>
                                                            <td>N/A</td>
                                                            <td>399</td>
                                                            <td>
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#stock">Adjust</a>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>I4</td>
                                                            <td>Point and Grill Blend</td>
                                                            <td>Blended Coffee from point and grill</td>
                                                            <td>Blended Coffee</td>
                                                            <td>Company Blend</td>
                                                            <td>N/A</td>
                                                            <td>400</td>
                                                            <td>
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#stock">Adjust</a>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>I5</td>
                                                            <td>Brown Bag</td>
                                                            <td>brown bag from brown bag supplier</td>
                                                            <td>Packaging</td>
                                                            <td>Brown Bag</td>
                                                            <td>Brown Bag Supplier</td>
                                                            <td>150</td>
                                                            <td>
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#stock">Adjust</a>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>I6</td>
                                                            <td>Machine A</td>
                                                            <td>A Coffee Machine from machine supplier</td>
                                                            <td>Coffee Machine</td>
                                                            <td>Machine A</td>
                                                            <td>Machine supplier</td>
                                                            <td>1999</td>
                                                            <td>
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#stock">Adjust</a>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
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
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }

    });


    var table = $('#fresh-datatables').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
        alert('You clicked on Like button');
    });
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