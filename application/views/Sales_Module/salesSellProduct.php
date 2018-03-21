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

    .table thead,
    thead th {
        text-align: center;
        font-size: 140%;
    }

    .table tbody,
    tbody td {
        text-align: center;
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
                                                        <th><b>Date</b></th>
														<th><b>Coffee</b></th>
														<th><b>Bag</b></th>
														<th><b>Size</b></th>
														<th><b>Qty</b></th>
														<th><b>Price</b></th>
														<th><b>Total Amount</b></th>
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
                                                         <td><?php echo $row->package_size; ?></td>
                                                         <td><?php echo $row->walkin_qty; ?></td>
                                                         <td>Php <?php echo number_format($row->blend_price,2); ?></td>
                                                         <td><?php 
                                                                $price = $row->blend_price;
                                                                $qty = $row->walkin_qty;
                                                                echo 'Php '.number_format($price * $qty,2);
                                                             ?>
                                                        </td>
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
														<th><b>Date</b></th>
														<th><b>Client</b></th>
														<th><b>Machine</b></th>
														<th><b>Quantity</b></th>
														<th><b>Unit Price</b></th>
														<th><b>Total Amount</b></th>
													</thead>
													<tbody>
                                                    <?php 
                                                        foreach ($data2['sellMachine'] as $row) {
                                                     ?>
                                                     <tr>
                                                         <td><?php echo $row->mach_id; ?></td>
                                                         <td><?php echo $row->date; ?></td>
                                                         <td><?php echo $row->client_company; ?></td>
                                                         <td><?php echo $row->brewer; ?></td>
                                                         <td><?php echo $row->mach_qty; ?></td>
                                                         <td><?php echo $row->mach_price; ?></td>
                                                         <td><?php 
                                                                $price = $row->mach_price;
                                                                $qty = $row->mach_qty;
                                                                echo $price * $qty;
                                                             ?>
                                                         </td>
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