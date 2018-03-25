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
		.space1{
			margin-bottom: 1%;
			margin-top: 2%;
		}
		.space2{
			margin-top: 1%;
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
                                        <h2 class="title"><center>Contracted Clients</center></h2>
                                    </div>
                                    <div class="card-content">
                                        <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                            <thead>
                                                <th><b class="pull-left">Client</b></th>
                                                <th><b class="pull-left"> Client Type</b></th>
                                                <th></th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                            <?php
                                                    foreach($clients as $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row->client_company; ?></td>
                                                    <td><?php echo $row->client_type; ?></td>

                                                    <td><a href="<?php echo base_url(); ?>salesClients/salesClientsInfo?id=<?php echo $row->client_id;?>" class="btn btn-primary btn-round btn-sm">View Details<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></td>
                                                    <td><div class="btn btn-primary btn-sm space1" data-background-color="green" data-toggle="modal" data-target="#PurchaseOrder" data-id="<?php echo $row->client_id; ?>" id="getDetails" > Purchase Order</div><br>
													<a class="btn btn-primary btn-sm space2" href="<?php echo base_url(); ?>salesClients/salesMultipleOrders?id=<?php echo $row->client_id;?>">Other Order</a>
													</td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <hr>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--modal for add purchase-->
            <div class="modal fade" id="PurchaseOrder" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true"  >
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add New Purchase Order</h4>
                        </div>
                        <?php echo form_open('SalesClients/addClientPO', array('method'=>'POST')); ?>
                            <div class="modal-body" style="padding: 5px;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center" >
												<h3><b><input name="Name" class="no-border" type="disabled" readonly /></b></h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="row" >
									<input name="client_id" class="no-border" type="hidden" readonly /> 
                                    <div class="col-lg-6 col-md-6 col-offset-6">
                                        <div class="form-group">
                                            <label class="col-md-4 control">Item Code :</label>
                                            <div class="col-md-4">
                                                <p><b><input name="ItemCode" class="no-border" type="disabled" readonly /> </b></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control">Coffee Blend :</label>
                                            <div class="col-md-7">
                                                <p><b><input name="CoffeeBlend" class="no-border" type="disabled" readonly /> </b></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control">Bag :</label>
                                            <div class="col-md-5">
                                                <p><b><input name="Bag" class="no-border" type="disabled" readonly /></b></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control">Size :</label>
                                            <div class="col-md-5">
                                                <p><b><input name="Size" class="no-border" type="disabled" readonly /></b></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control">Unit Price :</label>
                                            <div class="col-md-7">
                                                <p><b>Php <input name="UnitPrice" id="UnitPrice" class="no-border" type="disabled" readonly /></b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <!--<div class="form-group">
                                                <label class="col-md-6 control">Purchase Order no. :</label>
                                                <div class="col-md-4">
                                                    <input id="" name="name" type="text" class="form-control">
                                                </div>
                                            </div>-->
                                            <div class="form-group">
                                                <label class="col-md-5 control">Date of Purchase :</label>
                                                <div class="col-md-4">
                                                    <input id="date" name="date" type="date" class="no-border" value="<?php echo date("Y-m-d");?>" data-validate="required" message="A Date of Purchase is recquired! min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d',strtotime(date('Y-m-d')))?>"">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control">Quantity :</label>
                                                <div class="col-md-4">
                                                    <input type="number" name="quantity" id="quantityAvailed" class="form-control" min="1" oninput="validity.valid||(value='');" data-validate="required" max="" >
                                                </div>
                                            </div><br><br>
											 <div class="form-group">
                                                <label class="col-md-3 control">Total Price :</label>
                                                <div class="col-md-9">
                                                    <h5><b>Php <input name="TotalPrice" type="number" value="quantity" id="product" class="no-border number" type="disabled" readonly /></b></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                               <!-- <div class="col-md-">
                                    <p>
                                        <center><a class="btn btn-primary" data-toggle="collapse" href="#collapseBlend" aria-expanded="false" aria-controls="collapseExample">Add New Blend</a></center>
                                    </p>
                                    <div class="collapse" id="collapseBlend">
                                        <div class="card-block">
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div class="row">
                                                        <div class="form-conttrol label-floating">
                                                            <div class="col-md-4">
                                                                <label> Coffee Blend:</label>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Type of Bag:</label>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Size:</label>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Qty:</label>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Add More:</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <input type="hidden" name="count" value="1" />
                                                        <div class="control-group " id="fields">
                                                            <div class="controls" id="profs">
                                                                <form class="input-append label-floating">
                                                                    <div id="field">
                                                                        <div class="input" id="field1">
                                                                            <div class="col-md-4">
                                                                                <select class="form-control" name="coffee">
                                                                                    <option value="">Guatemala Rainforest</option>
                                                                                    <option value="">Cordillera Sunrise</option>
                                                                                    <option value="">Sumatra Night</option>
                                                                                    <option value="">Espresso</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <select class="form-control" name="coffee">
                                                                                    <option value="clear">Clear</option>
                                                                                    <option value="brown">Brown</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <select class="form-control" name="coffee">
                                                                                    <option value="clear">250g</option>
                                                                                    <option value="brown">500g</option>
                                                                                    <option value="brown">1000g</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <input class="form-control" type="number" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <button id="b1" class="btn btn-success add-more " type="button">+</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                </div>-->
                            </div>
                            <div class="panel-footer" align="right">
                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                <?php echo form_submit(['name'=>'AddPO', 'value'=>'Add Purchase Order','class'=>'btn btn-primary','id'=>'subButton']) ?>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<!--
<!--
    <script src="../assets/js/jquery-1.12.4.js" type="text/javascript"></script>
-->
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
    var table = $('#example').DataTable();
	
	
	product();
	$("#UnitPrice, #quantityAvailed").on("keydown keyup", function() {
		 product();
    });
	

	function product() {
            var num1 = document.getElementById('UnitPrice').value;
            var num2 = document.getElementById('quantityAvailed').value;
			/*var result = parseInt(num1) + parseInt(num2);*/
			var result = parseInt(num1) * parseInt(num2);
            if (!isNaN(result)) {
                /*document.getElementById('sum').value = result;*/
				document.getElementById('product').value = result;
            }
      }
	
	
	
	
	});
function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}
</script>
<script>
$(function() {
    $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
    });
})

</script>

<script type="text/javascript">
$(document).ready(function() {
    var next = 1;
    $(".add-more").click(function(e) {
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<div class="input" id="field' + next + '"><div class="col-md-4"><select class="form-control" name="coffee"><option value="">Guatemala Rainforest</option><option value="">Cordillera Sunrise</option><option value="">Sumatra Night</option><option value="">Espresso</option></select></div><div class="col-md-2"><select class="form-control" name="coffee"><option value="clear">Clear</option><option value="brown">Brown</option></select> </div><div class="col-md-2"><select class="form-control" name="coffee"><option value="clear">250g</option><option value="brown">500g</option> <option value="brown">1000g</option></select> </div><div class="col-md-2"><input class="form-control" name="coffeeType" type="number" required /> </div></div>';
        var newInput = $(newIn);
        var removeBtn = ' <button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source', $(addto).attr('data-source'));
        $("#count").val(next);

        $('.remove-me').click(function(e) {
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length - 1);
            var fieldID = "#field" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });



});
</script>

<script>
		$(document).ready(function(){  
			$(document).on('click', '#getDetails', function(e){   
				e.preventDefault();
				var id = $(this).data('id');   // it will get id of clicked row

				jQuery.ajax({
					method: 'GET',
					type: 'ajax',
					dataType: 'json',
					url: '<?=base_url()?>SalesClients/salesClientDetails/' + id ,			
					success: function(data)
						{
							$('[name="client_id"]').val(data.client_id);
							$('[name="Name"]').val(data.client_company);
							$('[name="ItemCode"]').val(data.blend_id);
							$('[name="CoffeeBlend"]').val(data.contract_blend);
							$('[name="Bag"]').val(data.contract_bag);
							$('[name="Size"]').val(data.contract_size);
							$('[name="QTY"]').val(data.contractPO_qty);
							$('[name="UnitPrice"]').val(data.blend_price);
							/*$('#resolve_coffee').modal('show');*/			
						},
					error: function (jqXHR, textStatus, errorThrown)
						{
							alert('Error get data from ajax');
						}         
						});        
			});   
		});

</script>

</html>