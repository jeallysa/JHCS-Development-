<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sell Products</title>
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

    h3 {
        text-align: center !important;
    }

    .table thead,
    thead th {
        text-align: center;
        font-size: 140%;
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
                            <p>Dashboard<i class="material-icons pull-right select-pane" style="color:red">error</i></p>
                        </a>
                    </li>
                    <li class="active">
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
					<div class="row">
							<div class="col-sm-12">
								<div class="card card-nav-tabs">
									<div class="card-header" data-background-color="purple">
                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="active"><a data-toggle="tab" href="#sell">Coffee</a></li>
                                            <li><a data-toggle="tab" href="#machine">Machine</a></li>
                                        </ul>
									</div>
									<div class="card-content">
										<div class="tab-content">
											<div class="tab-pane in active" id="sell">
                                                <a href="<?php echo base_url(); ?>salesSellProduct/salesWalkin" class="btn btn-success btn-md" style="float: right">Add Sales</a>
                                                <?php if(isset($_SESSION['success'])){ ?>
                                                  <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
                                                    <?php
                                                  } ?>
                                                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
												 <table id="cosales" class="display table-striped table-hover cell-border" cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th><b>Item Code</b></th>
                                                        <th><b>Purchase Date</b></th>
														<th><b>Coffee</b></th>
														<th><b>Bag</b></th>
														<th><b>Size</b></th>
														<th><b>Qty</b></th>
														<th><b>Price</b></th>
                                                        <th><b>Total Amount</b></th>
                                                        <th><b>Returns Quantity</b></th>
                                                        <th><b>Action</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        foreach ($data1['sellCoffee'] as $row) {
                                                     ?>
                                                     <tr>
                                                         <td><?php echo $row->blend_id; ?></td>
                                                         <td><?php echo $row->walkin_date; ?></td>
                                                         <td><?php echo $row->blend; ?></td>
                                                         <td><?php echo $row->package_type; ?></td>
                                                         <td><?php echo number_format($row->package_size); ?> g</td>
                                                         <td><?php echo $row->walkin_qty; ?></td>
                                                         <td>Php <?php echo number_format($row->blend_price,2); ?></td>
                                                         <td><?php 
                                                                $price = $row->blend_price;
                                                                $qty = $row->walkin_qty;
                                                                echo 'Php '.number_format($price * $qty,2);
                                                             ?>
                                                        </td>
                                                         <td><?php echo $row->walkin_returns; ?></td>
                                                         <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#returnblend<?php echo $row->walkin_id; ?>">Return</button>
                                                         </td>
                <!-- modal walkin returns -->
                <div class="modal fade" id="returnblend<?php echo $row->walkin_id; ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Return Coffee Blend</center> </h4>
                            </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="card-block">
                                     <form action="<?php echo base_url(); ?>salesSellProduct/return_blend" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                                            <h3 class="pull-center"><?php echo $row->blend; ?></h3>
                                            
                                        <div class="row">
                                            <div class="col-lg-12" style="padding-bottom: 20px;">
                                                <div class="form-group label-floating">
                                                    <div class="form-group">

                                                    <div class="row">
                                                        <div class="col-lg-">
                                                             <div class="form-group">
                                                                <label class="col-md-4 control">Purchase Date: </label>
                                                                <div class="col-md-6">
                                                                    <p><b><?php echo $row->walkin_date;
                                                                    ?></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control">Packaging: </label>
                                                                <div class="col-md-6">
                                                                    <p><b><?php echo $row->package_type.'/ '.number_format($row->package_size).' g';
                                                                    ?></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control">Quantity :</label>
                                                                <div class="col-md-6">
                                                                    <p><b><?php echo $row->walkin_qty; ?></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control">Price: </label>
                                                                <div class="col-md-3">
                                                                    <p><b>Php <?php echo number_format($price,2); ?></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control">Total Amount: </label>
                                                                <div class="col-md-3">
                                                                    <p><b><?php echo 'Php' .number_format($price * $qty, 2) ?></b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label class="col-md-6 control">Date Returned:</label>
                                                                <input class="form-control col-md-12" type="date" name="date_blend_returned" required="">
                                                                <input type="hidden" name="blend_id" value="<?php echo $row->blend_id; ?>" required>
                                                                <input type="hidden" name="walkin_id" value="<?php echo $row->walkin_id; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label class="col-md-6 control">Quantity Returned:</label>
                                                                <input class="form-control col-md-12" type="number" name="blend_returned" min="1" max="<?php
                                                                    $retblend = $row->walkin_returns;
                                                                    $soldblend = $row->walkin_qty;
                                                                    $ret_mach = $soldblend - $retblend;
                                                                    echo $ret_mach;
                                                                 ?>" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-md-6 control">Remarks:</label>
                                                                <input class="form-control col-md-3" type="text" name="return_blend_remarks" required="">
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
                                    </form>
                                </div>
                            </div>
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
											<div class="tab-pane" id="machine">
                                                <a href="<?php echo base_url(); ?>salesSellProduct/salesMachine" class="btn btn-success btn-md" style="float: right">Add Sales</a>
												<table id="masales" class="display table-striped table-hover cell-border" cellspacing="0" width="100%">
													<thead>
                                                        <th><b>Item Code</b></th>
														<th><b>Serial No.</b></th>
														<th><b>Purchase Date</b></th>
														<th><b>Client</b></th>
														<th><b>Machine</b></th>
														<th><b>Sold Quantity</b></th>
														<th><b>Unit Price</b></th>
                                                        <th><b>Total Amount</b></th>
														<th><b>Returns Quantity</b></th>
                                                        <th><b>Action</b></th>
													</thead>
													<tbody>
                                                    <?php 
                                                        foreach ($data2['sellMachine'] as $row) {
                                                     ?>
                                                     <tr>
                                                         <td><?php echo $row->mach_id; ?></td>
                                                         <td><?php echo $row->mach_serial; ?></td>
                                                         <td><?php echo $row->date; ?></td>
                                                         <td><?php echo $row->client_company; ?></td>
                                                         <td><?php echo $row->brewer; ?></td>
                                                         <td><?php echo $row->mach_qty; ?></td>
                                                         <td>Php <?php echo number_format($row->mach_price,2); ?></td>
                                                         <td><?php 
                                                                $price = $row->mach_price;
                                                                $qty = $row->mach_qty;
                                                                echo 'Php' .number_format($price * $qty, 2);
                                                             ?>
                                                         </td>
                                                         <td><?php echo $row->mach_returnQty; ?></td>

                                                         <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#return<?php echo $row->mach_salesID; ?>">Return</button>
                                                         </td>
                <!-- modal machine returns -->
                <div class="modal fade" id="return<?php echo $row->mach_salesID; ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Return Delivered Item/s</center> </h4>
                            </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="card-block">
                                     <form action="<?php echo base_url(); ?>salesSellProduct/return_machine" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                            <h3 class="pull-center"><?php echo $row->client_company; ?></h3>
                                            
                                            <div class="row">
                                                <div class="col-lg-12" style="padding-bottom: 20px;">
                                                    <div class="form-group label-floating">
                                                        <div class="form-group">

                                    <div class="row">
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="col-md-5 control">Date Intalled: </label>
                                                <div class="col-md-7">
                                                    <p><b><?php echo $row->date;
                                                    ?></b></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control">Brewer: </label>
                                                <div class="col-md-5">
                                                    <p><b><?php echo $row->brewer;
                                                    ?></b></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control">Quantity :</label>
                                                <div class="col-md-7">
                                                    <p><b><?php echo $row->mach_qty; ?></b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Machine Price: </label>
                                                    <div class="col-md-3">
                                                        <p><b>Php <?php echo number_format($price,2); ?></b></p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Total Amount: </label>
                                                    <div class="col-md-3">
                                                        <p><b><?php echo 'Php' .number_format($price * $qty, 2) ?></b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Date Returned:</label>
                                                                        <input class="form-control col-md-6" type="date" name="date_returned" required="">
                                                                        <input type="hidden" name="mach_id" value="<?php echo $row->mach_id; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Quantity Returned:</label>
                                                                        <input class="form-control col-md-6" type="number" name="qty_returned" min="1" max="<?php
                                                                            $retqtymach = $row->mach_returnQty;
                                                                            $solmach = $row->mach_qty;
                                                                            $ret_mach = $solmach - $retqtymach;
                                                                            echo $ret_mach;
                                                                         ?>" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
        
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Remarks:</label>
                                                                        <input class="form-control col-md-3" type="text" name="remarks" required="">
                                                                         <input name="serial" type="hidden" class="form-control" value="<?php echo $row->mach_serial; ?>" >
                                                                         <input name="client_id" type="hidden" class="form-control" value="<?php echo $row->client_id; ?>
                                                                         " >
                                                                         <input name="sales_id" type="hidden" class="form-control" value="<?php echo $row->mach_salesID; ?>
                                                                         " >
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
    $('#cosales').DataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#masales').DataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
    });
});
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