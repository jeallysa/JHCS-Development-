<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Existing Blends Inventory Stocks</title>
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
<style>
    /*
        td.highlight {
            background-color: whitesmoke !important;
        }
*/

    .table thead,
    thead th {
        text-align: center;
        font-size: 120%;
    }
    /* Custom Style */

    
    
    

    .navbar {
        background-color: chartreuse;
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
                    <li class = "active">
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
                        <div class="col-md-10 col-md-offset-1">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h3 class="title"><center>Edit Blends</center></h3>
                                </div>

                                <form action="<?php echo base_url(); ?>AdminBlends/edit_trial" method="post" accept-charset="utf-8">
                                    <div class="card-content">
                                        <div class="modal-body" style="padding: 5px;">
                                                
                                                <div class="row">
                                                    <?php
                                                            $id = $this->input->get('id');
                                                            foreach($edit_page->result() as $row){
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="form-group label-floating">
                                                            <label for="email">Blend Name</label>
                                                            <input class="form-control" type="text" name="blend_name" value="<?php echo $row->blend;?>" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group label-floating">
                                                            <label for="email">Price Per Unit</label>
                                                            <input type="number" class="form-control" name="price" value="<?php echo $row->blend_price;?>" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group label-floating">
                                                            
                                                            <label for="sel1">Package and Size:</label>

                                                              <select class="form-control" id="sel1" name="package_id">
                                                                <?php
                                                                    $pack = $this->db->query('SELECT * FROM packaging');
                                                                    foreach($pack->result() as $row5){

                                                                ?>
                                                                    <option value="<?php echo $row5->package_id; ?>"> <?php echo $row5->package_type; ?> <?php echo $row5->package_size; ?>g </option>
                                                                    <?php
                                                                    }
                                                                ?>
                                                              </select>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group label-floating">
                                                            
                                                            <label for="sel1">Blend Type:</label>

                                                              <select class="form-control" id="sel1" name="type">
                                                                
                                                                    <option value="Existing"> Company Blend </option>
                                                                    <option value="Client"> Client </option>
                                                                   
                                                              </select>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-2">
                                                        <div class="form-group label-floating">
                                                            
                                                            <label for="sel2">Sticker:</label>

                                                              <select class="form-control" id="sel2" name="stick">
                                                                <?php
                                                                    $stick = $this->db->query('SELECT * FROM sticker');
                                                                    foreach($stick->result() as $row6){

                                                                ?>
                                                                    <option value="<?php echo $row6->sticker_id; ?>"> <?php echo $row6->sticker; ?> </option>
                                                                    <?php
                                                                    }
                                                                ?>
                                                                   
                                                              </select>
                                                            
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                
                                                            <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" required="">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                
                                            </div>
                                            <?php

                                                }
                                                   
                                            ?>
                                                
                                    </div><hr>
                                    <h3 style="text-align: center;"> PROPORTIONS </h3>  
                                    <table class="table table-striped" id="table-mutasi">
                                <thead>
                                    <tr>
                                       <?php
                                        $conntitle=mysqli_connect("localhost","root","","jhcs");
                                        if ($conntitle->connect_error) {
                                            die("Connection failed: " . $conntitle->connect_error);
                                        } 
                                        $sql="SELECT * FROM raw_coffee WHERE raw_activation = 1";
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
                                    <tr>
                                        <?php

                                                $qcount = $this->db->query('SELECT * FROM raw_coffee');
                                                foreach($edit_page->result() as $row){
                                                        foreach($qcount->result() as $row2){
                                                            $colname = "per" . $row2->raw_id;
                                        ?>
                                        <td>
                                            <input onblur = "findTotal()" type="number" id="per" name="per[<?php echo $row2->raw_id;?>]" value="<?php echo $row->$colname; ?>" class="form-control">
                                        </td>
                                        <?php
                                                }
                                            }
                                        ?>
                                        
                                    </tr>
                                    <script>

                                        function findTotal(){
                                            var x = document.getElementsByName("per[<?php echo json_encode($row2->raw_id);?>]");
                                            var tot=0;
                                            for(var i=0;i<x.length;i++){
                                                if(parseInt(x[i].value))
                                                    tot += parseInt(x[i].value);
                                            }
                                            if (tot > 2){
                                                alert('100!');
                                            }
                                        }
                                    </script>
                                </tbody>
                            </table>
                                    <div class="text-center" data-toggle="modal" data-target="#verify">
                                        <button type="submit" class="btn btn-success">
                                          Save
                                        </button>
                                        <a href="<?php echo base_url(); ?>adminBlends" class="btn btn-danger"> Cancel</a>
                                    </div>
                                </form> 
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
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
		buttons: [
            { "extend": 'print', "text":'<i class="fa fa-files-o"></i> Print',"className": 'btn btn-default btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            },
            
			{ "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> Excel',"className": 'btn btn-success btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            },
            
			{ "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            }
        ]
    });
});

$('table tbody tr  td').on('click', function() {
    $("#myModal").modal("show");
    $("#txtfname").val($(this).closest('tr').children()[0].textContent);
    $("#txtlname").val($(this).closest('tr').children()[1].textContent);
});
</script>
<script>
$(function() {
    $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
    });
})
</script>

</html>