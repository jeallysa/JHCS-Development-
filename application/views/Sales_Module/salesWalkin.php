<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sell Product</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
	<!--<link href="<?php echo base_url(); ?>assets/css/sales.css" rel="stylesheet" />-->
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


    <style>
    .table thead,
    thead th {
        text-align: center;
        font-size: 140%;
    }

    .table tbody,
    tbody td {
        text-align: right;
    }
    .content {
        height: 1000px !important;
    }
	.no-border{
		border: none !important;	
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
                    <li>
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
                        <div class="col-md-10 col-md-offset-1">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h3 class="title"><center>Walk-in Client Order</center></h3>
                                </div>

                                
                                    <div class="card-content">
                                        <div class="modal-body" style="padding: 5px;">
                                                <div class="row" style="margin: auto;">
                                                    <div class="col-md-6" >
                                                        <div class="form-group label-floating">
                                                            <label for="email">Date</label>
                                                            <input class="form-control" type="date" value="<?php echo date("Y-m-d");?>" required="" id="datepicked">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div><hr>  

                                    <div class="modal-body" style="padding: 5px;">

                                            <div class="row-fluid">
                                                <div class="form-conttrol label-floating">
                                                    <div class="col-md-6">
                                                        <label>Coffee</label>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Quantity</label>
                                                    </div>
                                                </div>
                                            </div>
                                              
                                            <div id="education_fields"> </div>
                                            
                                            <div class="col-sm-6 nopadding">
                                              <div class="form-group">
                                                  <select class="selectpicker" data-live-search="true" id="blend">
                                                    <?php 
                                                    foreach($data3['blends'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->blend_id.'">'.$row->blend." ".$row->package_type." ".$row->package_size." g".'</option>';
														
                                                    }
                                                    ?>
                                                  </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-6 nopadding">
                                              <div class="form-group">
                                                  <div class="input-group">
                                                    <input type="number" class="form-control" id="qty"  value="qty" placeholder="qty" required="" min="1">
                                                        <div class="input-group-btn">
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                    </div>
                                <br><br><br>
                                <br><br><br>
                                <br><br><br>
    								<center>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verify" id="submit" disabled="disabled">
                                          Save
                                        </button>
                                        <a href="<?php echo base_url(); ?>salesSellProduct" class="btn btn-danger"> Cancel</a>
									</center>
								
					<!--modal for verification-->
                    <div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="panel panel-primary">
                                <div class="panel-heading" style="background-color: #990000;">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="panel-title" id="contactLabel"><center><b>Verify Order</b></center> </h4>
                                </div>
								<form action="<?php echo base_url(); ?>SalesSellProduct/record" method="post" accept-charset="utf-8">
                                <div class="modal-body">
									<div class="col-md-12 col-md-offset-1">
										<h3>Please confirm the order information</h3></div>
									 <div class="col-md-12 col-md-offset-2">
										 
										 <div class="row">
											<label class="col-md-3 control">Date of Purchase :</label>
											<div class="col-md-5">
											<b><input class="no-border" name="date" id="displayDate" readonly /></b>
											</div>
										</div>
										<div class="row">
											<label class="col-md-2 control">Blend :</label>
											<div class="col-md-3">
											<b><input name="blendName" class="no-border" type="disabled" id="blendName"  readonly /></b>
											</div>
										</div>
									 	<div class="row">
											<label class="col-md-2 control">Size :</label>
											<div class="col-md-3">
											<b><input name="size" class="no-border" type="disabled" id="blendName"  readonly /></b>
											</div>
										</div>
										<div class="row">
											<label class="col-md-2 control">Type :</label>
											<div class="col-md-3">
											<b><input name="type" class="no-border" type="disabled" id="blendName"  readonly /></b>
											</div>
										</div>
										 <div class="row">
											<label class="col-md-2 control">Quantity :</label>
											<div class="col-md-3">
											<b><input class="no-border" name="qty" id="displayQty" readonly /></b>
											</div>
										</div>
										 <input class="form-control" name="blend_id" id="displayBlend" type="hidden" readonly />
									</div>
                                </div>
                                <hr>
                              <div align="center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Save</button>
                              </div>
							 </form> 
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

<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<script src="../assets/js/bootstrap-select.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		
		$(document).on('click', '#submit', function(e){ 
		var datepicked = document.getElementById('datepicked').value;
		var e = document.getElementById("blend");
		var blend = e.options[e.selectedIndex].value;
		var qty = document.getElementById('qty').value;

		document.getElementById('displayDate').value = datepicked ;		
		document.getElementById('displayBlend').value = blend ;		
		document.getElementById('displayQty').value = qty ;	
			
		jQuery.ajax({
					url:'<?=base_url()?>SalesSellProduct/getBlend/' +blend,
					method: 'GET',
					type: 'ajax',
					dataType: 'json',
					success:function(data)
					{
						
						$('[name="blendName"]').val(data.blend);
						$('[name="size"]').val(data.package_size);
						$('[name="type"]').val(data.package_type);
						/*$("#verify").modal('show');*/
					},
			error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error get data from ajax');
				}

			});
			
		});
		 $("#qty").keyup(function () {
                if ($(this).val() !== "" && $(this).val() !== null)
                {
                    $("#submit").removeAttr("disabled");
                }
            });
		
		

			});
	
	    
</script>




</html>



