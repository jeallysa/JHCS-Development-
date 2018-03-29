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
		
		.select-pane {
        	display: none;
    	}
		
		.no-border{
			border: none !important;
			font-weight: bold;
		}
		.ClientName{
			font-size: 150%;
			font-weight: bold;
			border: none !important;
			
		}
		

		

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar sidebar-color" data-color="purple" data-image="../assets/img/sidebar-0.pg">
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
                                    <p class="title">Hi, <?php $username = $this->session->userdata('username'); print_r($username); ?></p>
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
                    <div class="card-content table-responsive">
                        <div class="row">
							<div class="col-sm-12">
								<div class="card card-nav-tabs">
									<div class="card-header" data-background-color="purple">
										<div class="nav-tabs-navigation">
											<div class="nav-tabs-wrapper">
												<ul class="nav nav-tabs" data-tabs="tabs" id="myTab">
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
                                                 <table id="fresh-datatables" class="display table-striped table-hover cell-border" cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th><b>Delivery Receipt No.</b></th>
                                                        <th><b>Date of Return</b></th>
                                                        <th><b>Quantity Returned</b></th>
                                                        <th><b>Client</b></th>
                                                        <th><b>Coffee</b></th>
                                                        <th><b>Bag</b></th>
                                                        <th><b>Size</b></th>
                                                        <th><b>Remarks</b></th>
                                                        <th><b>Action</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach($data1['coffee'] as $row)
                                                        {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->client_dr; ?></td>
                                                        <td><?php echo $row->coff_returnDate; ?></td>
                                                        <td><?php echo $row->coff_returnQty; ?></td>
                                                        <td><?php echo $row->client_company; ?></td>
                                                        <td><?php echo $row->blend; ?></td>
                                                        <td><?php echo $row->package_type; ?></td>
                                                        <td><?php echo number_format($row->package_size); ?> g</td>
                                                        <td><?php echo $row->coff_remarks; ?></td>
                                                        <td>
                                                            <button class="btn btn-danger btn-sm viewCoffeeReturns" style="margin-top: 0px" data-toggle="modal" data-target="#resolve_coffee" id="getDetails" data-id="<?php echo $row->client_id; ?>"> Resolve</button>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            </div>
                                            <div class="tab-pane" id="machinereturn">
                                                <!--<div class="card-header btn btn-primary btn-lg" data-background-color="green" data-toggle="modal" data-target="#add_machine_return" data-original-title style="float:right;">
                                                    Add Return
                                                </div>-->
                                                <br>
                                                <br>
                                                <table id="fresh-datatables" class="display table-striped table-hover cell-border" cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th><b>Serial No.</b></th>
                                                        <th><b>Date Returned</b></th>
                                                        <th><b>Quantity Returned</b></th>
                                                        <th><b>Client</b></th>
                                                        <th><b>Machine</b></th>
                                                        <th><b>Remarks</b></th>
                                                        <th><b>Actions</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach($data2['machine'] as $row)
                                                        {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->mach_serial; ?></td>
                                                        <td><?php echo $row->mach_returnDate; ?></td>
                                                        <td><?php echo $row->mach_returnQty; ?></td>
                                                        <td><?php echo $row->client_company; ?></td>
                                                        <td><?php echo $row->brewer; ?></td>
                                                        <td><?php echo $row->mach_remarks; ?></td>
                                                        <td>
                                                            <button class="btn btn-danger btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#resolve_machine" id="getMachineDetails" data-id="<?php echo $row->client_id; ?>">Resolve</button>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
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
                                                                <th><b class="pull-left">Delivery Date</b></th>
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
                                                                <?php
                                                                    foreach($data3['resolved_coffee'] as $row)
                                                                    {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row->client_coffReturnID; ?></td>
                                                                    <td><?php echo $row->client_dr; ?></td>
                                                                    <td><?php echo $row->coff_returnDate; ?></td>
                                                                    <td>--</td>
                                                                    <td>--</td>
                                                                    <td>--</td>
                                                                    <td><?php echo $row->coff_returnQty; ?></td>
                                                                    <td>--</td>
                                                                    <td>--</td>
                                                                    <td><?php echo $row->client_receive; ?></td>
                                                                    <td><?php echo $row->coff_returnAction; ?></td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="tab-pane fade" id="myTable2">
                                                        <table id="myTable2" class="display hover order-column cell-border" cellspacing="0" width="100%">
                                                            <thead>
                                                               <th><b>Client Return No.</b></th>
                                                                <th><b>Delivery Date</b></th>
                                                                <th><b>Quantity Delivered</b></th>
                                                                <th><b>Client</b></th>
                                                                <th><b>Machine</b></th>
                                                                <th><b>Remarks</b></th>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    foreach($data4['resolved_machine'] as $row)
                                                                    {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row->client_machReturnID; ?> </td>
                                                                    <td><?php echo $row->date; ?> </td>
                                                                    <td><?php echo $row->mach_qty; ?> </td>
                                                                    <td><?php echo $row->client_company; ?> </td>
                                                                    <td><?php echo $row->brewer; ?> </td>
                                                                    <td><?php echo $row->status; ?> </td>
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
                        </div>
                    </div>
                </div>
            </div>
		<!--modal for coffee returns-->
			 <div class="modal fade displaycontent" id="resolve_coffee" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
				 <div class="modal-dialog modal-md">
					 <div class="panel panel-primary">
									<div class="panel-heading">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="panel-title" id="contactLabel"><center>Resolve Coffee Returns</center></h4>
									</div>
									
										<div class="modal-body" style="padding: 10px;">

											<?php echo form_open('SalesReturns/resolveReturns', array('method'=>'POST')); ?>
                                        <div class="row">
                                            <div class="col-lg-7">
												
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Coffee Blend :</label>
														<div class="col-md-7" >

															<p><b> <input name="blendName" class="no-border" type="disabled"  readonly></b></p>
													
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Size :</label>
														<div class="col-md-5">
															<p><b><input name="size" class="no-border" type="disabled"  readonly></b></p>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Bag :</label>
														<div class="col-md-6">
															<p><b><input name="bagType" class="no-border" type="disabled"  readonly></b></p>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Quantity :</label>
														<div class="col-md-6">
															<p><b><input name="quantity" id="Originalquantity" class="no-border" type="disabled"  readonly></b></p>
														</div>
													</div>
												</div>
												
												
													
												
                                            </div>
                                        </div>
											
										
											
                                        <hr>
											
											<input type="hidden" name="deliveryID" readonly />
											<input type="hidden" name="PO_ID" readonly />
											<input type="hidden" name="client_id" readonly />
											<input type="hidden" name="SINo" readonly />
											<input type="hidden" name="RID" readonly />
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Delivery Receipt No :</label>
                                                    <div class="col-md-6">
														<?php echo form_input(['name'=>'DRReturns','id'=>'deliveryReceipt', 'class'=>'form-control','type'=>'text', 'maxlength'=>'5','value'=>'dr']); ?>
                                                    </div>
                                                </div>
												
                                            </div>
											
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-5 control">Delivery Date:</label>
                                                    <div class="col-md-7">
                                                        <input class="no-border" name="delivery_date" placeholder="Date" type="date" value="<?php echo date("Y-m-d");?>" data-validate="required" message="A Date of Delivery is recquired! min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d',strtotime(date('Y-m-d').'+1 days'))?>"" required />
														
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
											<div class="row">
                                          
                                            <!--<div class="col-lg-6">

                                                    <div class="form-group">
                                                        <label class="col-md-6 control">QTY Returned:</label>
                                                        <div class="col-md-6">
                                                            <input id="deliveredCoffee" class="form-control" type="text" name="quantity_returned">
                                                        </div>
                                                    </div>
                                            </div>-->
											</div>
										<div class="row">
                                            <div class="col-lg-9">
                                                <div class="form-group">
                                                    <label class="col-md-3 control">Receiver :</label>
                                                    <div class="col-md-8">
                                                        <!--<input id="" name="receiver" type="text" class="form-control">-->
														<?php echo form_input(['name'=>'receiver','id'=>'receiver', 'class'=>'form-control','type'=>'text']); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Delivery status:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control nav" name="delivery_status">
															<option value="">Choose Delivery Status</option>
                                                            <option value="full_delivery">Full Deivery</option>
                                                            <option value="partial_delivery">Partial Delivery</option>
                                                        </select>
														
                                                    </div>
                                                </div>
                                            </div>-->
										</div>
											
                                        
										<div class="row">
											<div class="col-lg-9">
                                                <div class="form-group">
                                                    <label class="col-md-3 control">Remarks :</label>
                                                    <div class="col-md-8">
                                                        <!--<input id="" name="coffee_returns_remarks" type="text" class="form-control">-->
														<?php echo form_input(['name'=>'remarksReturns','id'=>'remarksReturns', 'class'=>'form-control','type'=>'text']); ?>
														
                                                    </div>
                                                </div>
                                            </div>
										</div><br>
										<div class="modal-footer">
											<!--<button type="submit" class="btn btn-primary" name="submit">Save changes</button>-->
											<?php echo form_submit(['name'=>'ResolveReturn', 'value'=>'Resolve','class'=>'btn btn-primary']) ?>
											
										</div>
									<?php echo form_close(); ?>
						</div>
						 
					</div>
				 </div></div>
				

				
		<!--modal for machine returns-->
				<div class="modal fade" id="resolve_machine" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
							<div class="modal-dialog modal-md">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="panel-title" id="contactLabel"><center>Resolve Machine Returns</center></h4>
									</div>
									<?php echo form_open('SalesReturns/resolveMachines', array('method'=>'POST')); ?>
										<div class="modal-body" style="padding: 5px;">
                                        <div class="row">
											<br><br>
											<input type="hidden" name="mach_id" readonly />
											<input  type="hidden" name="client_id" readonly />
											<input  type="hidden" name="MRID" readonly />
											<input  type="hidden" name="serial" readonly />
											<input  type="hidden" name="qty" readonly />
                                            <div class="col-lg-7">
												<div class="row">
													<label class="col-md-5 control">Client :</label>
													<div class="col-md-7">
													<input class="ClientName" type="text" name="company" readonly />
													</div>
												</div>
												
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Machine :</label>
														<div class="col-md-7">
															<input class="no-border" type="text" name="brewer" readonly />
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Brewer Type :</label>
														<div class="col-md-5">
															<input class="no-border" type="text" name="type" readonly />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Unit Price :</label>
														<div class="col-md-6">
															<input class="no-border" type="text" name="uprice" readonly />
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Quantity :</label>
														<div class="col-md-6">
															<input class="no-border" type="text" name="qty" readonly />
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Delivery Date:</label>
                                                    <div class="col-md-6">
                                                        <input class="no-border" name="delivery_date" placeholder="Date" type="date" value="<?php echo date("Y-m-d");?>" data-validate="required" message="A Date of Delivery is recquired! min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d',strtotime(date('Y-m-d').'+1 days'))?>"" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-success">Resolve Machine Return</button>
										</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>

			
        </div>
	</div>

</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
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
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function() {
     
    $('table.display').DataTable( {		
    } );
});
	
/*	difference();
	$("#Originalquantity, #deliveredCoffee").on("keydown keyup", function() {
		 difference();
    });
	});

	function difference() {
            var num1 = document.getElementById('Originalquantity').value;
            var num2 = document.getElementById('deliveredCoffee').value;
			var result = parseInt(num1) - parseInt(num2);
            if (!isNaN(result)) {
				document.getElementById('subt').value = result;
            }
        }
	*/
	


</script>
<script>
$(document).ready(function(){  
    $(document).on('click', '#getDetails', function(e){   
        e.preventDefault();
        var id = $(this).data('id');  
  
        jQuery.ajax({
            method: 'GET',
            type: 'ajax',
			dataType: 'json',
            url: '<?=base_url()?>SalesReturns/getDetails/' + id ,			
			success: function(data)
				{
					$('[name="PO_ID"]').val(data.contractPO_id);
					$('[name="client_id"]').val(data.client_id);
					$('[name="blendName"]').val(data.blend);
					$('[name="size"]').val(data.package_size);
					$('[name="quantity"]').val(data.coff_returnQty);
					$('[name="bagType"]').val(data.package_type);
					/*$('[name="DRReturns"]').val(data.client_dr);*/
					$('[name="deliveryID"]').val(data.client_deliveryID);
					$('[name="SINo"]').val(data.client_invoice);
					$('[name="RID"]').val(data.client_coffReturnID);
					$('#resolve_coffee').modal('show');

				},
			error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error get data from ajax');
				}         
                });        
    });   
});

</script>
<script>
$(document).ready(function(){  
    $(document).on('click', '#getMachineDetails', function(e){   
        e.preventDefault();
        var id = $(this).data('id');   
  
        jQuery.ajax({
            method: 'GET',
            type: 'ajax',
			dataType: 'json',
            url: '<?=base_url()?>SalesReturns/getMachineDetails/' + id ,			
			success: function(data)
				{
					$('[name="company"]').val(data.client_company);
					$('[name="brewer"]').val(data.brewer);
					$('[name="type"]').val(data.brewer_type);
					$('[name="uprice"]').val(data.unitPrice);
					$('[name="qty"]').val(data.mach_returnQty);
					$('[name="mach_id"]').val(data.mach_id);
					$('[name="client_id"]').val(data.client_id);
					$('[name="MRID"]').val(data.client_machReturnID);
					$('[name="serial"]').val(data.mach_serial);
					/*$('#resolve_machine').modal('show');*/


				},
			error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error get data from ajax');
				}         
                });        
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

</html>