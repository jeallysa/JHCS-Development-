<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>New Item</title>
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
                            <p>User Accounts</p>
                        </a>
                    </li>
                    <li>
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
                                    <p class="title">Hi, Player!</p>
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
                                        <a href="#">Logout</a>
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
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Create New Item</h4>
                                    <p class="category">Fill the form</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Item no (disabled)</label>
                                                    <input type="text" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Item Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <div class="form-group label-floating">
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Category</label>
                                                    <select class="form-control" name="Type" placeholder="Type" type="text" required>
                                                        <option>Raw Coffee</option>
                                                        <option>Blended Coffee</option>
                                                        <option>Packaging</option>
                                                        <option>Coffee Machine</option>
                                                        <option>Coffee Filter</option>
                                                        <option>Sticker</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Type</label>
                                                    <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                                        <option>Light Roast</option>
                                                        <option>Medium Roast</option>
                                                        <option>City Roast</option>
                                                        <option>Existing Blend</option>
                                                        <option>Company Blend</option>
                                                        <option>Brown Bag</option>
                                                        <option>Clear Bag</option>
                                                        <option>Machine A</option>
                                                        <option>Sticker</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Supplier</label>
                                                    <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                                        <option>Supplier A</option>
                                                        <option>Supplier B</option>
                                                        <option>Supplier C</option>
                                                        <option>Supplier D</option>
                                                        <option>Supplier E</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Normal Price</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right">Add Item</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="<?php echo base_url(); ?>assets/img/logo.png" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">John Hay Coffee Service</h6>
                                    <h4 class="card-title">Create:</h4>
                                    <a class="btn btn-info btn-md" data-toggle="modal" data-target="#category">
                                    Category
                                    </a>
                                    <br>
                                    <a class="btn btn-info btn-md" data-toggle="modal" data-target="#type">
                                    Type
                                    </a>
                                </div>
                                <div class="modal fade" id="type" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Create New Type</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding-left: 100px;">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                                            <label class="pull-left">Under the Category of: </label>
                                                            <select class="form-control" name="Type" placeholder="Type" type="text" required>
                                                                <option>Raw Coffee</option>
                                                                <option>Blended Coffee</option>
                                                                <option>Packaging</option>
                                                                <option>Coffee Machine</option>
                                                                <option>Coffee Filter</option>
                                                                <option>Sticker</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                                            <input class="form-control" name="type" placeholder="Type" type="text" required autofocus />
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
                                <div class="modal fade" id="category" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Create New Category</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding-left: 100px;">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                                            <input class="form-control" name="category" placeholder="Category" type="text" required autofocus />
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