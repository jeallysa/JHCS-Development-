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
					<div class="row">
							<div class="col-sm-12">
								<div class="card card-nav-tabs">
									<div class="card-header" data-background-color="purple">
										<div class="nav-tabs-navigation">
											<div class="nav-tabs-wrapper">
												<ul class="nav nav-tabs" data-tabs="tabs">
													<li class="active">
														<a href="#sell" data-toggle="tab">
															<i class="material-icons">local_cafe</i> Coffee
															<div class="ripple-container"></div>
														</a>
													</li>
													<li class="">
														<a href="#machine" data-toggle="tab">
															<i class="material-icons">gradient</i> Machine
															<div class="ripple-container"></div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-content">
										<div class="tab-content">
											<div class="tab-pane active" id="sell">
                                                <a href="<?php echo base_url(); ?>salesSellProduct/salesWalkin" class="btn btn-success btn-md" style="float: right">Add Sales</a>
												 <table id="" class="display table-striped table-hover cell-border" cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th><b>Item Code</b></th>
                                                        <th><b>Date</b></th>
														<th><b>Client</b></th>
														<th><b>Coffee</b></th>
														<th><b>Bag</b></th>
														<th><b>Size</b></th>
														<th><b>Qty</b></th>
														<th><b>Price</b></th>
														<th><b>Total Amount</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													<tr>
														<td>I0001</td>
                                                        <td>Oct 1, 2017</td>
														<td>Ariel Tide</td>
														<td>Fiesta Blend Ground</td>
														<td>brown</td>
														<td>250 g</td>
														<td>2</td>
														<td>350</td>
														<td>700</td>
													</tr>
													<tr>
														<td>I0002</td>
														<td>Oct 1, 2017</td>
														<td>Jan Lapid</td>
														<td>Guatamela Rainforest</td>
														<td>brown</td>
														<td>500 g</td>
														<td>1</td>
														<td>650</td>
														<td>650</td>
													</tr>
												</tbody>
                                            </table>
											</div>
											<div class="tab-pane" id="machine">
                                                <a href="<?php echo base_url(); ?>salesSellProduct/salesMachine" class="btn btn-success btn-md" style="float: right">Add Sales</a>
												<table id="" class="display table-striped table-hover cell-border" cellspacing="0" width="100%">
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
														<tr>
															<td>I0023</td>
															<td>Oct 31, 2017</td>
															<td>Taylor Swift</td>
															<td>Saeco</td>
															<td>1</td>
															<td>5, 000</td>
															<td>5, 000</td>
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
            <!--modal body-->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">FEMI</h4>
                        </div>
                        <div class="modal-body">
                            <p>Date Receivable Started: </p>
                            <p>Due Date: </p>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Total Amount</th>
                                        <th>Current Month (november)</th>
                                        <th>October</th>
                                        <th>September</th>
                                        <th>August</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                </tbody>
                            </table>
                            <hr>
                            <br>
                            <p>
                                <center><a class="btn btn-primary" data-toggle="collapse" href="#collapsePayment" aria-expanded="false" aria-controls="collapseExample">blah ...</a></center>
                            </p>
                            <div class="collapse" id="collapsePayment">
                                <div class="card-block">
                                    <form action="#" method="post" accept-charset="utf-8">
                                        <div class="modal-body" style="padding: 5px;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 20px;">
                                                    <div class="form-group">
                                                        <div class="col-xs-5 date">
                                                            <div class="input-group input-append date" id="datePicker">
                                                                <input type="text" class="form-control" name="date" />
                                                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 20px;">
                                                            <input class="form-control" name="coffeeType" placeholder="Amount" type="text" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="submit" class="btn btn-success" value="Save" />
                                                <input type="reset" class="btn btn-warning" value="Cancel" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
        $('table.display').DataTable({
			"ordering": false
		});

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

$('#eventForm').formValidation({
    framework: 'bootstrap',
    icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        name: {
            validators: {
                notEmpty: {
                    message: 'The name is required'
                }
            }
        },
        date: {
            validators: {
                notEmpty: {
                    message: 'The date is required'
                },
                date: {
                    format: 'MM/DD/YYYY',
                    message: 'The date is not a valid'
                }
            }
        }
    }
});
});
</script>

</html>