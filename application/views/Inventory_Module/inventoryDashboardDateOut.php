
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
    <title>Inventory Dashboard</title>
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
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
                    <li class="active">
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
                                       <span class="label-count" style='background-color: #f44336;'> <?php 
                                           
                              $total = 0;
                                for($i = 0; $i <= 3 ;$i++){
                                     if(!empty($reorder[$i])){
                                          foreach($reorder[$i] as $object){
                                              $total = $total+1;
                                                 
                                             }
                                      }
                                 } echo $total;
                                           ?>   </span> </a>
                            
                            
                            
                            
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
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_paste</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Raw Coffee</p>
                                    <h3 class="title"> <?php echo $data1['rawcoffeestock']; ?>
                                        <small>grams</small>
                                    </h3>
                                </div>
                                <a href="<?php echo base_url(); ?>inventoryStocks">
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Details
                                    </div>
                                </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">credit_card</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Packaging</p>
                                    <h3 class="title"> <?php echo $data2['packagingstock']; ?>
                                        <small>pieces</small>
                                    </h3>
                                </div>
                                <a href="<?php echo base_url(); ?>inventoryPackaging">
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Details
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">collections</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Stickers</p>
                                    <h3 class="title"> <?php echo $data3['stickerstock']; ?>
                                    <small>pieces</small>
                                    </h3>
                                </div>
                                <a href="<?php echo base_url(); ?>inventoryStickers">
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Details
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Machines</p>
                                    <h3 class="title"> <?php echo $data4['machinestock']; ?>
                                    <small>pieces</small>
                                    </h3>
                                </div>
                                <a href="<?php echo base_url(); ?>inventoryMachines">
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Details
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <form class="form-inline pull-right">
                        <div class="form-group mb-2">
                            <label>
                                <H4><b> Working File: </b></H4> </label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="OCTOBER" style="text-align: center;" disabled="">
                        </div>
                        <button type="submit" class="btn btn-info btn-sm">Next</button>
                    </form>
                    <div class="row">
                        <div class="col-lg-20 col-md-12">
                            <div class="card">
                                <div class="card card-nav-tabs">
                                    <div class="card-header" data-background-color="blue">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <span class="nav-tabs-title"> </span>
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li>
                                                        <h3 class="title">Inventory Report :    </h3>
                                                        <div class="ripple-container"> </div>
                                                    </li>
                                                    <span></span>
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>inventoryDashboard">
                                                            Date In
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <span></span>
                                                    <li class="active">
                                                        <a href="<?php echo base_url(); ?>inventoryDashboardDateOut">
                                                            Date Out
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover" id="out">
                                        <thead>
                                            <th><b>Date Out</b></th>
                                            <th><b>Client</b></th>
                                            <th><b>Grams</b></th>
                                            <th><b>Qty/Bag</b></th>
                                            <th><b>Total</b></th>
                                            <th><b>Coffee A</b></th>
                                            <th><b>Coffee B</b></th>
                                            <th><b>Coffee C</b></th>
                                            <th><b>Coffee D</b></th>
                                            <th><b>Coffee E</b></th>
                                            <th><b>Coffee F</b></th>
                                            <th><b>Packaging</b></th>
                                            <th><b>Service Type</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Oct 2, 2017</td>
                                                <td>Client 1</td>
                                                <td>500</td>
                                                <td>50</td>
                                                <td>-25000</td>
                                                <td>-</td>
                                                <td>-10000</td>
                                                <td>-2500</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-12500</td>
                                                <td>Clear Bag</td>
                                                <td>Retail</td>
                                            </tr>
                                            <tr>
                                                <td>Oct 2, 2017</td>
                                                <td>Client 2</td>
                                                <td>500</td>
                                                <td>1</td>
                                                <td>-500</td>
                                                <td>-51</td>
                                                <td>-376</td>
                                                <td>-</td>
                                                <td>-73</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>Clear Bag</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Oct 3, 2017</td>
                                                <td>Client 3</td>
                                                <td>500</td>
                                                <td>2</td>
                                                <td>-1000</td>
                                                <td>-</td>
                                                <td>-700</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-300</td>
                                                <td>Clear</td>
                                                <td>Coffee Service</td>
                                            </tr>
                                            <tr>
                                                <td>Oct 3, 2017</td>
                                                <td>Client 4</td>
                                                <td>250</td>
                                                <td>6</td>
                                                <td>-1500</td>
                                                <td>-300</td>
                                                <td>-1200</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>Brown Bag</td>
                                                <td>Retail</td>
                                            </tr>
                                            <tr>
                                                <td>Oct 4, 2017</td>
                                                <td>Client 4</td>
                                                <td>250</td>
                                                <td>6</td>
                                                <td>-1500</td>
                                                <td>-300</td>
                                                <td>-1200</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>Brown Bag</td>
                                                <td>Retail</td>
                                            </tr>
                                            <tr>
                                                <td>Oct 5, 2017</td>
                                                <td>Client 3</td>
                                                <td>500</td>
                                                <td>2</td>
                                                <td>-1000</td>
                                                <td>-</td>
                                                <td>-700</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-300</td>
                                                <td>Clear</td>
                                                <td>Coffee Service</td>
                                            </tr>
                                            <tr>
                                                <td><b>Total</b></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>-351</td>
                                                <td>-12276</td>
                                                <td>-2500</td>
                                                <td>-73</td>
                                                <td>-</td>
                                                <td>-12800</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><b>Ending Inventory</b></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>6649</td>
                                                <td>1724</td>
                                                <td>7500</td>
                                                <td>7927</td>
                                                <td>9000</td>
                                                <td>2200</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
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

    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

});
</script>

</html>