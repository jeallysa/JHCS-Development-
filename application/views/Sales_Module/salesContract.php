<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Contract</title>
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
    .table thead,
    thead th {
        text-align: center;
        font-size: 140%;
    }

    .table tbody,
    tbody td {
        text-align: right;
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
                <a href="<?php echo base_url() ?>salesClients/salesClientsInfo" class="btn btn-primary navbar-btn pull-left">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h3 class="title"><center>Contract</center></h3>
                                </div>
                                <div class="col-xs-4">
                                    <div class="card card-profile">
                                        <div class="content">
                                            <h3 class="card-title">The Legend Villas</h3>
                                            <h6 class="category text-gray">Jesselyn Amagan - General Manager</h6>
                                            <table class="card-content" cellspacing="0" width="50%" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td><b>Address:</b></td>
                                                        <td align="left">Mandaluyong City</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Tel:</b></td>
                                                        <td align="left">+444 444 444</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Email:</b></td>
                                                        <td align="left">chef22@manor.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="card card-profile">
                                        <div class="content">
                                            <table class="card-content" cellspacing="0" width="80%" align="left">
                                                <h6 class="card-title">Coffee Details</h6>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Client Type:</b></td>
                                                        <td align="right">Coffee Service</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Date Started</b></td>
                                                        <td align="left">December28, 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Credit Term:</b></td>
                                                        <td align="left">30 days</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Coffee Blend:</b></td>
                                                        <td align="left">Sumatra Night</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Bag:</b></td>
                                                        <td align="left">Brown</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Size:</b></td>
                                                        <td align="left">500g</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Quantity:</b></td>
                                                        <td align="left">300</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                            <table class="card-content" cellspacing="0" width="50%" align="center">
                                            </table>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="card card-profile">
                                        <div class="content">
                                            <table class="card-content" cellspacing="0" width="90%" align="center">
                                                <h6 class="card-title">Machine Specifications</h6>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Brewer:</b></td>
                                                        <td align="left">Saeco</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Type:</b></td>
                                                        <td align="left">Double Cup Espresso</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Storage Capacity:</b></td>
                                                        <td align="left">300g</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>No. of Cups before refilling</b></td>
                                                        <td align="left">30-35</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Dimension:</b></td>
                                                        <td align="left">300 x 395 x 455 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Weight:</b></td>
                                                        <td align="left">15kg</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Voltage:</b></td>
                                                        <td align="left">220V -240V</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Watts:</b></td>
                                                        <td align="left">1600 W</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>User Interface:</b></td>
                                                        <td align="left">LCD Digital Display</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                            <table class="card-content" cellspacing="0" width="50%" align="center">
                                            </table>
                                            <br>
                                            <br>
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
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/datepicker.js" type="text/javascript"></script>
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
    $('#example').DataTable();
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
        // Revalidate the date field
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
</script>

</html>