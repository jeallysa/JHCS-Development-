<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>New Contract</title>
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

.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
    background-color: #4caf50;
    border-color: #9c27b0;
    color: #FFFFFF;
    box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);
}

.page-header {
    height: 60vh;
    background-position: center center;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

a {
    color: #4caf50;
}

a:hover,
a:focus {
    color: #4caf50;
    text-decoration: none;
}

.navbar .dropdown-menu li a:hover,
.navbar .dropdown-menu li a:focus,
.navbar .dropdown-menu li a:active,
.navbar.navbar-default .dropdown-menu li a:hover,
.navbar.navbar-default .dropdown-menu li a:focus,
.navbar.navbar-default .dropdown-menu li a:active {
    background-color: #4caf50;
    color: #FFFFFF;
    box-shadow: 0 12px 20px -10px rgba(156, 39, 176, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
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
                                    <h4 class="title">Create New Contract</h4>
                                </div>
                                <div class="card-content">
                                   <form action="AdminAddContract/insert" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                    <div class="col-md-12 form-group">
                                         <div class="form-group label-floating">
                                            <label for="email">Client</label>
                                            <!--
                                            <select class="form-control" name="client_company" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Company Name should only countain letters">
                                                <option disabled selected value> -- select a client name -- </option>
                                                <?php 
                                                /*

                                                    foreach($data4['getName'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->client_id.'">'.$row->client_company.'</option>';
                                                    }
                                                */
                                                 ?>
                                            </select>
                                        --> 
                                            <?php
                                                $cli_id = $this->input->get('p'); 
                                                $query = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$cli_id."';");
                                                foreach($query->result() AS $row){
                                            ?>
                                            <input class="form-control" type="text" name="client" value="<?php echo $row->client_company?>" disabled>
                                            <input class="form-control" type="hidden" name="client_company" value="<?php echo $row->client_id?>">
                                            <?php
                                                }
                                            ?>
                                        </div>

                                        <div class="form-group label-floating">
                                            <label for="email">Date Started</label>
                                            <input class="form-control" name="date_started" type="date" class="no-border" value="<?php echo date("Y-m-d");?>" data-validate="required" message="Date of Purchase is recquired! min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d',strtotime(date('Y-m-d').'+1 days'))?>"">
                                        </div>
                                         <div class="form-group label-floating">
                                            <label for="email">Date Expiration</label>
                                            <input class="form-control" name="date_expiration" type="date" class="no-border" value="<?php echo date("Y-m-d");?>" data-validate="required" message="Date of Purchase is recquired! min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d',strtotime(date('Y-m-d').'+1 days'))?>"">
                                        </div>
                                         <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Credit Term</label>
                                            <input class="form-control" type="text" name="contract_term" required>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                     <div class="col-md-6 form-group">
                                           <div class="form-group label-floating">
                                            <label for="email">Blends</label>
                                            <select class="form-control" name="contract_blend" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Blends should only countain letters">
                                                <option disabled selected value> -- select a blend -- </option>
                                                <?php 

                                                    foreach($data1['getBlend'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->blend_id.'">'.$row->blend.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Blends Required Quantity</label>
                                            <input class="form-control" type="number" name="contract_bqty" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                           <div class="form-group label-floating">
                                            <label for="email">Packaging</label>
                                            <select class="form-control" name="contract_bag" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Bag should only countain letters">
                                                <option disabled selected value> -- select a packaging -- </option>
                                                <?php 

                                                    foreach($data2['getBag'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->package_id.'">'.$row->package_type.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-md-6 form-group">
                                           <div class="form-group label-floating">
                                            <label for="email">Size</label>
                                            <select class="form-control" name="contract_size" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Bag should only countain letters">
                                                <option disabled selected value> -- select a size -- </option>
                                                <?php 

                                                    foreach($data5['getPackage'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->package_id.'">'.$row->package_size.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div> 
                                    <?php
                                        $id = $this->input->get('p');
                                        $type = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$id."'")->row()->client_type;
                                        if ($type == "Coffee Service"){
                                    ?>
                                    
                                   <div class="col-md-6 form-group">
                                           <div class="form-group label-floating">
                                            <label for="email">Machine</label>
                                            <select class="form-control" name="contract_machine" required pattern="[a-zA-Z][a-zA-Z\s]*" required title="Machine should only countain letters">
                                                <option disabled selected value> -- select a machine -- </option>
                                                <?php 

                                                    foreach($data3['getMachine'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->mach_id.'">'.$row->brewer.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Machine Required Quantity</label>
                                            <input class="form-control" type="number" name="contract_mqty" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Machine Serial Number</label>
                                            <input class="form-control" type="text" name="contract_serial" min="0" oninput="validity.valid||(value='');" data-validate="required" max="" required>
                                        </div>
                                    </div>
                                   <?php }else{ 
                                                 ?>

                                        <div class="col-md-6 form-group">
                                           <div class="form-group label-floating">
                                            <label for="email">Machine</label>
                                            <input class="form-control" type="hidden" name="contract_machine" value ="0" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Machine Required Quantity</label>
                                            <input class="form-control" type="hidden" name="contract_mqty" min="0" value="0" data-validate="required" max="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Machine Serial Number</label>
                                            <input class="form-control" type="hidden" name="contract_serial" min="0" value="0" data-validate="required" max="" required>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>
                                </div> 
                            </div>
                            <div class="panel-footer" style="margin-bottom:-14px;">
                                <input type="submit" class="btn btn-success" value="Add" />
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                                <input type="reset" class="btn btn-danger" value="Clear" />
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                                 <a href="<?php echo base_url(); ?>adminClients" style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</a>
                            </div>
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