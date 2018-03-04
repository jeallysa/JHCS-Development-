<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Machine</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" rel="stylesheet" />
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
    <style>
    .table thead,
    thead th {
        text-align: center;
        font-size: 140%;
    }

    .table tbody,
    tbody td {
        text-align: right;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>salesDashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>salesSellProduct">
                            <i class="material-icons">shopping_basket</i>
                            <p>Sell Products</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesClients">
                            <i class="material-icons">supervisor_account</i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReturns">
                            <i class="material-icons">assignment_return</i>
                            <p>Returns</p>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url(); ?>salesDelivery">
                            <i class="material-icons">local_shipping</i>
                            <p>Deliveries</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReceivables">
                            <i class="material-icons">library_books</i>
                            <p>Receivables</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesCollections">
                            <i class="material-icons">bubble_chart</i>
                            <p>Collections</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReport">
                            <i class="material-icons">assessment</i>
                            <p>Sales Summary</p>
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
                                        <a href="<?php echo base_url(); ?>salesUserProfile">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>salesChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>activitylogs">Activity Logs</a>
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
                        <a href="<?php echo base_url(); ?>salesSellProduct" class="btn btn-primary navbar-btn pull-left">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h3 class="title"><center>Retail Client Machine Purchase</center></h3>
                                </div>
                                <form action="add" method="post" accept-charset="utf-8">
                                <div class="card-content">
                                        <div class="modal-body" style="padding: 5px;">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group label-floating">
                                                            <label for="email">Date of Purchase:</label>
                                                            <input class="form-control" type="date" name="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group label-floating">
                                                            <label for="email">Client:</label>
                                                            <select class="selectpicker" data-live-search="true" name="client_id">
                                                            <?php 
                                                            foreach($data6['client'] as $row)
                                                            { 
                                                                echo '<option value="'.$row->client_id.'">'.$row->client_company.'</option>';
                                                            }
                                                            ?>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div><hr>  

                                <div class="modal-body" style="padding: 5px;">

                                        <div class="row">
                                            <div class="form-conttrol label-floating">
                                                <div class="col-md-5">
                                                    <label>Machine</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <label>Quantity</label>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div id="education_fields"> </div>
                                        
                                        <div class="col-sm-5 nopadding">
                                          <div class="form-group">
                                            <div class="">
                                              <select class="selectpicker" data-live-search="true" name="mach_id">
                                                <?php 
                                                foreach($data5['machine'] as $row)
                                                { 
                                                    echo '<option value="'.$row->mach_id.'">'.$row->brewer."/ ".$row->brewer.'</option>';
                                                }
                                                ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-sm-5 nopadding">
                                          <div class="form-group">
                                              <div class="input-group">
                                                <input type="number" class="form-control" id="qty" name="qty" value="qty" placeholder="qty">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#verify">
                                      Record
                                    </button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--modal for verification-->
      <!--   <div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="panel-title" id="contactLabel"><center>Verify Order</center> </h4>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Client: Juanito Perez</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>Date: January 22, 2018</h4>
                        </div>
                    </div>
                    <hr>
                    
                     <table class="table">
                        <thead>
                            <tr>
                                <th><b>Machine</b></th>
                                <th><b>Quantity</b></th>
                                <th><b>Price</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Saeco A</td>
                                <td>2</td>
                                <td>Php 10,000.00</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>
                    <h3>Total Amount: Php 20,000.00</h3>
                  </div>
                  <div align="center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
                </div>
            </div> -->
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/datepicker.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-select.js"></script>

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
<script type="text/javascript">
$(document).ready(function() {

    $('#example').DataTable();



    });

    $('table tbody tr  td').on('click', function() {
        $("#myModal").modal("show");
        $("#txtfname").val($(this).closest('tr').children()[0].textContent);
        $("#txtlname").val($(this).closest('tr').children()[1].textContent);
    });
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
</script>
<script type="text/javascript">
    var room = 1;
    function education_fields() {
     
        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass"+room);
        var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<div class="col-sm-5 nopadding"><div class="form-group"><select class="form-control" id="educationDate" name="educationDate[]"><option value="">Saeco A</option><option value="2015">Saeco B</option><option value="2016">Saeco C</option><option value="2017">Saeco C</option><option value="2018">Saeco A</option> </select></div></div><div class="clear"></div><div class="col-sm-5 nopadding"><div class="form-group"><div class="input-group"><input type="number" class="form-control" id="Degree" name="Degree[]" value="" placeholder="qty"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
        
        objTo.appendChild(divtest)
    }
   function remove_education_fields(rid) {
       $('.removeclass'+rid).remove();
   }
</script>

<!-- https://bootsnipp.com/snippets/AXVrV -->

</html>



