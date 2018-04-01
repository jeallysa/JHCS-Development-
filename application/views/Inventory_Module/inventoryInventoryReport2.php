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
    <title>Inventory Report</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <link href="<?php echo base_url(); ?>assets/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
</head>

<style type="text/css">
label,
input {
    color: black;
}

.title {
    font-size: large;

}
</style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="<?php echo base_url(); ?>assets/img/sidebar-0.jpg">
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
                    <li class="active">
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
                        <a href="<?php echo base_url(); ?>inventoryItemList">
                            <i class="material-icons">storage</i>
                            <p>Items</p>
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
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content" style="margin-top: 0px; ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-20 col-md-12">
                            <div class="card">
                                <div class="card card-nav-tabs">
                                    <div class="card-header" data-background-color="blue">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <span class="nav-tabs-title"> </span>
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <span></span>
                                                    <li class="">
                                                        <a href="<?php echo base_url(); ?>inventoryInventoryReport">
                                                            Date In
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <span></span>
                                                    <li class="active">
                                                        <a href="<?php echo base_url(); ?>inventoryInventoryReport2">
                                                            Date Out
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="card-content table-responsive">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                    <h4><b>COFFEE</b></h4></div>
                                    <form class="form-inline pull-right">
                                        <div class="form-group mb-2">
                                            <label>
                                                <H4><b> Working File: </b></H4> </label>
                                            <select class="form-control" id="inputPassword2" style="text-align: center;">
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-sm">Next</button>
                                    </form>
                                      <div class="form-group col-xs-3">
                                    <label>Filter By:</label>
                                        <div class="input-group input-daterange">
                                            <input type="text" id="min" class="form-control" value="2000-01-01" >
                                            <span class="input-group-addon">to</span>
                                            <input type="text" id="max" class="form-control" value="<?php   echo date("Y-m-d") ?>" >
                                        </div>
                                    </div>
                                    <table id="" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date Out</b></th>

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

                                                    if($data1["inventoryout"]->num_rows() > 0){

                                                        foreach($data1["inventoryout"] -> result() as $row)
                                                        {
                                                ?>
                                            <tr>
                                                <td><?php echo $row->transact_date; ?></td>
                                                
                                                <?php
                                                for ($i = 1; $i <= $rowcount; $i++){
                                                    $colname = "coff" . $i?>
                                                        <td><?php echo number_format($row->$colname); ?> </td>
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
                                                <?php
                                                $query = $this->db->query("SELECT * FROM raw_coffee");
                                                foreach ($query->result() AS $row){
                                              $totalout ="SELECT raw_coffeeid, sum(quantity) as totalout from trans_raw NATURAL JOIN inv_transact where raw_coffeeid = '".$row->raw_id."' and type = 'OUT' and month(transact_date) = month(now());" ;
                                              $query2 = $this->db->query($totalout);
                                              if ($query2->num_rows() > 0) {
                                              foreach ($query2->result() as $object) {
                                                   echo '<th>'  . number_format($object->totalout)  . '</th>' ;
                                                   }
                                                }
                                                }
                                                ?>
                                                
                                            </tr>
                                            <tr>
                                                <th>Ending Inventory</th>
                                                <?php
                                                $query = $this->db->query("SELECT * FROM raw_coffee");
                                                foreach ($query->result() AS $row){
                                              $end ="SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) AS `ending` FROM `trans_raw` NATURAL JOIN `inv_transact` WHERE  `raw_coffeeid` = '".$row->raw_id."' and month(transact_date) = month(now());" ;
                                              $query3 = $this->db->query($end);
                                              if ($query3->num_rows() > 0) {
                                              foreach ($query3->result() as $object) {
                                                   echo '<th>'  . number_format($object->ending)  . '</th>' ;
                                                   }
                                                }
                                                }
                                                ?>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                </div><hr>
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
                                    <table id="" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date Out</b></th>
                                                <th><b>Client</b></th>
                                                <th><b>Bag</b></th>
                                                <th><b>Size</b></th>
                                                <th><b>Quantity</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $walkin ="SELECT walkin_date, package_type, package_size, walkin_qty FROM walkin_sales NATURAL JOIN coffee_blend NATURAL JOIN packaging;" ;
                                              $query = $this->db->query($walkin);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->walkin_date  . '</td>' ,
                                                '<td>  Walk-in </td>' ,
                                                '<td>'  . $object->package_type  . '</td>' ,
                                                '<td>'  . number_format($object->package_size)  . '</td>' ,
                                                '<td>'  . number_format($object->walkin_qty)  . '</td>' ,
                                                '</tr>' ;
                                              }
                                            }
                                        ?>
                                                            
                                                            <?php
                                              $contracted ="SELECT client_deliverDate, client_company, package_type, package_size, contractPO_qty FROM contracted_po NATURAL JOIN client_delivery NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging where delivery_stat='delivered';";
                                              $query = $this->db->query($contracted);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->client_deliverDate  . '</td>' ,
                                                '<td>'  . $object->client_company  . '</td>' ,
                                                '<td>'  . $object->package_type  . '</td>' ,
                                                '<td>'  . number_format($object->package_size)  . '</td>' ,
                                                '<td>'  . number_format($object->contractPO_qty)  . '</td>' ,
                                                '</tr>' ;
                                              }
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
                                    <table id="" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date Out</b></th>
                                                <th><b>Client</b></th>
                                                <th><b>Sticker</b></th>
                                                <th><b>Quantity</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $walkin1 ="SELECT walkin_date, sticker, walkin_qty from walkin_sales JOIN sticker on walkin_sales.sticker_id = sticker.sticker_id;;" ;
                                              $query = $this->db->query($walkin1);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->walkin_date  . '</td>' ,
                                                '<td>  Walk-in </td>' ,
                                                '<td>'  . $object->sticker  . '</td>' ,
                                                '<td>'  . number_format($object->walkin_qty)  . '</td>' ,
                                                '</tr>' ;
                                              }
                                            }
                                        ?>
                                                            
                                                            <?php
                                              $contracted1 ="SELECT client_deliverDate, client_company, sticker, contractPO_qty FROM contracted_client NATURAL JOIN client_delivery NATURAL JOIN contracted_po NATURAL JOIN sticker where delivery_stat='delivered';";
                                              $query = $this->db->query($contracted1);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->client_deliverDate  . '</td>' ,
                                                '<td>'  . $object->client_company  . '</td>' ,
                                                '<td>'  . $object->sticker  . '</td>' ,
                                                '<td>'  . number_format($object->contractPO_qty)  . '</td>' ,
                                                '</tr>' ;
                                              }
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
                                    <table id="" class="table hover order-column" cellspacing="0" width="100%">
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
                                                foreach($data2["machineout"] as $row)
                                                {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row->date; ?></td>
                                                         <td><?php echo $row->client_company; ?></td>
                                                         <td><?php echo $row->brewer; ?></td>
                                                         <td><?php echo number_format($row->mach_qty); ?></td>
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
    $('table.table').DataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
		buttons: [
            { "extend": 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs', footer: true },
			{ "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> Excel',"className": 'btn btn-success btn-xs', footer: true },
			{ "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs', footer: true }
        ]
    });
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });


});
</script>

<!--<script>   
    
    
    $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValue($("#min").val());
            var dateEnd = parseDateValue($("#max").val());
            var evalDate= parseDateValue(aData[2]);

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

    var oTable = $('table.table').dataTable({ 
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
    


</script>-->
</html>