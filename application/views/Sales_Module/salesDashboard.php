<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sales Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, wal-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />   
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
    .dropdown-menu {
        right: 0;
        left: auto;
    }
	.select-pane {
        display: none;
    }
		.no-border{
			border: none !important;
			
		}
		
		
		
		

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-0.jpg">
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>salesDashboard">
                            <i class="material-icons">dashboard</i><i class="material-icons pull-right select-pane" style="color:red !important">error</i>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">trending_up</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Sales</p>
                                    <h3 class="title">
										<?php 
											$total = $this->db->query("SELECT SUM(client_balance) AS total FROM client_delivery WHERE client_deliverDate=now() ;")->row()->total;
										
										if(!empty($total)){
											echo number_format($total);
										}else{
											echo 0;
										}
										
										 ?>
                                    </h3>
									
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i>  <a href="<?php echo base_url(); ?>salesReport">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">collections</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Collections</p>
                                    <?php 
											$total = $this->db->query("SELECT SUM(client_balance) AS total FROM client_delivery  WHERE  payment_remarks='paid'; ")->row()->total;
										if(!empty($total)){
											echo number_format($total);
										}else{
											echo 0;
										}
										
										 ?>

                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> <a href="<?php echo base_url(); ?>salesCollections">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">credit_card</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Recievables</p>
                                    <?php 
											$total = $this->db->query("SELECT SUM(client_balance) AS total FROM client_delivery WHERE payment_remarks='unpaid';")->row()->total;
											if(!empty($total)){
												echo number_format($total);
											}else{
												echo 0;
											}
										 ?>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i><a href="<?php echo base_url(); ?>salesReceivables">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">face</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Clients</p>
                                    <?php 
											$total = $this->db->query("SELECT COUNT(client_company) AS total FROM contracted_client WHERE client_activation='1';")->row()->total;
											if(!empty($total)){
												echo number_format($total);
											}else{
												echo 0;
											}
										 ?>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> <a href="<?php echo base_url(); ?>salesClients">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Reminders</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <tbody>
											
												
											<?php
										
												$query = $this->db->query("SELECT date_expiration,client_id,client_company,seen FROM contract NATURAL JOIN contracted_client WHERE seen='0'");
												$date = date('Y-m-d');
												
												
												if(!empty($query)){
													foreach($query->result() as $object){
														if($object->date_expiration == $date){
															if($object->seen ==  '0'){
												?>

													<tr>
														<td>
															<span > The contract of <?php echo $object->client_company; ?> client has Expired. </span>
															<input class="no-border" type="hidden" value="<?php echo $object->client_id; ?>" id="idClient" readonly />
														</td >
														<td class="td-actions text-right"><button type="submit" class="btn btn-primary pull-right" id="check" data-id="<?php echo $object->client_id; ?>" >Details</button></td>
													</tr>
											
													
													<?php
															}elseif($object->seen == '1'){
													?>
													<tr>
														<td>
															<span> The contract of <?php echo $object->client_company; ?> client has Expired. </span>
															<input class="no-border" type="text" value="<?php echo $object->client_id; ?>" id="idClient" readonly />
														</td >
														<td class="td-actions text-right"><button type="submit" class="btn btn-default pull-right" id="check" data-id="<?php echo $object->client_id; ?>" >Details</button></td>
													</tr>
													<?php
																
															}
														}else{

													}	}
												}else{
													echo 0;
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
</body>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script type="text/javascript">
	var id = document.getElementById('idClient').value;
	$.ajax({
		url:'<?=base_url()?>AdminDashboard/getExpire/' +id,
		method: 'POST',
		success:function(data){
					$(".select-pane").show();
		}
	});
	$(document).ready(function() {
		demo.initDashboardPageCharts();

		$(document).on('click', '#check', function(e){   
			e.preventDefault();
			var id = $(this).data('id'); 
				$.ajax({
					url:'<?=base_url()?>AdminDashboard/updateNotif/' +id,
					method: 'POST',
					success:function(data){
						$(".select-pane").hide();
						alert('naupdate na!');
					}

					});

		});

	});	
</script>

</html>