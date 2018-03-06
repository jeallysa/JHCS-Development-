<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sell Product</title>
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
                <img src="../assets/img/logo.png" alt="image1" width="250px" height="150px">
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
                    <li>
                        <a href="<?php echo base_url(); ?>salesPenDelivery">
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
                                    <h3 class="title"><center>Walk-in Client Order</center></h3>
                                </div>

                                <form action="record" method="post" accept-charset="utf-8">
                                    <div class="card-content">
                                        <div class="modal-body" style="padding: 5px;">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                            <label for="email">Date</label>
                                                            <input class="form-control" type="date" name="date" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                            <label for="email">First Name:</label>
                                                            <input type="text" class="form-control" name="fname" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                            <label for="email">Last Name:</label>
                                                            <input type="text" class="form-control" name="lname" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div><hr>  

                                    <div class="modal-body" style="padding: 5px;">

                                            <div class="row-fluid">
                                                <div class="form-conttrol label-floating">
                                                    <div class="col-md-6">
                                                        <label>Coffee</label>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Quantity</label>
                                                    </div>
                                                </div>
                                            </div>
                                              
                                            <div id="education_fields"> </div>
                                            
                                            <div class="col-sm-6 nopadding">
                                              <div class="form-group">
                                                  <select class="selectpicker" data-live-search="true" name="blend_id">
                                                    <?php 
                                                    foreach($data3['blends'] as $row)
                                                    { 
                                                        echo '<option value="'.$row->blend_id.'">'.$row->blend." ".$row->bag." ".$row->size." g".'</option>';
                                                    }
                                                    ?>
                                                  </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-6 nopadding">
                                              <div class="form-group">
                                                  <div class="input-group">
                                                    <input type="number" class="form-control" id="qty" name="qty" value="qty" placeholder="qty" required="">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                    </div>
                                    <br><br>
                                    <div class="text-center" data-toggle="modal" data-target="#verify">
                                        <button type="submit" class="btn btn-warning">
                                          Record
                                        </button>
                                    </div>
                                </form> 
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
                                    <th><b>Coffee</b></th>
                                    <th><b>Bag</b></th>
                                    <th><b>Size</b></th>
                                    <th><b>Qty</b></th>
                                    <th><b>Price</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fiesta Blend Ground</td>
                                    <td>brown</td>
                                    <td>250 g</td>
                                    <td>2</td>
                                    <td>350</td>
                                </tr>
                            </tbody>
                        </table>

                        <hr>
                        <h3>Total Amount: Php 700.00</h3>
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
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/datepicker.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
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
<script src="../assets/js/bootstrap-select.js"></script>
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
<!-- <script type="text/javascript">
    var room = 1;
    function education_fields() {
     
        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass"+room);
        var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<div class="col-sm-6 nopadding"><div class="form-group"><select class="selectpicker" data-live-search="true" name="blend_id"> <?php foreach($data3['blends'] as $row){ echo '<option value="'.$row->blend_id.'">'.$row->blend." ".$row->bag." ".$row->size.'</option>'; } ?> </select></div></div><div class="col-sm-6 nopadding"><div class="form-group"><div class="input-group"><input type="number" class="form-control" id="qty" name="qty" value="qty" placeholder="qty" required><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
        
        objTo.appendChild(divtest)
    }
   function remove_education_fields(rid) {
       $('.removeclass'+rid).remove();
   }
</script> -->

<script type="text/javascript">
    var room = 1;
    function education_fields() {
     
        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass"+room);
        var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"><select class="form-control" id="educationDate" name="educationDate[]"><option value="Guatemala">Guatemala Rainforest</option><option value="Sunrise">Cordillera Sunrise</option><option value="Sumatra">Sumatra Night</option><option value="Espresso">Espresso</option></select></div></div><div class="col-sm-3 nopadding"><div class="form-group"><select class="form-control" id="educationDate" name="educationDate[]"><option value="clear">clear bag</option><option value="brown">brown bag</option></select></div></div><div class="col-sm-3 nopadding"><div class="form-group"><select class="form-control" id="educationDate" name="educationDate[]"><option value="250">250 g</option><option value="500">500 g</option><option value="1000">1000 g</option></select></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><input type="number" class="form-control" id="Degree" name="Degree[]" value="" placeholder="qty"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
        
        objTo.appendChild(divtest)
    }


    
   function remove_education_fields(rid) {
       $('.removeclass'+rid).remove();
   }
</script>

<!-- https://bootsnipp.com/snippets/AXVrV -->

</html>



