
        
        
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
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryItemList">
                                                        <i class="material-icons">list</i> Items
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>inventorySupplierList">
                                                        <i class="material-icons">local_shipping</i> Supplier
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryList">
                                                        <i class="material-icons">bubble_chart</i> Category and Type
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="type">
                                            <div class="col-sm-13">
                                                <div class="card-content">
                                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                                        <thead>
                                                            <th><b class="pull-left">Supplier ID</b></th>
                                                            <th><b class="pull-left">Supplier Company Name</b></th>
                                                            <th><b class="pull-left">Products</b></th>
                                                            <th><b class="pull-left">Contact Personnel</b></th>
                                                            <th><b class="pull-left">Position</b></th>
                                                            <th><b class="pull-left">Contact Number</b></th>
                                                            <th><b class="pull-left">Email Address</b></th>
                                                            <th><b class="pull-left">Activation</b></th>
                                                        </thead>
                                                        <tbody>
                                                            
                                                                 <?php
                                                            $i = 1;
                                                         
                                                                 foreach($supplier as $object ){ 
            
                                                                         echo '<tr>' ,
                                                                              '<td>'  . $object->supp_id . '</td>' ,
                                                                              '<td>'  . $object->sup_company   . '</td>' ,
                                                                              '<td>'  . $object->raw_coffee . '</td>' ,
																			  '<td>'  . $object->contact_personnel . '</td>' ,
                                                                              '<td>'  . $object->sup_position     . '</td>',
                                                                              '<td>'  . $object->sup_contact . '</td>' ,
                                                                              '<td>'  . $object->sup_email . '</td>' ;

                                                                      ?>
                                                                <td>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="<?php echo "myonoffswitch" . $i   ?>" checked>
                                                                        <label class="onoffswitch-label" for="<?php echo "myonoffswitch" . $i   ?>">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                  <?php         '</tr>' ; 
                                                                         
                                                                       $i++;
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
    </div>
</body>

<style type="text/css">
/* Custom Style */

.onoffswitch {
    position: relative;
    width: 110px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}

.onoffswitch-checkbox {
    display: none;
}

.onoffswitch-label {
    display: block;
    overflow: hidden;
    cursor: pointer;
    border: 2px solid #999999;
    border-radius: 20px;
}

.onoffswitch-inner {
    display: block;
    width: 200%;
    margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s;
    -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s;
    transition: margin 0.3s ease-in 0s;
}

.onoffswitch-inner:before,
.onoffswitch-inner:after {
    display: block;
    float: left;
    width: 50%;
    height: 30px;
    padding: 0;
    line-height: 30px;
    font-size: 14px;
    color: white;
    font-family: Trebuchet, Arial, sans-serif;
    font-weight: bold;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.onoffswitch-inner:before {
    content: " Enabled";
    padding-left: 10px;
    background-color: #2FCCFF;
    color: #FFFFFF;
}

.onoffswitch-inner:after {
    content: "Disabled";
    padding-right: 10px;
    background-color: #EEEEEE;
    color: #999999;
    text-align: right;
}

.onoffswitch-switch {
    display: block;
    width: 18px;
    margin: 7px;
    background: #FFFFFF;
    border: 2px solid #999999;
    border-radius: 20px;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 70px;
    -moz-transition: all 0.3s ease-in 0s;
    -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s;
    transition: all 0.3s ease-in 0s;
}

.onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}

.onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-switch {
    right: 0px;
}
</style>



<!--   Core JS Files   -->
<!--
    <script src="../assets/js/jquery-1.12.4.js"); ?>" type="text/javascript"></script>
-->
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
    $('#example').DataTable({
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
</html>