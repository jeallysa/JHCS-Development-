<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Deliveries</title>
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
    <style>
    /*
		td.highlight {
			background-color: whitesmoke !important;
		}
*/

    .table thead,
    thead th {
        text-align: center;
        font-size: 100%;
    }

    .table tbody,
    tbody td {
        text-align: center;
    }
	.select-pane {
        display: none;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <img src="../assets/img/logo.png" alt="image1" width="250px" height="150px">
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
                    <li>
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
                    <li class="active">
                        <a href="<?php echo base_url(); ?>salesDelivery">
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
                                        <a href="<?php echo base_url(); ?>activitylogs">Activity Logs</a>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Transaction:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs" id="myTab">
                                                <li class="active">
                                                    <a href="#purchaseorder" data-toggle="tab">
                                                        <i class="material-icons">assignment_late</i> Pending Deliveries
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#deliveries" data-toggle="tab">
                                                        <i class="material-icons">assignment_turned_in</i> Delivered Items
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#payment" data-toggle="tab">
                                                        <i class="material-icons">assignment_turned_in</i> Paid Items
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
                                            <table id="fresh-datatables" class="display hover order-column cell-border" cellspacing="0" width="100%">
                                                <thead>
                                                    <th><b class="pull-left">Purchase Order No.</b></th>
                                                    <th><b class="pull-left">Client</b></th>
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
                                                    <?php
                                                        foreach($data1['get_delivery_list'] as $row1)
                                                        {
                                                            
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row1->contractPO_id; ?></td>
                                                        <td><?php echo $row1->client_company; ?></td>
                                                        <td><?php echo $row1->blend_id; ?></td>
                                                        <td><?php echo $row1->blend; ?></td>
                                                        <td><?php echo $row1->package_type; ?></td>
                                                        <td><?php echo $row1->package_size; ?> g</td>
                                                        <td><?php echo $row1->contractPO_qty; ?></td>
                                                        <td>Php <?php echo number_format($row1->blend_price,2); ?></td>
                                                        <td><?php 
                                                                $price = $row1->blend_price;
                                                                $qty = $row1->contractPO_qty;
                                                                $amount = $price * $qty;
                                                                echo 'Php '.number_format($amount,2);
                                                             ?>
                                                        </td>
                                                        <td><?php echo $row1->contractPO_date; ?></td>
                                                        <td><?php 
                                                                $id = "<script> document.write(contractPO_id) </script>";
                                                                $dbStat = $row1->delivery_stat; 
                                                                if ($dbStat == 'partial') {
                                                                    echo '<center>
                                                                   <a class="btn btn-info btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#deliver'.$row1->contractPO_id.'">Partial</a>
                                                                </center>';
                                                                }
                                                                elseif  ($dbStat == 'pending'){
                                                                    echo '<center>
                                                                    <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#deliver'.$row1->contractPO_id.'">Pending</a>
                                                                </center>';
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    
                                                    <?php
                                                        }
                                                    ?>
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
                                                    <th><b class="pull-left">Client</b></th>
                                                    <th><b class="pull-left">Coffee Blend</b></th>
                                                    <th><b class="pull-left">Bag</b></th>
                                                    <th><b class="pull-left">Size</b></th>
                                                    <th><b class="pull-left">Quantity</b></th>
                                                    <th><b class="pull-left">Unit Price</b></th>
                                                    <th><b class="pull-left">Total Amount</b></th>
                                                    <th><b>Received By</b></th>
                                                    <th>Remarks</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        foreach($data2['get_delivered'] as $row)
                                                        {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->client_dr; ?></td>
                                                        <td><?php echo $row->client_invoice; ?></td>
                                                        <td><?php echo $row->contractPO_id; ?></td>
                                                        <td><?php echo $row->client_deliverDate; ?></td>
                                                        <td><?php echo $row->client_company; ?></td>
                                                        <td><?php echo $row->blend; ?></td>
                                                        <td><?php echo $row->package_type; ?></td>
                                                        <td><?php echo $row->package_size; ?> g</td>
                                                        <td><?php echo $row->contractPO_qty; ?></td>
                                                        <td>Php <?php echo number_format($row->blend_price,2); ?></td>
                                                        <td><?php 
                                                                $price = $row->blend_price;
                                                                $qty = $row->contractPO_qty;
                                                                $amount = $price * $qty;
                                                                echo 'Php '.number_format($amount,2);
                                                             ?>
                                                        </td>
                                                        <td><?php echo $row->client_receive; ?></td>
                                                        <td><?php 
                                                                $dbStat = $row->payment_remarks; 
                                                                $paid = 'paid';
                                                                $unpaid = 'unpaid';
                                                                if (strcmp($dbStat, $paid) == 0) {
                                                                    echo 'paid';
                                                                } 
                                                                else {
                                                                    echo '<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#drbalance">Unpaid</button>';
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#return_coffee">Return</button>
                                                        </td>
                                                    </tr>
                                                    
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="payment">
                                            <br>
                                            <table id="" class="display hover order-column cell-border" cellspacing="0" width="100%">
                                                <thead>
                                                    <th><b class="pull-left">Collection No.</b></th>
                                                    <th><b class="pull-left">Delivery Receipt No.</b></th>
                                                    <th><b class="pull-left">Client</b></th>
                                                    <th><b class="pull-left">Mode of Payment</b></th>
                                                    <th><b class="pull-left">Date Paid</b></th>
                                                    <th><b class="pull-left">Amount</b></th>
                                                    <th><b class="pull-left">Gross Amount</b></th>
                                                    <th><b class="pull-left">Withheld</b></th>
                                                    <th><b class="pull-left">Remarks</b></th>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        foreach($data3['get_paid'] as $row)
                                                        {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->collection_no; ?></td>
                                                        <td><?php echo $row->client_dr; ?></td>
                                                        <td><?php echo $row->client_company; ?></td>
                                                        <td><?php echo $row->payment_mode; ?></td>
                                                        <td><?php echo $row->paid_date; ?></td>
                                                        <td><?php echo $row->paid_amount; ?></td>
                                                        <td><?php echo $row->client_balance; ?></td>
                                                        <td><?php echo $row->withheld; ?></td>
                                                        <td><?php echo $row->payment_remarks; ?></td>
                                                    </tr>
                                                    <?php 
                                                        }
                                                    ?>
                                                    <tr>
                                                        <td>CR0502</td>
                                                        <td>DR0502</td>
                                                        <td>Trueblends</td>
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
                                                        <td>Volante</td>
                                                        <td>Cheque</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#pendingcheque">Pending</button>
                                                        </td>
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
                </div>
            </div>

            <!--modal for pending delivery-->
            <div class="modal fade" id="deliver<?php echo $row1->contractPO_id;?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><center>Delivery</center></h4>
                        </div>
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div class="row">
                                    <div class="col-lg-7">
                                         <div class="form-group">
                                            <label class="col-md-5 control">Contract PO ID :</label>
                                            <div class="col-md-7">
                                                <p><b><?php echo $row1->contractPO_id;
                                                ?></b></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-5 control">Coffee Blend :</label>
                                            <div class="col-md-7">
                                                <p><b><?php echo $row1->blend;
                                                ?></b></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-5 control">Size :</label>
                                            <div class="col-md-5">
                                                <p><b><?php echo $row1->package_size;
                                                ?> g</b></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-5 control">Quantity :</label>
                                            <div class="col-md-6">
                                                <p><b><?php echo $row1->contractPO_qty; ?></b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="col-md-5 control">Unit Price :</label>
                                                <div class="col-md-7">
                                                    <p><b>Php <?php echo number_format($row1->blend_price,2); ?></b></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control">Total Amount :</label>
                                                <div class="col-md-5">
                                                    <p><b><?php 
                                                                $price = $row1->blend_price;
                                                                $qty = $row1->contractPO_qty;
                                                                $amount = $price * $qty;
                                                                echo 'Php '.number_format($amount,2);
                                                             ?></b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="col-md-6 control">Delivery Receipt No :</label>
                                            <div class="col-md-5">
                                                <input id="" name="name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label class="col-md-6 control">Date of Delivery :</label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="coffeeType" placeholder="Date" type="date" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="col-md-6 control">Sales Invoice No. :</label>
                                            <div class="col-md-5">
                                                <input id="" name="name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label class="col-md-5 control">Received by :</label>
                                            <div class="col-md-7">
                                                <input id="" name="name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label class="col-md-6 control">Delivery status:</label>
                                            <div class="col-md-6">
                                                <select class="form-control nav">
                                                    <option value="">Full Deivery</option>
                                                    <option value="delivery">Partial Delivery</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2"></div>
										<div class="col-lg-8 col-md-8 col-sm-8 ">
											<div class="select-pane" id="delivery">
												<div class="form-group">
													<label class="col-md-6 control">Quantity Delivered:</label>
													<div class="col-md-5">
														<input class="form-control" type="text" name="" placeholder="50">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2"></div>
										<div class="col-lg-8 col-md-8 col-sm-8 ">
											<div class="select-pane" id="delivery">
												<div class="form-group">
													<label class="col-md-6 control">Remaining Quantity: </label>
													<div class="col-md-5">
														<p><b>30</b></p>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            <div class="panel-footer" align="center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- modal of unpaid -->
            <div class="modal fade" id="drbalance" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title" id="contactLabel"><center>Payment</center> </h4>
                        </div>
                        <div class="modal-body" style="padding: 5px;">
                            <div class="card-block">
                                <form action="#" method="post" accept-charset="utf-8">
                                    <div class="modal-body" style="padding: 5px;">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 20px;">
                                                <div class="form-group label-floating">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group label-floating">
                                                                    <label for="email">Date Paid:</label>
                                                                    <input class="form-control" type="date" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label for="email">Collection Receipt No.:</label>
                                                                    <input class="form-control" type="text" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group label-floating">
                                                                    <label>Amount:</label>
                                                                    <input class="form-control" type="number" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="form-group label-floating">
                                                                    <label>Remarks:</label>
                                                                    <input class="form-control" type="text" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group label-floating">
                                                                    <label>MOD:</label>
                                                                    <select class="form-control">
                                                                        <option>Cash on Delivery</option>
                                                                        <option>Bank deposit</option>
                                                                        <option>Cheque</option>
                                                                    </select>
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
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal of pending cheque -->
            <div class="modal fade" id="pendingcheque" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title" id="contactLabel"><center>Clear Cheque</center> </h4>
                        </div>
                        <div class="modal-body" style="padding: 5px;">
                            <div class="card-block">
                                <form action="#" method="post" accept-charset="utf-8">
                                    <div class="modal-body" style="padding: 5px;">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 20px;">
                                                <div class="form-group label-floating">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 offset-3">
                                                                <div class="form-group label-floating">
                                                                    <label for="email">Date Paid:</label>
                                                                    <input class="form-control" type="date" name="">
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
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal coffee returns -->
            <div class="modal fade" id="return_coffee" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title" id="contactLabel"><center>Return Delivered Item/s</center> </h4>
                        </div>
                        <div class="modal-body" style="padding: 5px;">
                            <div class="card-block">
                                <form action="#" method="post" accept-charset="utf-8">
                                    <div class="modal-body" style="padding: 5px;">
                                        <div class="row">
                                            <div class="col-lg-12" style="padding-bottom: 20px;">
                                                <div class="form-group label-floating">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 offset-3">
                                                                <div class="form-group label-floating">
                                                                    <label for="email">Date Returned:</label>
                                                                    <input class="form-control" type="date" name="">
                                                                </div>
                                                                <div class="form-group label-floating">
                                                                    <label for="email">Quantity Returned:</label>
                                                                    <input class="form-control" type="number" name="">
                                                                </div>
                                                                <div class="form-group label-floating">
                                                                    <label for="email">Remarks:</label>
                                                                    <input class="form-control" type="text" name="">
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
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function() {
     
    $('table.display').DataTable( {
        scrollCollapse: true,
        
    } );

    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            $('#eventForm').formValidation('revalidateField', 'date');
        });
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
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
});
</script>

<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('.view_data').click(function(){
            var contractPO_id = $(this).attr("id");
            alert(contractPO_id);
            $('#' + contractPO_id).modal('show');
        });
    });
</script> -->

</html>