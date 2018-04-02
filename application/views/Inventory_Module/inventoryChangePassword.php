
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

    <title>Change Password</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css">
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
</head>
<style>
.title {
    font-size: large;
    padding-top: 15px;

}

.label-count {
    height: 15px;
    width: 15px;
    border-radius: 50%;
    display: inline-block;
    background: red; 
    text-align: center;
    color: white;
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
                                        
                                       <span class="label-count"><b> <?php 
                                           
                              $total = 0;
                                for($i = 0; $i <= 3 ;$i++){
                                     if(!empty($reorder[$i])){
                                          foreach($reorder[$i] as $object){
                                              $total = $total+1;
                                                 
                                             }
                                      }
                                 } echo $total;
                                           ?>   </b></span> </a>
                            
                            
                            
                            
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
            </nav><style>
.title {
    font-size: large;
    padding-top: 15px;

}

.label-count {
    height: 15px;
    width: 15px;
    border-radius: 50%;
    display: inline-block;
    background: red; 
    text-align: center;
    color: white;
}


</style>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title"><i class="material-icons">lock_outline</i> Change Password</h4>
                                    <p class="category">It's a good idea to use a strong password that you're not using elsewhere</p><br>
                                    <p>Note: if you are only going to change your Username, you are still required to fill the Password for confirmation. Thank you!</p>
                                </div>
                                <?php
                                    $error = $this->session->flashdata('error');
                                    $success = $this->session->flashdata('success');
                                    if(!empty($error)){
                                        ?>
                                        <div class="alert alert-danger" style="margin: 20px; text-align: center; ">
                                            <strong><?php echo $error; ?></strong> 
                                        </div>
                                  <?php } else if(!empty($success)){ ?>
                                        <div class="alert alert-success" style="margin: 20px; text-align: center; ">
                                            <strong><?php echo $success; ?></strong> 
                                        </div>
                                  <?php } ?> 
                                <div class="card-content">
                                    <?php echo form_open('salesChangePassword/updatePwd') ?>
                                    <!-- <form action="#" method="post" accept-charset="utf-8"> -->
                                        <div class="modal-body" style="padding: 5px;">
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group label-floating">
                                                            <?php 
                                                                $u_name = $this->session->userdata('username');
                                                            ?>

                                                            <label for="email">Username:</label>
                                                            <?php echo form_input(['name' => 'u_name', 'id' => 'Username', 'placeholder' => 'Username', 'value' => $u_name, 'class' => 'form-control']); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group label-floating">
                                                            <label for="email">Password:</label>
                                                            <?php echo form_password(['name' => 'password', 'id' => 'inputPassword', 'placeholder' => 'Password', 'class' => 'form-control']); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group label-floating">
                                                            <label for="email">New Password:</label>
                                                            <?php echo form_password(['name' => 'newpassword', 'id' => 'inputPassword', 'placeholder' => 'New Password', 'class' => 'form-control']); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group label-floating">
                                                            <label for="email">Confirm New Password:</label>
                                                            <?php echo form_password(['name' => 'confpassword', 'id' => 'inputPassword', 'placeholder' => 'Password Confirmation', 'class' => 'form-control']); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer" style="margin-bottom:-14px;" align="center">
                                            <?php echo form_submit(['name' => 'submit', 'value' => 'Update Password', 'class' => 'btn btn-info' ]); ?>
                                        </div>
                                    <?php echo form_close(); ?>
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