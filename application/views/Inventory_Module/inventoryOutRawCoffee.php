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
    <title>Inventory Out</title>
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
    padding-top: 15px;
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
                    <li class="active">
                        <a href="<?php echo base_url(); ?>inventoryOutRawCoffee">
                            <i class="material-icons">reply</i>
                            <p>Inventory Out</p>
                        </a>
                    </li>
                    <li>
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
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
                                <li id="nameheader">
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
                           
                            <li>
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
                               
       <!------------------                                          NOTIFICATION                    ---------------------------------->           
                            
                            <li>
                            
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">announcement</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                       <span class="label-count" style='background-color: #f44336;'> <?php 
                                           
                              $total = 0;
                                for($i = 0; $i <= 3 ;$i++){
                                     if(!empty($reorder[$i])){
                                          foreach($reorder[$i] as $object){
                                              $total = $total+1;
                                                 
                                             }
                                      }
                                 } echo $total;
                                           ?>   </span> </a>
                            
                            
                            
                            
                                <ul class="dropdown-menu">
                                    
                                   <?php 
                                 for($i = 0; $i <= 3 ;$i++){
                                     if(!empty($reorder[$i])){
                                          foreach($reorder[$i] as $object){
                                            echo   '<li><a href="inventoryStocks">' . $object->name . "     " . $object->type. ' now drops below the re-order level</a></li>';
                                                 
                                             }
                                      }
                                 }
                                    ?>
                                   
                                </ul>
                            
                            </li>
                            
                            
                            
    <!------------------                                          NOTIFICATION                    ---------------------------------->           

                        
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
                                                    <a href="#coffeeout" data-toggle="tab">
                                                        <i class="material-icons">local_cafe</i> Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#machineout" data-toggle="tab">
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
                                        <div class="tab-pane active" id="coffeeout">
                                            <ul class="nav nav-tabs navbar-default justify-content-center" id="coffeeout" >
                                                <li class="active"><a href="#walkin" data-toggle="tab" >Walk-In Client</a></li>
                                                <li><a href="#contracted" data-toggle="tab">Contracted Client</a></li>
                                            </ul>
                                            <div class="tab-content tab-color">
                                                <div class="tab-pane active" id="walkin">
                                                    <table id="walkin" class="table hover order-column" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Sales Invoice No.</b></th>
                                                                <th><b>Date</b></th>
                                                                <th><b>Client</b></th>
                                                                <th><b>Coffee</b></th>
                                                                <th><b>Bag</b></th>
                                                                <th><b>Size</b></th>
                                                                <th><b>Quantity</b></th>
                                                                <th><b>Sticker</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                        foreach($data1['coffeeoutwalkin'] as $row)
                                                        {
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $row->walkin_id; ?></td>
                                                                 <td><?php echo $row->walkin_date; ?></td>
                                                                 <td>Walk-in</td>
                                                                 <td><?php echo $row->blend; ?></td>
                                                                 <td><?php echo $row->package_type; ?></td>
                                                                 <td><?php echo number_format($row->package_size); ?></td>
                                                                 <td><?php echo number_format($row->walkin_qty); ?></td>
                                                                 <td><?php echo $row->sticker; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="contracted">
                                                    <table id="contracted" class="table hover order-column" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Delivery Receipt No.</b></th>
                                                                <th><b>Delivery Date</b></th>
                                                                <th><b>Client</b></th>
                                                                <th><b>Coffee</b></th>
                                                                <th><b>Bag</b></th>
                                                                <th><b>Size</b></th>
                                                                <th><b>Quantity</b></th>
                                                                <th><b>Sticker</b></th>
                                                                <th><b>Received By</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                        foreach($data2['coffeeoutcontracted'] as $row)
                                                        {
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $row->client_dr; ?></td>
                                                                <td><?php echo $row->client_deliverDate; ?></td>
                                                                <td><?php echo $row->client_company; ?></td>
                                                                <td><?php echo $row->blend; ?></td>
                                                                <td><?php echo $row->package_type; ?></td>
                                                                <td><?php echo number_format($row->package_size); ?></td>
                                                                <td><?php echo number_format($row->contractPO_qty); ?></td>
                                                                <td><?php echo $row->sticker; ?></td>
                                                                <td><?php echo $row->client_receive; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="machineout">
                                             <table id="" class="table hover order-column" cellspacing="0" width="100%">
                                            <thead>
                                                <th><b>Serial No.</b></th>
                                                <th><b>Date</b></th>
                                                <th><b>Client</b></th>
                                                <th><b>Machine</b></th>
                                                <th><b>No. of machines installed</b></th>
                                                <th><b>Remarks</b></th>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($data3['machineout'] as $row)
                                                    {
                                                ?>
                                                <tr>
                                                     <td><?php echo $row->mach_serial; ?></td>
                                                     <td><?php echo $row->date; ?></td>
                                                     <td><?php echo $row->client_company; ?></td>
                                                     <td><?php echo $row->brewer; ?></td>
                                                     <td><?php echo number_format($row->mach_qty); ?></td>
                                                     <td><?php echo $row->status; ?></td>
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