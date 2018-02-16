<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Update Contract</title>
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

    .select-pane {
        display: none;
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
                        <a href="<?php echo base_url(); ?>salesPenDelivery">
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
                                    <p class="title">Hi, User 1</p>
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
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <a href="<?php echo base_url(); ?>contract" class="btn btn-primary navbar-btn pull-left">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
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
                                <div class="col-xs-8">
                                    <div class="card-content">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Date Started:</label>
                                                        <input class="form-control" type="date" name="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Credit Terms:</label>
                                                        <input class="form-control" type="text" name="" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label for="email">Coffee Blend:</label>
                                                        <select class="form-control" name="coffee">
                                                            <option value="">Guatemala Rainforest</option>
                                                            <option value="">Cordillera Sunrise</option>
                                                            <option value="">Sumatra Night</option>
                                                            <option value="">Espresso</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label>Type of Bag</label>
                                                        <select class="form-control" name="coffee">
                                                            <option value="clear">Clear</option>
                                                            <option value="brown">Brown</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label>Size</label>
                                                        <select class="form-control" name="coffee">
                                                            <option value="clear">250g</option>
                                                            <option value="brown">500g</option>
                                                            <option value="brown">1000g</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label>Quantity</label>
                                                        <input class="form-control" name="coffeeType" type="number" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class=" btn btn-primary btn-sm" data-background-color="red" data-toggle="modal" data-target="#addnew" data-original-title>
                                                        Add Blend
                                                    </div>
                                                </div>
                                            </div>
                                            <!----modal for add new coffee blend ---->
                                            <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnew" aria-hidden="true">
                                                <div class="modal-dialog modal-md">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="panel-title" id="contactLabel"><center>Add Existing Blend</center></h4>
                                                        </div>
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
                                                                        <label>Add Another:</label>
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
                                                                                        <input class="form-control" />
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
                                                        <div class="panel-footer" align="center">
                                                            <input type="submit" class="btn btn-success" value="Add Blend" />
                                                            <input type="reset" class="btn btn-warning" value="Clear" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Machine Specifications:</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>Brewer</label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>Type</label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>Storage Capacity</label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>No. of Cups before refilling</label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>Dimension</label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>Weight</label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>Voltage</label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>Watts</label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label>User Interface: </label>
                                                        <input class="form-control" name="" type="text" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-round" type="submit">Save Contract</button>
                                            <a href="<?php echo base_url(); ?>contract" class="btn btn-primary btn-round">Back</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                    Home
                                </a>
                        </li>
                        <li>
                            <a href="#">
                                    Company
                                </a>
                        </li>
                        <li>
                            <a href="#">
                                    Portfolio
                                </a>
                        </li>
                        <li>
                            <a href="#">
                                    Blog
                                </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                    document.write(new Date().getFullYear())
                    </script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
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

</html>