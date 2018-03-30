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
                                        <a href="<?php echo base_url(); ?>salesActivityLogs">Activity Logs</a>
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
                            <div class="card card-profile">
                                <div class="col-xs-12">
                                    <div class="card card-profile">
                                        <div class="content">
                                            <a href="<?php echo base_url() ?>salesClients" class="btn btn-primary navbar-btn pull-left">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <?php
                                                foreach($data1['cli_det'] as $row)
                                                {
                                                    
                                            ?>
                                            <h3 class="card-title"><?php echo $row->client_company; ?></h3>
                                            <h6 class="category text-gray"><?php echo $row->client_fname; ?> <?php echo $row->client_lname; ?> - <?php echo $row->client_position; ?></h6>
                                            <table align="center">
                                                <tbody>
                                                    <tr>
                                                        <td><b>Address: </b></td>
                                                        <td align="left"> <?php echo $row->client_address; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Tel: </b></td>
                                                        <td align="left"> <?php echo $row->client_contact; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Email: </b></td>
                                                        <td align="left"> <?php echo $row->client_email; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <?php

                                                }

                                            ?>
                                            <br>
                                            <br>
                                            <a href="<?php echo base_url(); ?>salesClients/salesContract?id=<?php echo $row->client_id;?>" class="btn btn-warning btn-round">View Contract</a>
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
                                            <ul class="nav nav-tabs" data-tabs="tabs" id="myTab">
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
                                            <table id="" class="display hover order-column cell-border" cellspacing="0" width="100%">
                                                <thead>
                                                    <th><b class="pull-left">Purchase Order No.</b></th>
                                                    <th><b class="pull-left">Purchase Date</b></th>
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
                                                    foreach($data['cli_data'] as $row)
                                                    {
                                                        
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row->contractPO_id; ?></td>
                                                        <td><?php echo $row->contractPO_date; ?></td>
                                                        <td><?php echo $row->blend_id; ?></td>
                                                        <td><?php echo $row->blend; ?></td>
                                                        <td><?php echo $row->package_type; ?></td>
                                                        <td><?php echo number_format($row->package_size); ?> g</td>
                                                        <td><?php echo $row->contractPO_qty; ?></td>
                                                        <td>Php <?php echo number_format($row->blend_price,2); ?></td>
                                                        <td><?php 
                                                        $qty = $row->contractPO_qty;
                                                        $Price = $row->blend_price;
                                                        $Amount = $qty * $Price;
                                                        echo 'Php '.number_format($Amount,2); ?></td>
                                                        <td><?php echo $row->contractPO_date; ?></td>
                                                        <td><?php echo $row->delivery_stat; ?></td>
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
                                                    <th><b class="pull-left">Delivery Date</b></th>
                                                    <th><b class="pull-left">Coffee</b></th>
                                                    <th><b class="pull-left">Quantity</b></th>
                                                    <th><b class="pull-left">Unit Price</b></th>
                                                    <th><b class="pull-left">Total Amount</b></th>
                                                    <th><b>Received By</b></th>
                                                    <th>Payment Status</th>
                                                    <th>Remarks</th>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    foreach($data2['del_data'] as $row)
                                                    {
                                                        
                                                ?>                    
                                                    <tr>
                                                        <td><?php echo $row->client_dr; ?></td>
                                                        <td><?php echo $row->client_invoice; ?></td>
                                                        <td><?php echo $row->contractPO_id; ?></td>
                                                        <td><?php echo $row->client_deliverDate; ?></td>
                                                        <td><?php echo $row->blend.'/ '.$row->package_type.'/ '.number_format($row->package_size); ?> g</td>
                                                        <td><?php echo $row->contractPO_qty; ?></td>
                                                        <td>Php <?php echo number_format($row->blend_price,2); ?></td>
                                                        <td><?php 
                                                        $qty = $row->contractPO_qty;
                                                        $Price = $row->blend_price;
                                                        $Amount = $qty * $Price;
                                                        echo 'Php '.number_format($Amount,2); ?></td>
                                                        <td><?php echo $row->client_receive; ?></td>
                                                        <td><?php echo $row->payment_remarks; ?></td>
                                                        <td><?php echo $row->return; ?></td>
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
                                                    <th><b class="pull-left">Mode of Payment</b></th>
                                                    <th><b class="pull-left">Payment Date</b></th>
                                                    <th><b class="pull-left">Amount</b></th>
                                                    <th><b class="pull-left">Gross Amount</b></th>
                                                    <th><b class="pull-left">Withheld</b></th>
                                                    <th><b class="pull-left">Remarks</b></th>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    foreach($data3['pay_data'] as $row)
                                                    {
                                                        
                                                ?>  
                                                    <tr>
                                                        <td><?php echo $row->collection_no; ?></td>
                                                        <td><?php echo $row->client_dr; ?></td>
                                                        <td><?php echo $row->payment_mode; ?></td>
                                                        <td><?php echo $row->paid_date; ?></td>
                                                        <td>Php <?php echo number_format($row->paid_amount,2); ?></td>
                                                        <td>Php <?php echo number_format($row->client_balance,2); ?></td>
                                                        <td>Php <?php echo number_format($row->withheld,2); ?></td>
                                                        <td><?php echo $row->remarks; ?></td>
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
                                                            <th><b class="pull-left">Delivery Date</b></th>
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
                </div>
            </div>
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