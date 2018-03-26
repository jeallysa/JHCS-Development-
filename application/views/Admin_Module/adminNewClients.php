<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>New Clients</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<style>
.title {
    font-size: large;
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Create New Account</h4>
                                    <p class="category">Fill in the client's details</p>
                                </div>
                                <div class="card-content">
                                    <form role="form" action="<?php echo base_url();?>addClient/insertClient" method="post">
                                        <h5 style="text-align: center;"> Company Details </h5>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="client" placeholder="Company Name" type="text" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Company Name should only countain letters" required autofocus />
                                    </div>
                                    

                                </div>
                                <div class="row">
                                       <div class="col-lg-12 col-md-12 col-sm-6">
                                        <textarea style="resize:vertical;" class="form-control" placeholder="Address" rows="2" name="address" required></textarea>
                                    </div>                             
                                </div>
                                        <h6> Contact Personnel </h6>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="cpfname" placeholder="First Name" type="text" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="First Name should only countain letters" required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="cplname" placeholder="Last Name" type="text" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Last Name should only countain letters" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                            <input class="form-control" name="position" placeholder="Position" type="text" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Position should only countain letters" required />
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="email" placeholder="Email" type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="You have entered an invalid E-mail address. Please try again." />
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="tel_number" placeholder="Cellphone Number" type="number"  min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required />
                                    </div>
                                </div>
                                
                                <h6> Type: </h6>
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <select class="form-control" name="cli_type" placeholder="Client Type" type="text" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Client Type should only countain letters" required >
                                                  <option value="Retail">Retail</option>
                                                  <option value="Coffee Service">Coffee Service</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success" value="Add" />
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                                <input type="reset" class="btn btn-danger" value="Clear" />
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                                 <a href="<?php echo base_url(); ?>adminClients" style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</a>
                            
                                    </form>
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

</html>