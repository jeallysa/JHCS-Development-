<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Clients</title>
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
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/sales.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="../assets/css/bootstrap-toggle.css" rel="stylesheet" />
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
		.no-border{
			border: none !important;
		}
		.coll-centered{
			float: none;
			margin: 0 auto;
		}
		.table td {
		   text-align: center;   
		}
		
		.btn-group.open>.dropdown-toggle.btn,
		.btn-group.open>.dropdown-toggle.btn.btn-default,
		.btn-group-vertical.open>.dropdown-toggle.btn,
		.btn-group-vertical.open>.dropdown-toggle.btn.btn-default {
			background-color: #b15b5b;
			color: white;
		}
		
		.btn, .btn:hover, .btn:focus, .btn:active, .btn.active, .btn:active:focus, .btn:active:hover, .btn.active:focus, .btn.active:hover, .open > .btn.dropdown-toggle, .open > .btn.dropdown-toggle:focus, .open > .btn.dropdown-toggle:hover, .btn.btn-default, .btn.btn-default:hover, .btn.btn-default:focus, .btn.btn-default:active, .btn.btn-default.active, .btn.btn-default:active:focus, .btn.btn-default:active:hover, .btn.btn-default.active:focus, .btn.btn-default.active:hover, .open > .btn.btn-default.dropdown-toggle, .open > .btn.btn-default.dropdown-toggle:focus, .open > .btn.btn-default.dropdown-toggle:hover, .navbar .navbar-nav > li > a.btn, .navbar .navbar-nav > li > a.btn:hover, .navbar .navbar-nav > li > a.btn:focus, .navbar .navbar-nav > li > a.btn:active, .navbar .navbar-nav > li > a.btn.active, .navbar .navbar-nav > li > a.btn:active:focus, .navbar .navbar-nav > li > a.btn:active:hover, .navbar .navbar-nav > li > a.btn.active:focus, .navbar .navbar-nav > li > a.btn.active:hover, .open > .navbar .navbar-nav > li > a.btn.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.dropdown-toggle:hover, .navbar .navbar-nav > li > a.btn.btn-default, .navbar .navbar-nav > li > a.btn.btn-default:hover, .navbar .navbar-nav > li > a.btn.btn-default:focus, .navbar .navbar-nav > li > a.btn.btn-default:active, .navbar .navbar-nav > li > a.btn.btn-default.active, .navbar .navbar-nav > li > a.btn.btn-default:active:focus, .navbar .navbar-nav > li > a.btn.btn-default:active:hover, .navbar .navbar-nav > li > a.btn.btn-default.active:focus, .navbar .navbar-nav > li > a.btn.btn-default.active:hover, .open > .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-default.dropdown-toggle:hover {
			background-color: white;
			color: black;
		}


    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
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
                            <div class="card">
                                <center>
                                    <div class="card-header" data-background-color="purple">
                                        <h2 class="title"><center>Other Orders</center></h2>
                                    </div>
                                    <div class="card-content">
										
										<?php foreach($data['info'] as $row){ ?>
											<br>
											<p style="font-size: 180%; font-weight: bold;" ><?php echo $row->client_company; ?> </p>
											<input id="client_id" value="<?php echo $row->client_id ?>" type="hidden" />
										
										<?php
										
										}?>
										
										<hr>
										
										<div class="col-sm-11 col-md-11 col-md-offset-1 well well-sm coll-centered" >
											<legend><span class="glyphicon glyphicon-shopping-cart"></span> Order</legend><hr>
											<div class="row">
											<div class="col-md-2 col-md-offset-1">
												<input class="form-control" id="date" type="date" value="<?php echo date("Y-m-d");?>" data-validate="required" message="A Date of Delivery is recquired! min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d',strtotime(date('Y-m-d').'+1 days'))?>"" required />
											</div>
											<div class="col-md-4 ">
														<select class="form-control selectpicker" id="blend" data-live-search="true" multiple title="Choose Coffee Blend...">
															<?php foreach($data1['blends'] as $row){ ?>
															<option value='<?php echo $row->blend_id ?>/<?php echo $row->blend ?>/<?php echo $row->package_type ?>/<?php echo $row->package_size ?>' ><?php echo $row->blend ?>/<?php echo $row->package_type ?>/<?php echo $row->package_size ?></option>
                                                            <?php 
															} ?>
                                                         </select>
												</div>
												<div class="col-md-2">
													<input class="form-control" name="" id="qty" placeholder="Quantity" type="number" min="1" oninput="validity.valid||(value='');" data-validate="required" />
												</div>
												<input class="btn btn-lg btn-primary btn-sm" type="text" id="append_data" value="Add to Table" readonly>
												</div>
											</div><br>
											<br>
										
										<div class="col-sm-10 col-md-10 col-md-offset-2 well well-sm coll-centered" >
												<table class="table" id="data_table">
													<thead class="text-primary">
														<th></th>
														<th>Date of Order</th>
														<th>Coffee Blend/Type of Bag/Size of Bag</th>
<!--														<th>Type of Bag</th>
														<th>Size of Bag</th>-->
														<th>Quantity</th>
														<th></th>
													</thead>
													<tbody>
														
													</tbody>
												</table>
												<button class="btn btn-primary btn-sm" type="submit" name="AddPO" id="AddPO">Add Purchase Order/s</button>
												
											</div>
											<div class="col-xs-7 col-7" style="margin-left:15px; margin-top:150px;">
												<hr>
												
											</div>
										
                                    </div>
								</center>
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
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>

<script type="text/javascript">
	
	$('.selectpicker').selectpicker({ 
	});

	
	var count = 0;
	$("#append_data").click(function(){
		var id = $('#client_id').val();
		var dateO = $('#date').val();
		var blend = $('#blend').val();
		/*var typeBag = $('#type').val();
		var sizeBag = $('#size').val();*/
		var qty = $('#qty').val();
		
		count = count + 1;
		var newRow = '<tr id="row'+count+'">'+
				'<td contenteditable="true" class="blendName">'+id+'</td>'+
				'<td contenteditable="true" class="blendName">'+dateO+'</td>'+
			 	'<td contenteditable="true" class="blendName">'+blend+'</td>'+
/*			 	'<td contenteditable="true" class="typeBag">'+typeBag+'</td>'+
			 	'<td contenteditable="true" class="sizeBag">'+sizeBag+'</td>'+*/
			 	'<td contenteditable="true" class="quantity">'+qty+'</td>'+
				'<td><button class="btn btn-danger btn-xs remove" data-row="row'+count+'">-</button></td>'+
			'</tr>';
		
		$("#data_table tbody:last-child").append(newRow);
		
		$('#blend').val('');
/*		$('#type').val('');
		$('#size').val('');*/
		$('#qty').val('');
		
	});
	
	$(document).on('click','.remove', function(){
		var delete_row = $(this).data('row');
		$('#'+delete_row).remove();
		
	});
	
	$('#AddPO').click(function(){
		var table_data = [];
		$('#data_table tr').each(function(row,tr){
			if($(tr).find('td:eq(0)').text() == ""){

			}else{
				var sub = {
					'id' : $(tr).find('td:eq(0)').text(),
					'dateO' : $(tr).find('td:eq(1)').text(),
					'blend' : $(tr).find('td:eq(2)').text(),
					'quantity' : $(tr).find('td:eq(3)').text(),
				}
				table_data.push(sub);
			}
		});
		
		$.ajax({			
			url:'<?=base_url()?>SalesClients/addMultipleOrders/',
			method: 'POST',
			data: {table_data:table_data},
			crossOrigin: false,
			success:function(data){
				$("td[contentEditable='true']").text("");
				for(var i=1; i<=count; i++){
					$('tr#'+i+'').remove();
				}
				console.log(data.check)
				location.reload();  
			}	
		});
	});
</script>


</html>