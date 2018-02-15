<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Client's Info</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
    <style>
    .select-pane {
        display: none;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>salesDashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesSellProduct">
                            <i class="material-icons">shopping_basket</i>
                            <p>Sell Products</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>salesClients">
                            <i class="material-icons">supervisor_account</i>
                            <p>Clients</p>
                        </a>
                    </li>
					<li>
                        <a href="<?php echo base_url(); ?>salesReturns">
                            <i class="material-icons">assignment_return</i>
                            <p>Returns</p>
                        </a>
                    </li>
					<li >
                        <a href="<?php echo base_url(); ?>salesPenDelivery">
                            <i class="material-icons">local_shipping</i>
                            <p>Deliveries</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReceivables">
                            <i class="material-icons">library_books</i>
                            <p>Receivables</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesCollections">
                            <i class="material-icons">bubble_chart</i>
                            <p>Collections</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReport">
                            <i class="material-icons">assessment</i>
                            <p>Sales Summary</p>
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
                                        <a href="<?php echo base_url(); ?>salesUserProfile">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>salesChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>salesActivityLogs">Activity Logs</a>
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
                        <div class="col-sm-12">
                            <div class="card card-profile">
                                <div class="col-xs-12">
                                    <div class="card card-profile">
                                        <div class="content">
                                            <a href="clients.php" class="btn btn-primary navbar-btn pull-left">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <h3 class="card-title">The Legend Villas</h3>
                                            <h6 class="category text-gray">Jesselyn Amagan - General Manager</h6>
                                            <table align="center">
                                                <tbody>
                                                    <tr>
                                                        <td><b>Address:</b></td>
                                                        <td align="left">Mandaluyong City</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Tel:</b></td>
                                                        <td align="left">+444 444 444</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Email:</b></td>
                                                        <td align="left">chef22@manor.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                            <a href="<?php echo base_url(); ?>salesClients/salesContract" class="btn btn-warning btn-round">View Contract</a>
                                            <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#balance">Check Balance</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Transaction:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#purchaseorder" data-toggle="tab">
                                                        <i class="material-icons">bug_report</i> Purchase Order
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#deliveries" data-toggle="tab">
                                                        <i class="material-icons">code</i> Deliveries
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#payment" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Payment
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="purchaseorder">
                                            <br>
                                            <br>
                                            <div class="card-header btn btn-primary btn-lg" data-background-color="green" data-toggle="modal" data-target="#contact" data-original-title style="float:right;">
                                                Add Purchase Order
                                            </div>
                                            <br>
                                            <br>
                                            <table id="" class="display hover order-column cell-border" cellspacing="0" width="100%">
                                                <thead>
                                                    <th><b class="pull-left">Purchase Order No.</b></th>
                                                    <th><b class="pull-left">Item Code</b></th>
                                                    <th><b class="pull-left">Coffee Blend</b></th>
                                                    <th><b class="pull-left">Bag</b></th>
                                                    <th><b class="pull-left">Size</b></th>
                                                    <th><b class="pull-left">Quantity</b></th>
                                                    <th><b class="pull-left">Unit Price</b></th>
                                                    <th><b class="pull-left">Total Amount</b></th>
                                                    <th><b class="pull-left">Date of Purchase</b></th>
                                                    <th><b class="pull-left">Delivery Status</b></th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>PO2563</td>
                                                        <td>F11489</td>
                                                        <td>Farmer's Blend Ground Coffee</td>
                                                        <td>Clear</td>
                                                        <td>500 g</td>
                                                        <td>80</td>
                                                        <td>320.00</td>
                                                        <td>25,600.00</td>
                                                        <td>November 24, 2017</td>
                                                        <td>pending</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PO2564</td>
                                                        <td>F11489</td>
                                                        <td>Farmer's Blend Ground Coffee</td>
                                                        <td>Clear</td>
                                                        <td>500 g</td>
                                                        <td>80</td>
                                                        <td>320.00</td>
                                                        <td>25,600.00</td>
                                                        <td>November 24, 2017</td>
                                                        <td>partial</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PO2565</td>
                                                        <td>F11489</td>
                                                        <td>Farmer's Blend Ground Coffee</td>
                                                        <td>Clear</td>
                                                        <td>500 g</td>
                                                        <td>80</td>
                                                        <td>320.00</td>
                                                        <td>25,600.00</td>
                                                        <td>November 24, 2017</td>
                                                        <td>Delivered</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="deliveries">
                                            <table id="" class="display hover order-column cell-border" cellspacing="0" width="100%">
                                                <thead>
                                                    <th><b class="pull-left">Delivery Receipt No.</b></th>
                                                    <th><b class="pull-left">Sales Invoice No.</b></th>
                                                    <th><b class="pull-left">Purchase Order No.</b></th>
                                                    <th><b class="pull-left">Date Delivered</b></th>
                                                    <th><b class="pull-left">Coffee Blend</b></th>
                                                    <th><b class="pull-left">Bag</b></th>
                                                    <th><b class="pull-left">Size</b></th>
                                                    <th><b class="pull-left">Quantity</b></th>
                                                    <th><b class="pull-left">Unit Price</b></th>
                                                    <th><b class="pull-left">Total Amount</b></th>
                                                    <th><b>Received By</b></th>
                                                    <th>Remarks</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1946</td>
                                                        <td>3246</td>
                                                        <td>PO2562</td>
                                                        <td>03-Nov-16</td>
                                                        <td>Farmers Ground</td>
                                                        <td>Brown</td>
                                                        <td>250g</td>
                                                        <td>175</td>
                                                        <td>160</td>
                                                        <td>Php 28,000.00</td>
                                                        <td>Robin Hod</td>
                                                        <td>Unpaid</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="payment">
                                            <br>
                                            <table id="" class="display hover order-column cell-border" cellspacing="0" width="100%">
                                                <thead>
                                                    <th><b class="pull-left">Collection No.</b></th>
                                                    <th><b class="pull-left">Delivery Receipt No.</b></th>
                                                    <th><b class="pull-left">Mode of Payment</b></th>
                                                    <th><b class="pull-left">Date Paid</b></th>
                                                    <th><b class="pull-left">Amount</b></th>
                                                    <th><b class="pull-left">Gross Amount</b></th>
                                                    <th><b class="pull-left">Withheld</b></th>
                                                    <th><b class="pull-left">Remarks</b></th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>CR0502</td>
                                                        <td>DR0502</td>
                                                        <td>Bank Deposit</td>
                                                        <td>11/02/2017</td>
                                                        <td>48,000.00</td>
                                                        <td>50,000.00</td>
                                                        <td>2,000.00</td>
                                                        <td>Tax Withheld</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CR0503</td>
                                                        <td>DR0503</td>
                                                        <td>Cheque</td>
                                                        <td>Pending</td>
                                                        <td>50,000.00</td>
                                                        <td>50,000.00</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--modal for edit client's info-->
                    <div class="modal fade" id="editinfo" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="panel-title" id="contactLabel"><center>Edit Clients Info</center></h4>
                                </div>
                                <form action="#" method="post" accept-charset="utf-8">
                                    <div class="modal-body" style="padding: 5px;">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                                <input class="form-control" name="client" placeholder="Company Name" type="text" required />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                                <input class="form-control" name="firstname" placeholder="Firstname" type="text" required autofocus />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                                <input class="form-control" name="lastname" placeholder="Lastname" type="text" required />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                                <input class="form-control" name="position" placeholder="Position" type="text" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                                <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                                <input class="form-control" name="TelNo" placeholder="Tel. No." type="text" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                                <input class="form-control" name="type" placeholder="Client Type" type="text" required />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <textarea style="resize:vertical;" class="form-control" placeholder="Address" rows="3" name="address" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer" align="center">
                                        <input type="submit" class="btn btn-success" value="Add" />
                                        <input type="reset" class="btn btn-warning" value="Clear" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--modal for add purchase-->
                    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add New Purchase Order</h4>
                                </div>
                                <form action="#" method="post" accept-charset="utf-8">
                                    <div class="modal-body" style="padding: 5px;">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                                <h3><b>The Legend Villas</b></h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-offset-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control">Item Code :</label>
                                                    <div class="col-md-4">
                                                        <p><b>I0001</b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control">Coffee Blend :</label>
                                                    <div class="col-md-7">
                                                        <p><b>Farmer's Blend Coffee</b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control">Bag :</label>
                                                    <div class="col-md-5">
                                                        <p><b>Clear</b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control">Size :</label>
                                                    <div class="col-md-5">
                                                        <p><b>500g</b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control">Unit Price :</label>
                                                    <div class="col-md-6">
                                                        <p><b>Php 320.00</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Purchase Order no. :</label>
                                                        <div class="col-md-4">
                                                            <input id="" name="name" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Date of Purchase :</label>
                                                        <div class="col-md-4">
                                                            <input id="" name="name" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Quantity :</label>
                                                        <div class="col-md-4">
                                                            <input type="number" placeholder="80" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-">
                                            <p>
                                                <center><a class="btn btn-primary" data-toggle="collapse" href="#collapseBlend" aria-expanded="false" aria-controls="collapseExample">Add New Blend</a></center>
                                            </p>
                                            <div class="collapse" id="collapseBlend">
                                                <div class="card-block">
                                                    <form action="#" method="post" accept-charset="utf-8">
                                                        <div class="modal-body" style="padding: 5px;">
                                                            <div class="row">
                                                                <div class="form-conttrol label-floating">
                                                                    <div class="col-md-4">
                                                                        <label> Coffee Blend:</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Type of Bag:</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Size:</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Qty:</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label>Add More:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <input type="hidden" name="count" value="1" />
                                                                <div class="control-group " id="fields">
                                                                    <div class="controls" id="profs">
                                                                        <form class="input-append label-floating">
                                                                            <div id="field">
                                                                                <div class="input" id="field1">
                                                                                    <div class="col-md-4">
                                                                                        <select class="form-control" name="coffee">
                                                                                            <option value="">Guatemala Rainforest</option>
                                                                                            <option value="">Cordillera Sunrise</option>
                                                                                            <option value="">Sumatra Night</option>
                                                                                            <option value="">Espresso</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <select class="form-control" name="coffee">
                                                                                            <option value="clear">Clear</option>
                                                                                            <option value="brown">Brown</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <select class="form-control" name="coffee">
                                                                                            <option value="clear">250g</option>
                                                                                            <option value="brown">500g</option>
                                                                                            <option value="brown">1000g</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <input class="form-control" type="number" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <button id="b1" class="btn btn-success add-more " type="button">+</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        </div>
                                    </div>
                                    <div class="panel-footer" align="right">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save Purchase Order</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--modal for checkbalance-->
                    <div class="modal fade" id="balance" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="panel-title" id="contactLabel"><center>Balance</center> </h4>
                                </div>
                                <br>
                                <br>
                                <form action="#" method="post" accept-charset="utf-8">
                                    <div class="modal-body" style="padding: 5px;">
                                        <p style="font-size:150%;"><span style="display:inline-block; width: 5%;"></span>Total Balance: <b>P50,000</b>
                                            <br> </p>
                                        <p>
                                            <center>
                                                <br>
                                                <div class="card-content table-responsive">
                                                    <table id="mytable" class="table table-bordred table-striped">
                                                        <thead class="text-primary">
                                                            <th><b class="pull-left">Delivery Receipt No.</b></th>
                                                            <th><b class="pull-left">Item Code</b></th>
                                                            <th><b class="pull-left">Date Delivered</b></th>
                                                            <th><b class="pull-left">Amount</b></th>
                                                            <th>
                                                                <input type="checkbox" id="checkall" />
                                                            </th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>2222</td>
                                                                <td>I0001</td>
                                                                <td>Oct. 2,2017</td>
                                                                <td class="text-primary">10,000.00</td>
                                                                <td>
                                                                    <input type="checkbox" class="checkthis" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3475</td>
                                                                <td>I0002</td>
                                                                <td>Nov. 6,2017</td>
                                                                <td class="text-primary">30,000.00</td>
                                                                <td>
                                                                    <input type="checkbox" class="checkthis" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2356</td>
                                                                <td>I0003</td>
                                                                <td>Dec. 2,2017</td>
                                                                <td class="text-primary">10,000.00</td>
                                                                <td>
                                                                    <input type="checkbox" class="checkthis" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a class="btn btn-primary" data-toggle="collapse" href="#collapsePayment" aria-expanded="false" aria-controls="collapseExample" data-background-color="red">Add Payment</a>
                                            </center>
                                        </p>
                                        <div class="collapse" id="collapsePayment">
                                            <div class="card-block">
                                                <form action="#" method="post" accept-charset="utf-8">
                                                    <div class="modal-body" style="padding: 5px;">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 20px;">
                                                                <div class="form-group label-floating">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                    <label for="email">Payment Date:</label>
                                                                                    <input class="form-control" type="date" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                    <label for="email">Collection Receipt No.:</label>
                                                                                    <input class="form-control" type="text" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                    <label>Amount:</label>
                                                                                    <input class="form-control" type="number" name="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                    <label>Remarks:</label>
                                                                                    <input class="form-control" type="text" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 ">
                                                                                <div class="form-group label-floating">
                                                                                    <label>MOD</label>
                                                                                    <select class="form-control nav">
                                                                                        <option value="">Cash on delivery</option>
                                                                                        <option value="">Cash on Delivery</option>
                                                                                        <option value="">Bank Deposit</option>
                                                                                        <option value="cheque">Cheque</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <center>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
 
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                        document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
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
		$('table.display').DataTable({
			"ordering": false
		});


		$('#datePicker')

			.datepicker({
				format: 'mm/dd/yyyy'
			})
			.on('changeDate', function(e) {
				// Revalidate the date field
				$('#eventForm').formValidation('revalidateField', 'date');
			});

	});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#mytable #checkall").click(function() {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function() {
                $(this).prop("checked", true);
            });


        } else {
            $("#mytable input[type=checkbox]").each(function() {
                $(this).prop("checked", false);
            });
        }
    });

    $("[data-toggle=tooltip]").tooltip();
});
</script>
<script type="text/javascript">
$(document).on('change', 'select.nav', function() {
    var $this = this;
    var target = $this.value;
    $('div.select-pane').hide();
    $('div[id="' + target + '"]').show();
})

$(document).on('click', '.series-select', function() {
    var $this = this;
    var txt = $this.text + '<span class="caret"></span>';
    $($this).closest('li.dropdown').find('a.dropdown-toggle').php(txt);


})
</script>
<script type="text/javascript">
$(document).ready(function() {
    var next = 1;
    $(".add-more").click(function(e) {
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<div class="input" id="field' + next + '"><div class="col-md-4"><select class="form-control" name="coffee"><option value="">Guatemala Rainforest</option><option value="">Cordillera Sunrise</option><option value="">Sumatra Night</option><option value="">Espresso</option></select></div><div class="col-md-2"><select class="form-control" name="coffee"><option value="clear">Clear</option><option value="brown">Brown</option></select> </div><div class="col-md-2"><select class="form-control" name="coffee"><option value="clear">250g</option><option value="brown">500g</option> <option value="brown">1000g</option></select> </div><div class="col-md-2"><input class="form-control" name="coffeeType" type="number" required /> </div></div>';
        var newInput = $(newIn);
        var removeBtn = ' <button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source', $(addto).attr('data-source'));
        $("#count").val(next);

        $('.remove-me').click(function(e) {
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length - 1);
            var fieldID = "#field" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });



});
</script>

</html>