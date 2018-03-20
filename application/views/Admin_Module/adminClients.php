<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Clients</title>
    <!--   Style   -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fresh-datatables.css">
    <!--   Fonts   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <!--   Style   -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fresh-datatables.css">
    <!--   Fonts   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

</head>

 <style>
        
    .table thead,
    thead th {
        text-align: center;
        font-size: 120%;
    }

    input[type=checkbox].toggle-switch {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        width: 4em;
        height: 2em;
        border-radius: 2em;
        background-color: #ddd;
        outline: 0;
        cursor: pointer;
        transition: background-color 0.09s ease-in-out;
        position: relative;
    }

    input[type=checkbox].toggle-switch:checked {
        background-color: #3af;
    }

    input[type=checkbox].toggle-switch::after {
        content: '';
        width: 2em;
        height: 2em;
        background-color: white;
        border-radius: 2em;
        position: absolute;
        transform: scale(0.7);
        left: 0;
        transition: left 0.09s ease-in-out;
        box-shadow: 0 0.1em rgba(0, 0, 0, 0.5);
    }

    input[type=checkbox].toggle-switch:checked::after {
        left: 2em;
    }
    .navbar {
        background-color: chartreuse;
    }
    </style>

    
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
        
            <div class="content" style="margin-top: 0px;">
                <div class="container-fluid">
                    <div class="card">
                         <div class="card-header " data-background-color="green">
                                <h4 class="title">List of Clients
                                    </h4>
                            </div>
                        <div class="card-content table-responsive">
                              <a href="<?php echo base_url(); ?>adminNewClients" class="btn btn-success" data-original-title style="float: right"> Create New Client</a>
                            <a href="<?php echo base_url(); ?>adminAddContract" class="btn btn-success" data-original-title style="float: right"> Create New Contract</a>
                            <div class="col-md-12 col-md-offset-0">
                                <div class="fresh-datatables">
                                    <!--  Available colors for the full background: full-color-blue, full-color-azure, full-color-purple, full-color-red, full-color-orange, full-color-purple, full-color-gray
                                    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-purple, toolbar-color-red, toolbar-color-orange, toolbar-color-purple, toolbar-color-gray -->
                                    <table id="fresh-datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th><b>Client No.</b></th>
                                                <th><b>Client</b></th>
                                                <th><b>Client Type</b></th>
                                                <th><b>Contact Personnel</b></th>
                                                <th><b>Position</b></th>
                                                <th><b>Address</b></th>
                                                <th><b>Email</b></th>
                                                <th><b>Cellphone No.</b></th>
                                                <th class="disabled-sorting"><b>Edit</b></th>
                                                <th><b class="pull-left">Actions</b></th>
                                                <th><b class="pull-left">Contract</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                                <?php
                                                    if($fetch_data->num_rows() > 0){

                                                        foreach($fetch_data -> result() as $row)
                                                        {
                                                ?>
                                                <tr>
                                                <td>CL-<?php echo $row->client_id; ?></td>
                                                <td><?php echo $row->client_company; ?></td>
                                                <td><?php echo $row->client_type; ?></td>
                                                <td><?php echo $row->contact_personnel; ?></td>
                                                <td><?php echo $row->client_position; ?></td>
                                                <td><?php echo $row->client_address; ?></td>
                                                <td><?php echo $row->client_email; ?></td>
                                                <td><?php echo $row->client_contact; ?></td>
                                                 <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit<?php echo $row->client_id; ?>">Edit</a>
                                                </td>
                                                    <td>
                                                    <div class="onoffswitch">
                                                         <?php
                                                        if($row->client_activation == 1){

                                                    ?>
                                                         <input type="checkbox" id="button<?php echo $row->client_id;?>" class="toggle-switch" data-toggle="modal" data-target="#deactivate<?php echo $row->client_id;?>" checked>
                                                    <?php
                                                        }else{

                                                    ?>

                                                        <input type="checkbox" id="button<?php echo $row->client_id;?>" class="toggle-switch" data-toggle="modal" data-target="#deactivate<?php echo $row->client_id;?>">
                                                    <?php
                                                        }

                                                    ?>
                                                    </div>
                                                </td>
                                                <div class="modal fade" id="deactivate<?php echo $row->client_id;?>" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading" >
                                                                <button type="button" class="close" data-dismiss="modal" onclick="document.getElementById('button<?php echo $row->client_id;?>').click()" aria-hidden="true">×</button>
                                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-warning-sign"></span> Activation/Deactivation </h4>
                                                            </div>
                                                            <form action="<?php echo base_url(); ?>AdminClients/activation" method="post" accept-charset="utf-8">
                                                                <div class="modal-body" style="padding: 5px;">
                                                                    <div class="row" style="text-align: center">
                                                                        <br>
                                                                        <h4> Are you sure you want to activate/deactivate this client?</h4>
                                                                        <br>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 form-group">
                                                                            <div class="form-group label-floating">
                                                                                <input class="form-control" type="hidden" name="deact_id" value="<?php echo $row->client_id; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                                    <input type="submit" class="btn btn-danger" value="Yes" />
                                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                                    
                                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                                    <button type="button" class="btn btn-success btn-close" onclick="document.getElementById('button<?php echo $row->client_id;?>').click()" data-dismiss="modal">No</button>
                                                                </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <td><a href="<?php echo base_url(); ?>adminContract" class="btn btn-sm btn-round" size="25">Contract</a></td>
                                                    
                                                <div class="modal fade" id="edit<?php echo $row->client_id; ?>" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="panel panel-primary">
                                                                    <div class="panel-heading">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Edit Account Information</h4>
                                                                    </div>
                                                                    <form action="<?php echo base_url(); ?>AdminClients/update" method="post" accept-charset="utf-8">
                                                                          <div class="modal-body" style="padding-left: 100px;">
                                                                             <div class="form-group row">
                                                                                <div for="example-number-input" class="col-2 col-form-label">
                                                                                    <label for="type">Company Name</label>
                                                                                    <input class="form-control" name="comp_name" type="text" value="<?php echo $row->client_company; ?>" id="example-number-input">
                                                                                </div>
                                                                            </div>
                                                                                
                                                                                 <p><div class="form-group row">
                                                                                <div for="example-number-input" class="col-2 col-form-label">
                                                                                    <label for="type">Client Type</label>
                                                                                    <input class="form-control" name="cli_type" type="text" value="<?php echo $row->client_type; ?>" id="example-number-input">
                                                                                </div>
                                                                            </div>
                                                                            <h5> Contact Personnel </h5>
                                                                                <div class="form-group row">
                                                                                <div for="example-number-input" class="col-2 col-form-label">
                                                                                    <label for="type">Last Name</label>
                                                                                    <input class="form-control" name="last_name" type="text" value="<?php echo $row->client_lname; ?>" id="example-number-input">
                                                                                </div>
                                                                                <div for="example-number-input" class="col-2 col-form-label">
                                                                                    <label for="type">First Name</label>
                                                                                    <input class="form-control" name="first_name" type="text" value="<?php echo $row->client_fname; ?>" id="example-number-input">
                                                                                </div>
                                                                            </div>
                                                                                <div class="form-group row">
                                                                                <div for="example-number-input" class="col-2 col-form-label">
                                                                                    <label for="type">Address</label>
                                                                                    <input class="form-control" name="address" type="text" value="<?php echo $row->client_address; ?>" id="example-number-input">
                                                                                </div>
                                                                            </div>
                                                                                <div class="form-group row">
                                                                                <div for="example-number-input" class="col-2 col-form-label">
                                                                                    <label for="type">Email</label>
                                                                                    <input class="form-control" name="email" type="text" value="<?php echo $row->client_email; ?>" id="example-number-input">
                                                                                </div>
                                                                            </div>
                                                                              
                                                                                <div class="form-group row">
                                                                                <div for="example-number-input" class="col-2 col-form-label">
                                                                                    <label for="type">Cellphone Number</label>
                                                                                    <input class="form-control" name="cell_no" type="number" value="<?php echo $row->client_contact; ?>" id="example-number-input">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <div for="example-number-input" class="col-2 col-form-label">
                                                                                    <label for="type"></label>
                                                                                    <input class="form-control" name="id" type="hidden" value="<?php echo $row->client_id; ?>" id="example-number-input">
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
                                            </tr>

                                            <?php
                                                    }

                                                }
                                                else{
                                                ?>
                                                    <tr>
                                                        <td colspan = 11 style = "text-align: center;"> <h3>No clients found</h3> </td>
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
</body>
<!--   Core JS Files   -->
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
    $('[data-toggle="tooltip"]').tooltip();   

    $('#fresh-datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }

    });


    var table = $('#fresh-datatables').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
        alert('You clicked on Like button');
    });
});
</script>
<script>
$(function() {
    $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
    });
})
</script>

</html>