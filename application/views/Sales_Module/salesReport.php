<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sales Summary</title>
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
    <link href="<?php echo base_url(); ?>assets/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
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
                    <li class="active">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h3 class="title"><center>Sales Report</center></h3>
                                </div>
                                <div class="card-content">
                                <div class="form-group col-xs-3">
                                <label>Filter By:</label>
                                    <div class="input-group input-daterange">
                                        <input type="text" id="min" class="form-control" value="2000-01-01" >
                                        <span class="input-group-addon">to</span>
                                        <input type="text" id="max" class="form-control" value="<?php   echo date("Y-m-d") ?>" >
                                    </div>
                                </div>

                                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Delivery Receipt No.</b></th>
                                                <th><b>Sales Invoice No.</b></th>
                                                <th><b>Date</b></th>
                                                <th><b>Client</b></th>
                                                <th><b>Coffee</b></th>
                                                <th><b>Bag</b></th>
                                                <th><b>Size</b></th>
                                                <th><b>Quantity</b></th>
                                                <th><b>Unit Price</b></th>
                                                <th><b>Total Amount</b></th>
                                                <th><b>Remarks</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($sales as $row) {
                                             ?>
                                             <tr>
                                                 <td><?php echo $row->client_dr; ?></td>
                                                 <td><?php echo $row->client_invoice; ?></td>
                                                 <td><?php echo $row->client_deliverDate; ?></td>
                                                 <td><?php echo $row->client_company; ?></td>
                                                 <td><?php echo $row->blend; ?></td>
                                                 <td><?php echo $row->package_type; ?></td>
                                                 <td><?php echo number_format($row->package_size); ?> g</td>
                                                 <td><?php echo $row->contractPO_qty; ?></td>
                                                 <td><?php echo 'Php '.number_format($row->blend_price,2); ?></td>
                                                 <td><?php echo 'Php '.number_format($row->client_balance,2); ?></td>
                                                 <td><?php echo $row->client_type; ?></td>
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
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="../assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.html5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-datepicker.min.js"></script>
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
<script src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive.bootstrap.min.js"></script>

<!-- <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    });
});
</script> -->

<script>   
    
    
    $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValue($("#min").val());
            var dateEnd = parseDateValue($("#max").val());
            var evalDate= parseDateValue(aData[2]);

            if (evalDate >= dateStart && evalDate <= dateEnd) {
                return true;
            }
            else {
                return false;
            }
    });
    //Date Converter
    function parseDateValue(rawDate) {
        var month = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        var dateArray = rawDate.split(" ");
        var parsedDate = dateArray[2] + month + dateArray[0];
        return parsedDate;
    }

    var oTable = $('#example').dataTable({ 
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
		buttons: [
            { "extend": 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs' },
			{ "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> Excel',"className": 'btn btn-success btn-xs' },
			{ "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs' }
        ]
    });

    $('#min,#max').datepicker({
        format: "yyyy-mm-dd",
        weekStart: 1,
        daysOfWeekHighlighted: "0",
        autoclose: true,
        todayHighlight: true
    });

    // Event Listeners
    $("#min").datepicker().on( 'changeDate', function() {
        oTable.fnDraw(); 
    });
    $("#max").datepicker().on( 'changeDate', function() { 
        oTable.fnDraw(); 
    });
    


</script>


</html>