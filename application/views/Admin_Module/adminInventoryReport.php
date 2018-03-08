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
                        <div class="card-content">
                        </div>
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
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
                                                                <a href="<?php echo base_url(); ?>adminReceivableReport">
                                                        Accounts Receivables Report
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                            </li>
                                                            <span></span>
                                                            <li class="a">
                                                                <a href="<?php echo base_url(); ?>adminCollectionReport">
                                                        Collection Report
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
                                                            <span></span>
                                                            <li class="">
                                                                <a href="<?php echo base_url(); ?>adminOrderReport">
                                                        PO Report
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                            </li>
                                                            <span></span>
                                                            <li class="">
                                                                <a href="<?php echo base_url(); ?>adminDeliveryReport">
                                                        Delivery Report
                                                        <div class="ripple-container"></div>
                                                   </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal fade" id="edit" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Edit Item Information</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding-left: 100px;">
                                                    <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Date In</label>
                                                            <input class="form-control" type="textarea" value="October 1, 2017" id="example-number-input">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Supplier</label>
                                                            <input class="form-control" type="textarea" value="Gourmet Farms" id="example-number-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                         <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Coffee A</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="2000 g" id="example-number-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Coffee B</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="2000 g" id="example-number-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Coffee C</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="2000 g" id="example-number-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Coffee D</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="2000 g" id="example-number-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Coffee E</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="2000 g" id="example-number-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Coffee F</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="2000 g" id="example-number-input">
                                                            </div>
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

                                
                                
                                <div class="card-content">
                                    <table id="example" class="display  hover order-column table table-responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date In</b></th>
                                                <th><b>Supplier</b></th>
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
                                                <th class="disabled-sorting"><b>Edit</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                             <?php
                                                    $con=mysqli_connect("localhost","root","","jhcs");
                                                    if (mysqli_connect_errno())
                                                      {
                                                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                                      }
                                                    $sql="SELECT * FROM raw_coffee";

                                                    if ($result=mysqli_query($con,$sql))
                                                      {

                                                      $rowcount=mysqli_num_rows($result);
                                                      mysqli_free_result($result);
                                                      }
                                                      mysqli_close($con);

                                                    if($fetch_data->num_rows() > 0){

                                                        foreach($fetch_data -> result() as $row)
                                                        {
                                                ?>
                                            <tr>
                                                <td><?php echo $row->transact_date; ?></td>

                                                <td><?php echo $row->sup_company; ?></td>
                                                
                                                <?php
                                                for ($i = 1; $i <= $rowcount; $i++){
                                                    $colname = "coff" . $i?>
                                                        <td><?php echo $row->$colname; ?> </td>
                                                <?php

                                                }
                                                
                                                ?>

                                                <!--
                                                <td>3000 g</td>
                                                <td>8000 g</td>
                                                <td>4000 g</td>
                                                <td>5000 g</td>
                                                <td>3000 g</td>
                                                <td>7000 g</td> -->
                                                <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                </td>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.Html5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>


<script>   
    
    
    $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValue($("#min").val());
            var dateEnd = parseDateValue($("#max").val());
            var evalDate= parseDateValue(aData[4]);

            if (evalDate >= dateStart && evalDate <= dateEnd) {
                return true;
            }
            else {
                return false;
            }
    });
    //Date Converter
    function parseDateValue(rawDate) {
        var month = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        var dateArray = rawDate.split(" ");
        var parsedDate = dateArray[2] + month + dateArray[0];
        return parsedDate;
    }


    var oTable = $('#example').dataTable({ 
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
		buttons: [
            { "extend": 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs' },
			{ "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> Excel',"className": 'btn btn-success btn-xs' },
			{ "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs' }
        ]
    });

    $('#min,#max').datepicker({
        format: "yyyy-mm-dd",
        weekStart: 1,
        daysOfWeekHighlighted: "0",
        autoclose: true,
        todayHighlight: true
    });

    // Event Listeners
    $("#min").datepicker().on( 'changeDate', function() {
        oTable.fnDraw(); 
    });
    $("#max").datepicker().on( 'changeDate', function() { 
        oTable.fnDraw(); 
    });
    


</script>

</html>