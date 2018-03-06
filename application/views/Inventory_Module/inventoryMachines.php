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
    <title>Inventory Stocks</title>
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
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
</head>

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
                    <li class="active">
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
                    <li>
                        <a href="<?php echo base_url(); ?>inventorySamplesList">
                            <i class="material-icons">dvr</i>
                            <p>Samples</p>
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
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <li>
                                    <p class="title">Hi, User 1</p>
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
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryStocks">
                                                        <i class="material-icons">local_cafe</i>Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryBlends">
                                                        <i class="material-icons">opacity</i>Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryPackaging">
                                                        <i class="material-icons">local_mall</i>Packaging
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryStickers">
                                                        <i class="material-icons">wallpaper</i>Stickers
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>inventoryMachines">
                                                        <i class="material-icons">local_laundry_service</i>Machines
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">Machine No.</b></th>
                                            <th><b class="pull-left">Machine</b></th>
                                            <th><b class="pull-left">Type</b></th>
                                            <th><b class="pull-left">Reorder Level (per pc)</b></th>
                                            <th><b class="pull-left">Stock Limit (per pc)</b></th>
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b class="pull-left">Number of Stocks (per pc)</b></th>
                                            <th><b class="pull-left">Cue Card</b></th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if($fetch_data->num_rows() > 0){
                                                    foreach ($fetch_data -> result() as $row)
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row->mach_id; ?></td>
                                                <td><?php echo $row->brewer; ?></td>
                                                <td><?php echo $row->brewer_type; ?></td>
                                                <td><?php echo $row->mach_reorder; ?></td>
                                                <td><?php echo $row->mach_limit; ?></td>
                                                <td><?php echo $row->sup_company; ?></td>
                                                <td><b><?php echo $row->mach_stocks; ?></b></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $row->mach_id; ?>">Details</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="<?php echo $row->mach_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span>Cue Card Details</h4>
                                                        </div>
                                                          
                                                      <div class="modal-body" style="padding: 5px;">
                                                          <label>Set Date from </label>
                                                            <input type="date" name="">
                                                            <label> to </label>
                                                            <input type="date" name="">
                                                          <button style="float: right;" onclick="printDiv('toBePrinted<?php echo $row->mach_id; ?>')"><i class="material-icons">print</i></button>
                                                        <div id="toBePrinted<?php echo $row->mach_id; ?>">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                                                <h3><b><?php echo $row->brewer; ?></b></h3>
                                                                <h4><?php echo $row->brewer_type; ?></h4>
                                                                <hr>
                                                            </div>
                                                        <table id="fresh-datatables" class="table table-striped table-hover responsive" cellspacing="0" width="100%">
                                                        <thead>
                                                          <tr>
                                                            <th><b>No.</b></th>
                                                            <th><b>Client/Supplier</b></th>
                                                            <th><b>Date</b></th>
                                                            <th><b>Quantity</b></th>
                                                            <th><b>Remarks</b></th>
                                                            <th><b>Type</b></th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                              $retrieveDetails ="SELECT * FROM jhcs.machine_out NATURAL JOIN machine NATURAL JOIN contracted_client where mach_id = '$row->mach_id';" ;
                                              $query = $this->db->query($retrieveDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->mach_salesID. '</td>' ,
                                                '<td>'  . $object->client_company  . '</td>' ,
                                                '<td>'  . $object->date  . '</td>' ,
                                                '<td>'  . $object->mach_qty  . '</td>' ;
                                                ?>
                                                    <td>Sales</td>
                                                    <td>OUT</td>
                                                 <?php   
                                                '</tr>' ;
                                              }
                                            }
                                        ?>  

                                        <?php
                                              $retrieveDetails2 ="SELECT * FROM jhcs.client_machreturn NATURAL JOIN contracted_client where mach_id = '$row->mach_id';" ;
                                              $query = $this->db->query($retrieveDetails2);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->client_machReturnID. '</td>' ,
                                                '<td>'  . $object->client_company  . '</td>' ,
                                                '<td>'  . $object->mach_returnDate  . '</td>' ,
                                                '<td>'  . $object->mach_returnQty  . '</td>' ;
                                                ?>
                                                    <td>Return</td>
                                                    <td>IN</td>
                                                 <?php   
                                                '</tr>' ;
                                              }
                                            }
                                        ?>  
                                                          
                                                        </tbody>
                                                      </table><hr>
                                                          <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-offset-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control">Total In :</label>
                                                                    <div class="col-md-4">
                                                                        <p>- pieces</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control">Total Out :</label>
                                                                    <div class="col-md-7">
                                                                        <p>- pieces</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control">Ending Inventory :</label>
                                                                    <div class="col-md-5">
                                                                        <p>- pieces</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Physical Count :</label>
                                                                        <div class="col-md-4">
                                                                            <input class="form-control" type="number" name="count" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Discrepancy :</label>
                                                                        <div class="col-md-4">
                                                                            <input placeholder="" class="form-control" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Remarks :</label>
                                                                        <div class="col-md-10">
                                                                            <textarea style="resize:vertical;" class="form-control" rows="2" name="remarks"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success accept">OK</button>
                                                          <button style="float: right;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <?php
                                                                }

                                                            }
                                                        else{
                                                         ?>
                                                        <tr>
                                                            <td colspan = 9 style = "text-align: center;"> <h3>No data found</h3> </td>
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
    $('#fresh-datatables').DataTable({
        select: {
            style: 'single'
        }

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
<script>
    function printDiv(divName){
        var printme = document.getElementById(divName); 
    
        var wme = window.open("","","width= 900","height=700");
    
        var cancel = document.getElementsByClassName("btn");
        for(var i=0; i < cancel.length; i++){  
            cancel[i].style.visibility = 'hidden';
        }
        wme.document.write(printme.outerHTML);
        wme.document.close();
        wme.focus();
        wme.print();
        wme.close();
    
      
        for(var i=0; i < cancel.length; i++){  
            cancel[i].style.visibility = 'visible';
        }
    
    }
</script> 

</html>