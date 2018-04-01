
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
                                      
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-content table-responsive">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div class="fresh-datatables">
                                                <!--  Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange, full-color-purple, full-color-gray
                                                Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange, toolbar-color-purple, toolbar-color-gray -->
                                                <table id="fresh-datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th><b>Item</b></th>
                                                            <th><b>Type</b></th>
                                                            <th><b>Category</b></th>
                                                            <th><b>Unit Price</b></th>
                                                            <th><b>Supplier</b></th>
                                                            <th><b>Remarks</b></th>
                                                        </tr>
                                                        
                                                    </thead>
                                                    
                                                    <tbody>
                               <?php
                                                 
                                        for($i = 0 ; $i <= 3 ; $i++){           
                                            //if(!empty($Items[$i])){           
                                                foreach($items[$i] as $object){
                                                      if($i==0){
                                                        $category = "Raw Coffee";
                                                      echo '<tr>' ,
                                                            '<td>' . $object->raw_coffee . '</td>' ,
                                                            '<td>' . $object->raw_type . '</td>' ,
                                                            '<td>' . $category .          '</td>' ,
                                                            '<td>' . $object->unitPrice .  '</td>' ,
                                                            '<td>' . $object->sup_company . '</td>' ,
                                                            '<td>' . $object->raw_remarks . '</td>' ,
                                                            '</tr>' ;
                                                    
                                                             }
                                                    
                                                    if($i==1){
                                                        $category = "Sticker";
                                                      echo '<tr>' ,
                                                            '<td>' . $object->sticker . '</td>' ,
                                                            '<td>' . $object->sticker_type . '</td>' ,
                                                            '<td>' . $category .          '</td>' ,
                                                            '<td>' . $object->unitPrice .  '</td>' ,
                                                            '<td>' . $object->sup_company . '</td>' ,
                                                            '<td>' . $object->sticker_remarks . '</td>' ,
                                                            '</tr>' ;
                                                    
                                                             }
                                                    
                                                    
                                                    if($i==2){
                                                        $category = "Packaging";
                                                      echo '<tr>' ,
                                                            '<td>' . $object->package_type . '</td>' ,
                                                            '<td>' . $object->package_size . '</td>' ,
                                                            '<td>' . $category .          '</td>' ,
                                                            '<td>' . $object->unitPrice .  '</td>' ,
                                                            '<td>' . $object->sup_company . '</td>' ,
                                                            '<td>' . $object->package_remarks . '</td>' ,
                                                            '</tr>' ;
                                                    
                                                             }
                                                    
                                                    
                                                    if($i==3){
                                                        $category = "Machine";
                                                      echo '<tr>' ,
                                                            '<td>' . $object->brewer . '</td>' ,
                                                            '<td>' . $object->brewer_type . '</td>' ,
                                                            '<td>' . $category .          '</td>' ,
                                                            '<td>' . $object->unitPrice .  '</td>' ,
                                                            '<td>' . $object->sup_company . '</td>' ,
                                                            '<td>' . $object->mach_remarks . '</td>' ,
                                                            '</tr>' ;
                                                    
                                                             }
                                                    
                                                    
                                                    
                                                    
                                                        }
                                                            
                                                 // }
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
});
</script>

</html>