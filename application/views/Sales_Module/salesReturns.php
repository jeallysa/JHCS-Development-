<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Walk-in Clients</title>
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
			font-size: 120%;
		}
		.table tbody, tbody td{
			text-align: center;
		}
		.navbar-default { 
			text-align: center !important;
			
		}
		.navbar-default > li.active > a, .navbar-default > li.active > a:focus, .navbar-default > li.active > a:hover {
			border-top: 1px solid #CC99FF !important;
			border-right: 1px solid #CC99FF !important;
			border-left: 1px solid #CC99FF !important;
			border-bottom: transparent !important;
			background-color: #CC99FF !important;
			color: white !important;
		}
		.navbar-default > li.active > a {
			color: white!important; 
			float: none !important;
			display: inline-block!important;
		}
		.navbar-default > li > a, .navbar-default > li > a:hover {
			border: none;
			color: #CC99FF !important; 
			background: transparent; 
		}
		.navbar-default > li > a::after {
			content: "";
			background: transparent; 
			height: 2px; 
			position: absolute; 
			width: 100%; 
			left: 0px;
			bottom: -1px;
			transition: all 250ms ease 0s;
			transform: scale(0); 
			color: white;
		}
		.navbar-default > li.active > a::after, .navbar-default > li:hover > a::after {
			transform: scale(1); 
		}
		.tab-nav > li > a::after {
			background: #21527d none repeat scroll 0% 0%; color: #fff;
		}
		.tab-pane { 
			padding: 15px 0;
		}
		.tab-color{	
			padding:20px;
			border-top: 3px solid #CC99FF;
			border-left: 2px solid #CC99FF;
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
                    <li class="active">
                        <a href="<?php echo base_url(); ?>salesReturns">
                            <i class="material-icons">assignment_return</i>
                            <p>Returns</p>
                        </a>
                    </li>
                    <li >
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
                                <div class="card-content table-responsive">
                                    <div class="row">
										<div class="col-sm-12">
											<div class="card card-nav-tabs">
												<div class="card-header" data-background-color="purple">
													<div class="nav-tabs-navigation">
														<div class="nav-tabs-wrapper">
															<ul class="nav nav-tabs" data-tabs="tabs">
																<li class="active">
																	<a href="#coffeereturns" data-toggle="tab">
																		<i class="material-icons">local_cafe</i> Coffee Returns
																		<div class="ripple-container"></div>
																	</a>
																</li>
																<li class="">
																	<a href="#machinereturn" data-toggle="tab">
																		<i class="material-icons">gradient</i> Machine Returns
																		<div class="ripple-container"></div>
																	</a>
																</li>
																<li class="">
																	<a href="#deliveries" data-toggle="tab">
																		<i class="material-icons">assignment_turned_in</i> Resolved
																		<div class="ripple-container"></div>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="card-content">
													<div class="tab-content">
														<div class="tab-pane active" id="coffeereturns">
															<div class="card-header btn btn-primary btn-lg" data-background-color="green" data-toggle="modal" data-target="#add_coffee_return" data-original-title style="float:right;">
																Add Return
															</div>
															<br>
															<br>
															 <table id="fresh-datatables" class="display table-striped table-hover cell-border" cellspacing="0" width="100%" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th><b>Client Return No.</b></th>
																	<th><b>Delivery Receipt No.</b></th>
                                                                    <th><b>Date of Return</b></th>
                                                                    <th><b>Quantity Returned</b></th>
                                                                    <th><b>Client</b></th>
                                                                    <th><b>Coffee</b></th>
                                                                    <th><b>Bag</b></th>
                                                                    <th><b>Grams</b></th>
                                                                    <th><b>Remarks</b></th>
                                                                    <th><b>Actions</b></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>00001</td>
																	<td>DR0123</td>
                                                                    <td>October 1, 2017</td>
																	<td>3</td>
                                                                    <td>Client 1</td>
                                                                    <td>Sumatra Night</td>
                                                                    <td>Clear Bag</td>
                                                                    <td>250 g</td>
                                                                    
                                                                    <td>Incorrect Blend</td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#resolve_coffee">Resolve</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>00002</td>
																	<td>DR0124</td>
                                                                    <td>October 3, 2017</td>
																	<td>2</td>
                                                                    <td>Client 2</td>
                                                                    <td>Guatemala Rainforest</td>
                                                                    <td>Brown Bag</td>
                                                                    <td>500 g</td>
                                                                    
                                                                    <td>Incorrect Blend</td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#resolve_coffee">Resolve</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>00003</td>
																	<td>DR0125</td>
                                                                    <td>October 5, 2017</td>
																	<td>1</td>
                                                                    <td>Client 3</td>
                                                                    <td>Cordillera Sunrise</td>
                                                                    <td>Clear Bag</td>
                                                                    <td>1000 g</td>
                                                                    
                                                                    <td>Incorrect Blend</td>
                                                                    <td>
                                                                        <button class="btn btn-danger  btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#resolve_coffee">Resolve</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
														</div>
														<div class="tab-pane" id="machinereturn">
															<div class="card-header btn btn-primary btn-lg" data-background-color="green" data-toggle="modal" data-target="#add_machine_return" data-original-title style="float:right;">
																Add Return
															</div>
															<br>
															<br>
															 <table id="fresh-datatables" class="display table-striped table-hover cell-border" cellspacing="0" width="100%" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th><b>Client Return No.</b></th>
																	<th><b>Delivery Receipt No.</b></th>
                                                                    <th><b>Date of Return</b></th>
                                                                    <th><b>Quantity Returned</b></th>
                                                                    <th><b>Client</b></th>
                                                                    <th><b>Machine</b></th>
                                                                    <th><b>Remarks</b></th>
                                                                    <th><b>Actions</b></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>00001</td>
																	<td>DR0123</td>
                                                                    <td>October 1, 2017</td>
																	<td>1</td>
                                                                    <td>Client 10</td>
                                                                    <td>Saeco</td>
                                                                    <td>Damaged</td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#resolve_machine">Resolve</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>00002</td>
																	<td>DR0124</td>
                                                                    <td>October 3, 2017</td>
																	<td>2</td>
                                                                    <td>Client 20</td>
                                                                    <td>Machine B</td>                                                                  
                                                                    <td>Damaged</td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#resolve_machine">Resolve</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
														</div>
														<div class="tab-pane" id="deliveries">
															<ul class="nav nav-tabs navbar-default justify-content-center" id="deliveries" >
																<li class="active"><a href="#myTable1" data-toggle="tab" >Coffee</a></li>
																<li><a href="#myTable2" data-toggle="tab">Machine</a></li>
															</ul>
															<div class="tab-content tab-color">
																<div class="tab-pane active" id="myTable1">
																	<table id="myTable1" class="display hover order-column cell-border" cellspacing="0" width="100%">
																		<thead>
																			<th><b>Client Return No.</b></th>
																			<th><b class="pull-left">Delivery Receipt No.</b></th>
																			<th><b class="pull-left">Date Delivered</b></th>
																			<th><b class="pull-left">Coffee</b></th>
																			<th><b class="pull-left">Bag</b></th>
																			<th><b class="pull-left">Size</b></th>
																			<th><b class="pull-left">Quantity Delivered</b></th>
																			<th><b class="pull-left">Unit Price</b></th>
																			<th><b class="pull-left">Total Amount</b></th>
																			<th><b>Receiver</b></th>
																			<th>Remarks</th>
																		</thead>
																		<tbody>
																			<tr>
																				<td>1946</td>
																				<td>3246</td>
																				<td>September 31, 2017</td>
																				<td>Farmers Ground</td>
																				<td>Brown</td>
																				<td>250g</td>
																				<td>175</td>
																				<td>160</td>
																				<td>Php 28,000.00</td>
																				<td>Robin Hod</td>
																				<th></th>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="tab-pane fade" id="myTable2">
																	<table id="myTable2" class="display hover order-column cell-border" cellspacing="0" width="100%">
																		<thead>
																		   <th><b>Client Return No.</b></th>
																			<th><b>Delivery Receipt No.</b></th>
																			<th><b>Date Delivered</b></th>
																			<th><b>Quantity Delivered</b></th>
																			<th><b>Client</b></th>
																			<th><b>Machine</b></th>
																			<th><b>Receiver</b></th>
																			<th><b>Remarks</b></th>
																		</thead>
																		<tbody>
																			<tr>
																				<td>1946</td>
																				<td>DR256</td>
																				<td>September 31, 2017</td>
																				<td>1</td>
																				<td>Mike Aid</td>
																				<td>Machine X</td>
																				<td>Gen Lee</td>
																				<th></th>
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
		<!--modal for coffee returns-->
			 <div class="modal fade" id="resolve_coffee" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
							<div class="modal-dialog modal-md">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="panel-title" id="contactLabel"><center>Refolve Coffee Returns</center></h4>
									</div>
									<form action="#" method="post" accept-charset="utf-8">
										<div class="modal-body" style="padding: 5px;">
                                        <div class="row">
                                            <div class="col-lg-7">
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Coffee Blend :</label>
														<div class="col-md-7">
															<p><b>SUMATRA NIGHT</b></p>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Size :</label>
														<div class="col-md-5">
															<p><b>500g</b></p>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Bag :</label>
														<div class="col-md-6">
															<p><b>Clear</b></p>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Quantity :</label>
														<div class="col-md-6">
															<p><b>3</b></p>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Delivery Receipt No :</label>
                                                    <div class="col-md-6">
                                                        <p class="form-control" contenteditable="true">DR0123</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Date of Delivery :</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="coffeeType" placeholder="Date" type="date" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-5 control">Received by :</label>
                                                    <div class="col-md-7">
                                                        <input id="" name="name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
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
                                                <div class="select-pane " id="delivery">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Quantity Delivered:</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text" name="" placeholder="2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 ">
                                                <div class="select-pane" id="delivery">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Remaining Quantity: </label>
                                                        <div class="col-md-5">
                                                            <p><b>1</b></p>
                                                        </div>
                                                    </div>
                                                </div>
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
		<!--modal for machine returns-->
				<div class="modal fade" id="resolve_machine" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
							<div class="modal-dialog modal-md">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="panel-title" id="contactLabel"><center>Resolve Machine Returns</center></h4>
									</div>
									<form action="#" method="post" accept-charset="utf-8">
										<div class="modal-body" style="padding: 5px;">
                                        <div class="row">
                                            <div class="col-lg-7">
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Coffee Blend :</label>
														<div class="col-md-7">
															<p><b>SUMATRA NIGHT</b></p>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Size :</label>
														<div class="col-md-5">
															<p><b>500g</b></p>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Bag :</label>
														<div class="col-md-6">
															<p><b>Clear</b></p>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Quantity :</label>
														<div class="col-md-6">
															<p><b>3</b></p>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Delivery Receipt No :</label>
                                                    <div class="col-md-6">
                                                        <p class="form-control" contenteditable="true">DR0123</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Date of Delivery :</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="coffeeType" placeholder="Date" type="date" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-5 control">Received by :</label>
                                                    <div class="col-md-7">
                                                        <input id="" name="name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
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
                                                <div class="select-pane " id="delivery">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Quantity Delivered:</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text" name="" placeholder="2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 ">
                                                <div class="select-pane" id="delivery">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Remaining Quantity: </label>
                                                        <div class="col-md-5">
                                                            <p><b>1</b></p>
                                                        </div>
                                                    </div>
                                                </div>
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
		<!--modal for add coffee returns-->
				<div class="modal fade" id="add_coffee_return" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
									<div class="modal-dialog modal-md">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="panel-title" id="contactLabel"><center>Add Coffee Returns</center></h4>
											</div>
											<form action="#" method="post" accept-charset="utf-8">
												<div class="modal-body" style="padding: 5px;">
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-6 control">Date of Return :</label>
															<div class="col-md-6">
																<input class="form-control" name="coffeeType" placeholder="Date" type="date" required />
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-5 control">Quantity Returned :</label>
															<div class="col-md-6">
																<input class="form-control" name="coffeeType" type="text" required />
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-4 control">Client Name :</label>
															<div class="col-md-7">
																<input class="form-control" name="coffeeType" type="text" required />
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-4 control">Delivery Receipt No. :</label>
															<div class="col-md-7">
																<p class="form-control" contenteditable="true">DR0123</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-4 control">Coffee :</label>
															<div class="col-md-7">
																<input id="" name="name" type="text" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-3 control">Bag :</label>
															<div class="col-md-6">
																<input id="" name="name" type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
															<div class="form-group">
																<label class="col-md-4 control">Size:</label>
																<div class="col-md-6">
																	<input class="form-control" type="text" name="">
																</div>
															</div>
													</div>
													<div class="col-lg-6">
															<div class="form-group">
																<label class="col-md-6 control">Remarks: </label>
																<div class="col-md-12">
																	<input class="form-control" type="text" name="">
																</div>
															</div>
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
			<!--modal for add machine returns-->
						<div class="modal fade" id="add_machine_return" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
									<div class="modal-dialog modal-md">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="panel-title" id="contactLabel"><center>Add Machine Returns</center></h4>
											</div>
											<form action="#" method="post" accept-charset="utf-8">
												<div class="modal-body" style="padding: 5px;">
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-6 control">Date of Return :</label>
															<div class="col-md-6">
																<input class="form-control" name="coffeeType" placeholder="Date" type="date" required />
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-5 control">Quantity Returned :</label>
															<div class="col-md-6">
																<input class="form-control" name="coffeeType" type="text" required />
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-4 control">Client Name :</label>
															<div class="col-md-7">
																<input class="form-control" name="coffeeType" type="text" required />
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-4 control">Delivery Receipt No. :</label>
															<div class="col-md-7">
																<p class="form-control" contenteditable="true">DR0123</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-md-4 control">Machine :</label>
															<div class="col-md-7">
																<input id="" name="name" type="text" class="form-control" required />
															</div>
														</div>
													</div>

													<div class="col-lg-6">
															<div class="form-group">
																<label class="col-md-6 control">Remarks: </label>
																<div class="col-md-12">
																	<input class="form-control" type="text" name="">
																</div>
															</div>
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
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/datepicker.js" type="text/javascript"></script>
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
		ordering: false
    } );


	$('table tbody tr  td').on('click', function() {
		$("#myModal").modal("show");
		$("#txtfname").val($(this).closest('tr').children()[0].textContent);
		$("#txtlname").val($(this).closest('tr').children()[1].textContent);
	});
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
</script>

</html>