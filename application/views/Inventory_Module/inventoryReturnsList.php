<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Returns</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
</head>
<style>
    /*
		td.highlight {
			background-color: whitesmoke !important;
		}
*/
.title {
    font-size: large;
}
		.table thead,
		thead th {
			text-align: center;
		}
		.table tbody, tbody td{
			text-align: center;
		}
		.navbar-default { 
			text-align: center !important;
			
		}
		.navbar-default > li.active > a, .navbar-default > li.active > a:focus, .navbar-default > li.active > a:hover {
			border-top: 1px solid #75DAE2 !important;
			border-right: 1px solid #75DAE2 !important;
			border-left: 1px solid #75DAE2 !important;
			border-bottom: transparent !important;
			background-color: #75DAE2 !important;
			color: white !important;
		}
		.navbar-default > li.active > a {
			color: white!important; 
			float: none !important;
			display: inline-block!important;
		}
		.navbar-default > li > a, .navbar-default > li > a:hover {
			border: none;
			color: #75DAE2 !important; 
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
			border-top: 3px solid #75DAE2;
			border-left: 2px solid #75DAE2;
		}
    </style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="<?php echo base_url(); ?>assets/img/sidebar-0.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryDashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryStocks">
                            <i class="material-icons">assessment</i>
                            <p>Inventory Stocks</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryInventoryReport">
                            <i class="material-icons">content_paste</i>
                            <p>Inventory Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryPOAdd">
                            <i class="material-icons">shopping cart</i>
                            <p>Purchase Order</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryOutRawCoffee">
                            <i class="material-icons">reply</i>
                            <p>Inventory Out</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>inventoryReturnsList">
                            <i class="material-icons">input</i>
                            <p>Returns</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <li>
                                    <?php $username = $this->session->userdata('username') ?>
                                
                                <?php
                                              $retrieveUserDetails ="SELECT * FROM jhcs.user WHERE username = '$username';" ;
                                              $query = $this->db->query($retrieveUserDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<p class="title">Hi, '  . $object->u_fname  . ' ' . $object->u_lname  . '</p>' ;
                                              }
                                            }
                                        ?>
                                </li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryUser">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryActivityLogs">Activity Logs</a>
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
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#companyreturn" data-toggle="tab">
                                                        <i class="material-icons">home</i> Company Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#clientreturn" data-toggle="tab">
                                                        <i class="material-icons">group</i> Client Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="companyreturn">
                                            <a class="btn btn-success" data-toggle="modal" data-target="#return" data-original-title style="float: right">Add Returns</a>
                                            <br>
                                            <br>
                                             <table id="" class="table hover order-column" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><b>#</b></th>
                                                    <th><b>Date Returned</b></th>
                                                    <th><b>Supplier</b></th>
                                                    <th><b>Quantity</b></th>
                                                    <th><b>Item</b></th>
                                                    <th><b>Remarks</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($data1['get_companyreturns'] as $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row->company_returnID; ?></td>
                                                    <td><?php echo $row->sup_returnDate; ?></td>
                                                    <td><?php echo $row->sup_company; ?></td>
                                                    <td><?php echo number_format($row->sup_returnQty); ?> g</td>
                                                    <td><?php echo $row->raw_coffee; ?></td>
                                                    <td><?php echo $row->sup_returnRemarks; ?></td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="tab-pane" id="clientreturn">
                                            <ul class="nav nav-tabs navbar-default justify-content-center" id="clientreturn" >
                                                <li class="active"><a href="#coffee" data-toggle="tab" >Coffee</a></li>
                                                <li><a href="#machine" data-toggle="tab">Machine</a></li>
                                            </ul>
                                            <div class="tab-content tab-color">
                                                <div class="tab-pane active" id="coffee">
                                                    <table id="coffee" class="table hover order-column" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th><b>#</b></th>
                                                                <th><b>Delivery Receipt No.</b></th>
                                                                <th><b>Date Returned</b></th>
                                                                <th><b>Client</b></th>
                                                                <th><b>Quantity</b></th>
                                                                <th><b>Remarks</b></th>
                                                                <th><b>Action Taken</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                        foreach($data2['get_clientcoffeereturns'] as $row)
                                                        {
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $row->client_coffReturnID; ?></td>
                                                                <td><?php echo $row->client_dr; ?></td>
                                                                <td><?php echo $row->coff_returnDate; ?></td>
                                                                <td><?php echo $row->client_company; ?></td>
                                                                <td><?php echo number_format($row->coff_returnQty); ?> g</td>
                                                                <td><?php echo $row->coff_remarks; ?></td>
                                                                <td><?php echo $row->coff_returnAction; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="machine">
                                                    <table id="machine" class="table hover order-column" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Return No.</b></th>
                                                                <th><b>Machine Serial No.</b></th>
                                                                <th><b>Date Returned</b></th>
                                                                <th><b>Client</b></th>
                                                                <th><b>Machine</b></th>
                                                                <th><b>Quantity</b></th>
                                                                <th><b>Remarks</b></th>
                                                                <th><b>Action Taken</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                        foreach($data3['get_clientmachinereturns'] as $row)
                                                        {
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $row->client_machReturnID; ?></td>
                                                                <td><?php echo $row->mach_serial; ?></td>
                                                                <td><?php echo $row->mach_returnDate; ?></td>
                                                                <td><?php echo $row->client_company; ?></td>
                                                                <td><?php echo $row->machine; ?></td>
                                                                <td><?php echo number_format($row->mach_returnQty); ?> pc/s</td>
                                                                <td><?php echo $row->mach_remarks; ?></td>
                                                                <td><?php echo $row->mach_returnAction; ?></td>
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
        <div class="modal fade" id="return" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span>Add New Return</h4>
                        </div>
                        <form action="InventoryReturnsList/insert" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Date</label>
                                            <input class="form-control" type="date" name="date" min="2017-01-01" max="<?php   echo date("Y-m-d") ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Supplier</label>
                                            <select class="form-control" name="supplier" required>
                                                <option disabled selected value> -- select a supplier -- </option>
                                                <?php 

                                                    foreach($data4['get_suppliers'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->sup_id.'">'.$row->sup_company.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Item Returned</label>
                                            <select class="form-control" name="coffee" required>
                                                <option disabled selected value> -- select an item -- </option>
                                                <?php 

                                                    foreach($data5['get_coffee'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->raw_id.'">'.$row->raw_coffee.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Quantity</label>
                                            <input class="form-control" type="number" name="quantity" placeholder="grams" min="1"required />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="email">Remarks</label>
                                        <textarea style="resize:vertical;" class="form-control" rows="3" name="remarks" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                            </div>
                            <div class="panel-footer" style="margin-bottom:-14px;">
                                <input type="submit" class="btn btn-success" value="Add" />
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                                <input type="reset" class="btn btn-danger" value="Clear" />
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                                <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
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
</body>
<!--   Core JS Files   -->
<!--
    <script src="../assets/js/jquery-1.12.4.js" type="text/javascript"></script>
-->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.datatables.js"></script>
<script>
$(document).ready(function() {
    $('table.table').DataTable({
        select: {
            style: 'single'
        }

    });
});
</script>
 
</html>