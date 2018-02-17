<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Dashboard</title>
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
                    <li class="active">
                        <a href="<?php echo base_url(); ?>adminDashboard">
                            <i class="material-icons">dashboard</i>
                            
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminItemList">
                            <i class="material-icons">list</i>
                            <p>Item</p>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Raw Coffee Beans</p>
                                    <h3 class="title">38,000 Grams</h3>
                                </div>
                                <a href="<?php echo base_url(); ?>adminProductInventory">
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
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Machines</p>
                                    <h3 class="title">120 Units</h3>
                                </div>
                                <a href="<?php echo base_url(); ?>adminMachines">
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
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Stickers</p>
                                    <h3 class="title">901 Pieces</h3>
                                </div>
                                <a href="<?php echo base_url(); ?>adminStickers">
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
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Packaging</p>
                                    <h3 class="title">3,900 Bags</h3>
                                </div>
                                <a href="<?php echo base_url(); ?>adminPackaging">
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">date_range</i> Details
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="green">
                            <h4 class="title">Sales</h4>
                            <p class="category">December 2017</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                               <thead>
                                            <tr>
                                                <th><b>Delivery Receipt No.</b></th>
                                                <th><b>Sales Invoice No.</b></th>
                                                <th><b>Date</b></th>
                                                <th><b>Client</b></th>
                                                <th><b>Coffee</b></th>
                                                <th><b>Bag</b></th>
                                                <th><b>Size</b></th>
                                                <th><b>Quantity</b></th>
                                                <th><b>Unit Price</b></th>
                                                <th><b>Total Amount</b></th>
                                                <th><b>Remarks</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2415</td>
                                                <td>3747</td>
                                                <td>Oct 1, 2017</td>
                                                <td>Lazada</td>
                                                <td>Fiesta Blend Ground</td>
                                                <td>brown</td>
                                                <td>250 g</td>
                                                <td>1</td>
                                                <td>138.09</td>
                                                <td>138.09</td>
                                                <td>Retail</td>
                                            </tr>
                                            <tr>
                                                <td>2943</td>
                                                <td>3747</td>
                                                <td>Oct 2, 2017</td>
                                                <td>Bloomfield Hotel/Patch Cafe</td>
                                                <td>Bloomfield Beans</td>
                                                <td>clear</td>
                                                <td>500 g</td>
                                                <td>24</td>
                                                <td>492.80</td>
                                                <td>11,827.20</td>
                                                <td>Coffee Services</td>
                                            </tr>
                                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header" data-background-color="green">
                            <h4 class="title">Client Statistics</h4>
                            <p class="category">Year 2017</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><b>Name of Client</b></th>
                                        <th><b>Percentage</b></th>
                                        <th><b>Amount</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Le Chef</td>
                                        <td>50%</td>
                                        <td>250000</td>
                                    </tr>
                                    <tr>
                                        <td>Manila Sales</td>
                                        <td>28%</td>
                                        <td>140000</td>
                                    </tr>
                                    <tr>
                                        <td>The Manor Hotel</td>
                                        <td>22%</td>
                                        <td>110000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header" data-background-color="green">
                            <h4 class="title">Pie Graph</h4>
                            <p class="category">Chart Representation</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div id="chartContainer" style="height: 220px; width: 100%;"></div>
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
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/canvasjs.min.js"></script>
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
<script>
window.onload = function() {
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        data: [{
            type: "pie",
            startAngle: 60,
            yValueFormatString: "##0\"%\"",
            indexLabel: "{label} {y}",
            dataPoints: [
                { y: 50, label: "Le Chef" },
                { y: 28, label: "Manila Sales" },
                { y: 22, label: "The Manor" }
            ]
        }]
    });
    chart.render();
}
</script>

</html>