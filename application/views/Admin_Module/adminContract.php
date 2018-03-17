<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
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
        <div class="sidebar" data-color="green" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo ">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>adminDashboard">
                            <i class="material-icons">dashboard</i>
                            
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminProductInventory">
                            <i class="material-icons">assessment</i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url(); ?>adminAccounts">
                            <i class="material-icons">account_circle</i>
                            <p>Accounts</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>adminClients">
                            <i class="material-icons">person</i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminSupplier">
                            <i class="material-icons">person</i>
                            <p>Suppliers</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminSalesReport">
                            <i class="material-icons">library_books</i>
                            <p>Reports</p>
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
                        <a class="navbar-brand" href="#"></a>
                    </div>
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
                                        <a href="<?php echo base_url(); ?>adminUser">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminActivityLogs">Activity Logs</a>
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
        
              <div class="modal fade" id="edit" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Edit Item Information</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                  <div class="modal-body" style="padding-left: 100px;">
                                                      <h6><b>Coffee Details</b></h6>
                                                     <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Date Started</label>
                                                            <input class="form-control" type="textarea" value="December 28, 2017" id="example-number-input">
                                                        </div>
                                                    </div>
                                                      <p><div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Credit Term</label>
                                                            <input class="form-control" type="textarea" value="30 Days" id="example-number-input">
                                                        </div>
                                                    </div>
                                                        <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Quantity</label>
                                                            <input class="form-control" type="number" value="300" id="example-number-input">
                                                        </div>
                                                    </div>
                                                      <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Size</label>
                                                            <input class="form-control" type="number" value="500g" id="example-number-input">
                                                        </div>
                                                    </div>
                                                       <div class="col-md-6">
                                                            <label class="control-label">Coffee Blend</label>
                                                            <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                                                <option>Sumatra Night</option>
                                                                <option>Guatamela Rainforest</option>
                                                                <option>Cordillera Sunshine</option>
                                                                <option>Espresso</option>
                                                            </select>
                                                        </div>
                                                       <div class="col-md-6">
                                                            <label class="control-label">Bag</label>
                                                            <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                                                <option>Clear</option>
                                                                <option>Brown</option>
                                                            </select>
                                                        </div>
                                                      
                                                       <p><h6><b>Machine:</b></h6>
                                                     <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Brewer</label>
                                                            <input class="form-control" type="textarea" value="Saeco" id="example-number-input">
                                                        </div>
                                                    </div>
                                                      <p><div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Type</label>
                                                            <input class="form-control" type="textarea" value="Double Cup Espresso" id="example-number-input">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="panel-footer" style="margin-bottom:-14px;">
                                                            <input type="submit" class="btn btn-success" value="Add" style="float: right;" />
                                                            <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                            <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                      
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
        
            <div class="content">
                <a href="<?php echo base_url(); ?>adminClients" class="btn btn-success navbar-btn pull-left">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-">
                            <div class="card">
                                <div class="card-header " data-background-color="green">
                                <h4 class="title">List of Clients
                                     <a class="btn btn-info btn-lg" data-toggle="modal" data-target="#edit" data-original-title style="float: right; margin-right: 30px; margin-top: -12px; ">
                                    Edit Contract</a></h4>
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
                                                        <td align="left">December 28, 2017</td>
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
                                                <h6 class="card-title">Machine:</h6>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Brewer:</b></td>
                                                        <td align="left">Saeco</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Type:</b></td>
                                                        <td align="left">Double Cup Espresso</td>
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