<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Inventory Report</title>
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

<style type="text/css">
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
                    <li class="active">
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
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="content" style="margin-top: -100px;">
                <div class="container-fluid">
                    <div class="card">
                        <div class="content">
                            <div class="container-fluid">
                                 <div class="card-header" data-background-color="green">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs" data-background-color="green">
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminSalesReport">
                                            Sales Report
                                            <div class="ripple-container"></div>
                                        </a>
                                                </li> 
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminCollectionReport">
                                            Collection Report
                                            <div class="ripple-container"></div>
                                        </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>adminReceivableReport">
                                            Accounts Receivables Report
                                            <div class="ripple-container"></div>
                                        </a>
                                                </li>
                                                <span></span>
                                                 <li class="active">
                                                    <a href="<?php echo base_url(); ?>adminInventoryReport">
                                            Inventory Report
                                            <div class="ripple-container"></div>
                                        </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="content" style="margin-top: 0px; ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-20 col-md-12">
                            <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="card-content table-responsive">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                        <h4><b>COFFEE</b></h4></div>
                                    
                                    <?php $month_filt = $data5["datav"];
                                    $year = $this->db->query("SELECT year(now()) AS year;")->row()->year;
                                            $tomonth = $this->db->query("SELECT MONTH(NOW()) AS tomonth;")->row()->tomonth;
                                    
                                        if(isset($month_filt)){
                                            $dateObj   = DateTime::createFromFormat('!m', $month_filt);
                                            $monthName = $dateObj->format('F');
                                            ?>
                                            
                                    <?php
                                        }else{
                                            $dateObj   = DateTime::createFromFormat('!m', $tomonth);
                                            $monthName = $dateObj->format('F');
                                    ?>
                                        <label><H4><b> Current Month: <?php echo $monthName; ?> <?php echo $year; ?> </b></H4></label>
                                    <?php
                                        }
                                    ?>
                                    <form action="<?php echo base_url(); ?>AdminInventoryReport/date_filt" method="post" class="form-inline pull-right">
                                        <div class="form-group mb-2">
                                            <label>
                                                <H4><b> Working File: </b></H4> </label>
                                            <select class="form-control" onchange="this.form.submit()" id="" name="datefilt" style="text-align: center;">
                                                <option disabled selected value>  </option>
                                                <option value = "1" <?php if((isset($month_filt) && $month_filt == 1)){ echo 'selected="selected"'; }?>>January <?php echo $year; ?> </option>
                                                <option value = "2" <?php if((isset($month_filt) && $month_filt == 2)){ echo 'selected="selected"'; }?>>February <?php echo $year; ?> </option>
                                                <option value = "3" <?php if(isset($month_filt) && $month_filt == 3){ echo 'selected="selected"'; }?>>March <?php echo $year; ?> </option>
                                                <option value = "4" <?php if((isset($month_filt) && $month_filt == 4)){ echo 'selected="selected"'; }?>>April <?php echo $year; ?> </option>
                                                <option value = "5" <?php if((isset($month_filt) && $month_filt == 5)){ echo 'selected="selected"'; }?>>May <?php echo $year; ?> </option>
                                                <option value = "6" <?php if((isset($month_filt) && $month_filt == 6)){ echo 'selected="selected"'; }?>>June <?php echo $year; ?> </option>
                                                <option value = "7" <?php if((isset($month_filt) && $month_filt == 7)){ echo 'selected="selected"'; }?>>July <?php echo $year; ?> </option>
                                                <option value = "8" <?php if((isset($month_filt) && $month_filt == 8)){ echo 'selected="selected"'; }?>>August <?php echo $year; ?> </option>
                                                <option value = "9" <?php if((isset($month_filt) && $month_filt == 9)){ echo 'selected="selected"'; }?>>September <?php echo $year; ?> </option>
                                                <option value = "10" <?php if((isset($month_filt) && $month_filt == 10)){ echo 'selected="selected"'; }?>>October <?php echo $year; ?> </option>
                                                <option value = "11" <?php if((isset($month_filt) && $month_filt == 11)){ echo 'selected="selected"'; }?>>November <?php echo $year; ?> </option>
                                                <option value = "12" <?php if((isset($month_filt) && $month_filt == 12)){ echo 'selected="selected"'; }?>>December <?php echo $year; ?> </option>
                                            </select>
                                        </div>
                                        
                                    </form>
                                    <table id="coffeein" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date In</b></th>
                                                <th><b></b></th>
                                                <?php
                                                    $conntitle=mysqli_connect("localhost","root","","jhcs");
                                                    if ($conntitle->connect_error) {
                                                        die("Connection failed: " . $conntitle->connect_error);
                                                    } 
                                                    $sql="SELECT * FROM raw_coffee";
                                                    $result = $conntitle->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                ?>
                                                <th><b><?php echo $row["raw_coffee"]; ?></b></th>
                                                <?php
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                $conntitle->close();
                                                ?>
                                            </tr>
                                            <tr id="dt-header">
                                                <td><b>Beginning Inventory</b></td>
                                                <td></td>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM raw_coffee");
                                                if (isset($month_filt)){
                                                    if($month_filt == '1'){
                                                        foreach ($query->result() AS $row){
                                                            $begin ="SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) AS `beginning` FROM `trans_raw` NATURAL JOIN `inv_transact` WHERE  `raw_coffeeid` = '".$row->raw_id."' and month(transact_date) = 12;" ;
                                                    
                                                          $query2 = $this->db->query($begin);
                                                          if ($query2->num_rows() > 0) {
                                                          foreach ($query2->result() as $object) {
                                                               echo '<td><b>'  . number_format($object->beginning)  . '</b></td>' ;
                                                               }
                                                            }
                                                        }
                                                    }else{
                                                        foreach ($query->result() AS $row){
                                                        $begin ="SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) AS `beginning` FROM `trans_raw` NATURAL JOIN `inv_transact` WHERE  `raw_coffeeid` = '".$row->raw_id."' and month(transact_date) = ".$month_filt."- 1;" ;
                                                    
                                                          $query3 = $this->db->query($begin);
                                                          if ($query3->num_rows() > 0) {
                                                          foreach ($query3->result() as $object) {
                                                               echo '<td><b>'  . number_format($object->beginning)  . '</b></td>' ;
                                                               }
                                                            }
                                                        }
                                                    }
                                                
                                                        
                                                    
                                                }else{
                                                foreach ($query->result() AS $row){
                                                    $query4 = $this->db->query("SELECT month(now()) AS this_month");
                                                    if($query4->row()->this_month == '1'){
                                                $begin ="SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) AS `beginning` FROM `trans_raw` NATURAL JOIN `inv_transact` WHERE  `raw_coffeeid` = '".$row->raw_id."' and month(transact_date) = 12;" ;
                                                    }else{
                                                        $begin ="SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) AS `beginning` FROM `trans_raw` NATURAL JOIN `inv_transact` WHERE  `raw_coffeeid` = '".$row->raw_id."' and month(transact_date) = month(now()) - 1;" ;
                                                    }
                                              $query5 = $this->db->query($begin);
                                              if ($query5->num_rows() > 0) {
                                              foreach ($query5->result() as $object) {
                                                   echo '<td><b>'  . number_format($object->beginning)  . '</b></td>' ;
                                                   }
                                                }
                                                }
                                                }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                    

                                                    if($data1['coffeein']->num_rows() > 0){

                                                        foreach($data1['coffeein'] -> result() as $row)
                                                        {
                                                ?>
                                            <tr>
                                                <td><?php echo $row->transact_date; ?></td>
                                                <td><?php echo $row->supplier; ?></td>
                                                <?php
                                                $qcount1 = $this->db->query("SELECT * FROM raw_coffee");
                                                foreach ($qcount1->result() as $row2){
                                                    $colname1 = "coffin" . $row2->raw_id; ?>
                                                        <td><?php echo number_format($row->$colname1); ?> </td>
                                                <?php

                                                }
                                                
                                                ?>
                                            </tr>
                                            <?php
                                                    }

                                                }
                                                else{
                                                ?>
                                                    <tr>
                                                        <td colspan = 11 style = "text-align: center;"> <h3>No data found</h3> </td>
                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <th></th>
                                                <?php
                                                
                                                if (isset($month_filt)){
                                                    $query = $this->db->query("SELECT * FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $totalin ="SELECT raw_coffeeid, sum(quantity) as totalin from trans_raw NATURAL JOIN inv_transact where raw_coffeeid = '".$row->raw_id."' and type = 'IN' and month(transact_date) = '".$month_filt."';" ;
                                                  $query6 = $this->db->query($totalin);
                                                  if ($query6->num_rows() > 0) {
                                                  foreach ($query6->result() as $object) {
                                                       echo '<th>'  . number_format($object->totalin)  . '</th>' ;
                                                       }
                                                    }
                                                }
                                                }else{
                                                    $query = $this->db->query("SELECT * FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $totalin ="SELECT raw_coffeeid, sum(quantity) as totalin from trans_raw NATURAL JOIN inv_transact where raw_coffeeid = '".$row->raw_id."' and type = 'IN' and month(transact_date) = month(now());" ;
                                                  $query7 = $this->db->query($totalin);
                                                  if ($query7->num_rows() > 0) {
                                                  foreach ($query7->result() as $object) {
                                                       echo '<th>'  . number_format($object->totalin)  . '</th>' ;
                                                       }
                                                    }
                                                }
                                                }
                                                ?>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                </div><hr>
                   <div class="row">
                        <div class="card-content table-responsive">
                            <table id="coffeeout" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date Out</b></th>
                                                <th><b></b></th>
                                                <?php
                                                    $conntitle=mysqli_connect("localhost","root","","jhcs");
                                                    if ($conntitle->connect_error) {
                                                        die("Connection failed: " . $conntitle->connect_error);
                                                    } 
                                                    $sql="SELECT * FROM raw_coffee";
                                                    $result = $conntitle->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                ?>
                                                <th><b><?php echo $row["raw_coffee"]; ?></b></th>
                                                <?php
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                $conntitle->close();
                                                ?>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    

                                                    if($data6['coffeeout']->num_rows() > 0){

                                                        foreach($data6['coffeeout'] -> result() as $row)
                                                        {
                                                ?>
                                            <tr>
                                                <td><?php echo $row->transact_date; ?></td>
                                                <td><?php echo $row->client; ?></td>
                                                <?php
                                                $qcount2 = $this->db->query("SELECT * FROM raw_coffee");
                                                foreach ($qcount2->result() as $row3){
                                                    $colname2 = "coffout" . $row3->raw_id; ?>
                                                        <td><?php echo number_format($row->$colname2); ?> </td>
                                                <?php

                                                }
                                                
                                                ?>
                                            </tr>
                                            <?php
                                                    }

                                                }
                                                else{
                                                ?>
                                                    <tr>
                                                        <td colspan = 11 style = "text-align: center;"> <h3>No data found</h3> </td>
                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <th></th>
                                                <?php
                                                
                                                if (isset($month_filt)){
                                                    $query = $this->db->query("SELECT * FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $totalout ="SELECT raw_coffeeid, sum(quantity) as totalout from trans_raw NATURAL JOIN inv_transact where raw_coffeeid = '".$row->raw_id."' and type = 'OUT' and month(transact_date) = '".$month_filt."';" ;
                                                  $query8 = $this->db->query($totalout);
                                                  if ($query8->num_rows() > 0) {
                                                  foreach ($query8->result() as $object) {
                                                       echo '<th>'  . number_format($object->totalout)  . '</th>' ;
                                                       }
                                                    }
                                                }
                                                }else{
                                                    $query = $this->db->query("SELECT * FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $totalout ="SELECT raw_coffeeid, sum(quantity) as totalout from trans_raw NATURAL JOIN inv_transact where raw_coffeeid = '".$row->raw_id."' and type = 'OUT' and month(transact_date) = month(now());" ;
                                                  $query9 = $this->db->query($totalout);
                                                  if ($query9->num_rows() > 0) {
                                                  foreach ($query9->result() as $object) {
                                                       echo '<th>'  . number_format($object->totalout)  . '</th>' ;
                                                       }
                                                    }
                                                }
                                                }
                                                ?>
                                            </tr>
                                            <tr>







                                                <th>Ending Inventory</th>
                                                <th></th>
                                                <?php
                                                
                                                if (isset($month_filt)){
                                                    $query = $this->db->query("SELECT * FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $end ="SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM `trans_raw` NATURAL JOIN `inv_transact` WHERE  `raw_coffeeid` = '".$row->raw_id."' and month(transact_date) = '".$month_filt."';" ;
                                                  $query10 = $this->db->query($end);
                                                  if ($query10->num_rows() > 0) {
                                                  foreach ($query10->result() as $object) {
                                                       echo '<th>'  . number_format($object->ending)  . '</th>' ;
                                                       }
                                                    }
                                                }
                                                }else{
                                                    $query = $this->db->query("SELECT * FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $end ="SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM `trans_raw` NATURAL JOIN `inv_transact` WHERE  `raw_coffeeid` = '".$row->raw_id."' and month(transact_date) = month(now());" ;
                                                  $query11 = $this->db->query($end);
                                                  if ($query11->num_rows() > 0) {
                                                  foreach ($query11->result() as $object) {
                                                       echo '<th>'  . number_format($object->ending)  . '</th>' ;
                                                       }
                                                    }
                                                }
                                                }
                                                ?>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            
                            <!--<div class="row">
                                <div class="col-sm-6">
                                <div class="card-content table-responsive">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                    <h4><b>PACKAGING</b></h4></div>
                                      <div class="form-group col-xs-6">
                                    <label>Filter By:</label>
                                        <div class="input-group input-daterange">
                                            <input type="text" id="min" class="form-control" value="2000-01-01" >
                                            <span class="input-group-addon">to</span>
                                            <input type="text" id="max" class="form-control" value="<?php   echo date("Y-m-d") ?>" >
                                        </div>
                                    </div>
                                    <table id="package" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date In</b></th>
                                                <th><b>Supplier</b></th>
                                                <th><b>Bag</b></th>
                                                <th><b>Size</b></th>
                                                <th><b>Quantity</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($data2["packagein"] as $row)
                                                {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row->date_received; ?></td>
                                                         <td><?php echo $row->sup_company; ?></td>
                                                         <td><?php echo $row->bag; ?></td>
                                                         <td><?php echo number_format($row->size); ?></td>
                                                         <td><?php echo number_format($row->qty); ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                <div class="col-sm-6">
                                <div class="card-content table-responsive">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                    <h4><b>STICKER</b></h4></div>
                                      <div class="form-group col-xs-6">
                                    <label>Filter By:</label>
                                        <div class="input-group input-daterange">
                                            <input type="text" id="min" class="form-control" value="2000-01-01" >
                                            <span class="input-group-addon">to</span>
                                            <input type="text" id="max" class="form-control" value="<?php   echo date("Y-m-d") ?>" >
                                        </div>
                                    </div>
                                    <table id="sticker" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date In</b></th>
                                                <th><b>Supplier</b></th>
                                                <th><b>Sticker</b></th>
                                                <th><b>Quantity</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($data3["stickerin"] as $row)
                                                {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row->date_received; ?></td>
                                                         <td><?php echo $row->sup_company; ?></td>
                                                         <td><?php echo $row->sticker; ?></td>
                                                         <td><?php echo number_format($row->qty); ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                </div><hr>
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="card-content table-responsive">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                    <h4><b>MACHINE</b></h4></div>
                                      <div class="form-group col-xs-6">
                                    <label>Filter By:</label>
                                        <div class="input-group input-daterange">
                                            <input type="text" id="min" class="form-control" value="2000-01-01" >
                                            <span class="input-group-addon">to</span>
                                            <input type="text" id="max" class="form-control" value="<?php   echo date("Y-m-d") ?>" >
                                        </div>
                                    </div>
                                    <table id="machine" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date In</b></th>
                                                <th><b>Supplier</b></th>
                                                <th><b>Machine</b></th>
                                                <th><b>Quantity</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($data4["machinein"] as $row)
                                                {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row->date_received; ?></td>
                                                         <td><?php echo $row->sup_company; ?></td>
                                                         <td><?php echo $row->machine; ?></td>
                                                         <td><?php echo number_format($row->qty); ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div><hr>-->
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
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.Html5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
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
<script src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive.bootstrap.min.js"></script>


<script>
$(document).ready(function() {
    $('#coffeein').DataTable({
        "responsive": true,
        "orderCellsTop": true,
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
        buttons: [
            { extend: 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs', footer: true,
                customize: function ( win ) { 
                     $(win.document.body) .css( 'font-size', '10pt' )
                    .prepend( '<label style="position:absolute; top:55; left:5;"><H4><b><?php echo $monthName; ?> <?php echo $year; ?> </b></H4></label>');
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    $(win.document.body).find( 'thead' ).prepend('<div class="header-print">' + $('#dt-header').val() + '</div>');
                }
            },
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> Excel',"className": 'btn btn-success btn-xs', footer: true },
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs', footer: true, 
                orientation: 'portrait',
                        exportOptions: {
                         columns: ':visible'
                 
                        },
                    customize: function (doc) {
                        doc.defaultStyle.alignment = 'right';
                        doc.styles.tableHeader.alignment = 'center';
                        doc.pageMargins = [50,50,100,80];
                        doc.defaultStyle.fontSize = 10;
                        doc.styles.tableHeader.fontSize = 10;
                        doc.styles.title.fontSize = 12;
                         doc.content[1].table.widths = [ '14%', '14%', '14%', '14%', '14%', '14%', '14%', '14%']; }
            }
        ]
      
    });

});
</script>
<script>
$(document).ready(function() {
    $('#coffeeout').DataTable({
        "responsive": true,
        "orderCellsTop": true,
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
        buttons: [
            { extend: 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs', footer: true,
                customize: function ( win ) { 
                     $(win.document.body) .css( 'font-size', '10pt' )
                    .prepend( '<label style="position:absolute; top:55; left:5;"><H4><b><?php echo $monthName; ?> <?php echo $year; ?> </b></H4></label>');
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    $(win.document.body).find( 'thead' ).prepend('<div class="header-print">' + $('#dt-header').val() + '</div>');
                }
            },
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> Excel',"className": 'btn btn-success btn-xs', footer: true },
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs', footer: true, 
                orientation: 'portrait',
                        exportOptions: {
                         columns: ':visible'
                 
                        },
                    customize: function (doc) {
                        doc.defaultStyle.alignment = 'right';
                        doc.styles.tableHeader.alignment = 'center';
                        doc.pageMargins = [50,50,100,80];
                        doc.defaultStyle.fontSize = 10;
                        doc.styles.tableHeader.fontSize = 10;
                        doc.styles.title.fontSize = 12;
                         doc.content[1].table.widths = [ '14%', '14%', '14%', '14%', '14%', '14%', '14%', '14%']; }
            }
        ]
      
    });

});
</script>

</html>