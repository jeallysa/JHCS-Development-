
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
                                           
                                            <li class="active">
                                                <a href="<?php echo base_url('ct_inventoryPOAdd'); ?>">
                                                    Add Purchase Order
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="">
                                                <a href="<?php echo base_url('ct_inventoryPOOrder'); ?>">
                                                    Orders
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="">
                                                <a href="<?php echo base_url('ct_inventoryPOUnpaidDelivery'); ?>">
                                                    Unpaid Delivery
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                               <li class="">
                                                <a href="<?php echo base_url('ct_inventoryPOTransactionHistory'); ?>">
                                                    Transaction History
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content ">
                                <br>
                                <div class="content">
                                    <div class="container-fluid">
                                        <div class="row">  
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header" data-background-color="blue">
                                                        <h4 style="text-align: center;">Supplier</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        
                                                        <form method = "post" action ="<?php echo base_url('ct_InventoryPOAdd/insertSupplier'); ?>">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">Supplier's Name</label>
                                                                        <select class="form-control" id="sel1" name = "dropdown">
                                                                            <option>-- --</option>
                                           <?php
                                                                          
                                                         foreach($suppliers as $object){ 
                                                            echo '<option>'  . $object->sup_company . '</option>' ;
                               
                                 
                                                          }  
                                  ?>                                                    
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group label-floating">
                                                                      <label for="email">Ordered Date:</label>
                                                                       <input class="form-control" type="date" name="date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">Credit Terms:</label>
                                                                        <input type="text" class="form-control" name="creditTerms">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">Trucking Fee</label>
                                                                        <input type="text" class="form-control" name = "truckingFee">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div align="center">
                                                                    <button type="submit" name = "insert"  value ="Insert" class="btn btn-success accept">Add</button>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <button class ="print pull-right"> Generate PDF</button>
                                                <form method = "post" action ="ct_InventoryPOAdd/insertOrder" id ="toBePrinted"> 
                                                    
                                                   
                                                    <div >
                                                        <h1>List of Order/s</h1>
                                                        <h3>PO #1</h3>
                                                        <p>Date of Recording: January 25, 2018
                                                        
                                                    </div>
                                                   
                                                    <div class="container col-md-12">
                                                        <table id="myTable" class=" table order-list">
                                                            <thead>
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Quantity/weight</th>
                                                                 
                                                                    <th>Unit Price</th>
                                                                    <th>Amount</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    
                                                                 
                                                                    <td class="col-sm-4">
                                                                          <select class="form-control" name= "<?php echo "item[]" ?>" id="item">
                                                                            <option>-- --</option>
                                                                              
                                                                              
                                                <?php
                                                                
                                                         foreach($suppliersItem as $object){ 
                                                            echo '<option>'  . $object->item_name . '</option>' ;
                               
                                 
                                                          }  
                                                ?> 
                                                                              
                                                                        </select>
                                                                    </td>
                                                                    <td class="col-sm-3">
                                                                        <input type="text" class="form-control" name="<?php echo "qty[]" ?>"  />
                                                                    </td>
                                                                    <td class="col-sm-3">
                                                                        <input type="text" class="form-control" name="<?php echo "unitPrice[]" ?>"  />
                                                                    </td>
                                                                    <td class="col-sm-3">
                                                                        <input type="text"  class="form-control" name="<?php echo "amount[]" ?>" />
                                                                    </td>
                                                                  
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                
                                                                <tr>
                                                                    <td colspan="5" style="text-align: left;">
                                                                        <input type="button" class="btn btn-md btn-block " id="addrow" value="Add Row" />
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                </tr>
                                                                
                                                                <tr>
                                                                <td><b>Trucking Fee</b></td>
                                                                    
                                                                    <td>    
                                                                              
                                                                              
                                                <?php
                                                      if(!empty($truckingFee)) { 
                                                              foreach($truckingFee as $object) {
                                                                echo $object->trucking_fee;
                                                                 }
                                                                 }
                                                             
                                                      
                                                 
                                                     ?>                         
                                                                  </td>   
                                                             
                                                                    
                                                                    
                                                                    
                                                                    <td></td>
                                                                    <td><center>5510.00</center></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td><b>Total Grams</b></td>
                                                                    <td><center>1102</center></td>
                                                                 
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                               
                                                                    <td><center><b>Sub total</b></center></td>
                                                                    <td><center><b>20510.00</b></center></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td> </td>
                                                                    <td> </td>
                                                               
                                                                    <td><center><b>Amount Due</b></center></td>
                                                                    <td><center><b>20510.00</b></center></td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        <div align="center">
                                                            <button type="submit" name = "submit"  value ="Insert" class="btn btn-success accept">Save</button>
                                                            <button type="button" class="btn btn-danger decline">Cancel</button>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    
                                               
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
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.php5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
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
    
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>

    
<script>
    $('.print').click(function(){
    var printme = document.getElementById('toBePrinted'); 
    
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
    
                })
</script>    
        



<script type="text/javascript">
    $(document).ready(function () {
    var counter = 2;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
     
        
cols +='<td><select class="form-control" name= "item[]"> <option>-- --</option><?php foreach($suppliersItem as $object){  echo '<option>'  . $object->item_name . '</option>' ;}?></select></td>';
        cols += '<td><input type="text" class="form-control" name="qty[]"/></td>';
        cols += '<td><input type="text" class="form-control" name="unitPrice[]"/></td>';
        cols += '<td><input type="text" class="form-control" name="amount[]"/></td>';
        cols += '<td><input type="button" class="ibtnDel btn btn-sm btn-danger "  value="Remove"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });

 /*       
   $('#save').click(function(){
      var item = [];
      var qty = [];
      var unitPrice = [];
      var amount = [];
      
      for(var i = 1 ; i > counter ; i++ ){
          $('#item'+i).(function(){
              item.push($(this).text());
                                  });
                                   
                                   
          $('#qty'+i).(function(){
              qty.push($(this).text());
                                  });
          $('#unitPrice'+i).(function(){
              unitPrice.push($(this).text());
                                  });
          $('#amount'+i).(function(){
              amount.push($(this).text());
                                  });
          $.ajax({
              url:"insert.php",
              method:"POST",
              data:{item:item ,qty:qty, unitPrice:unitPrice,amount:amount},
              success:function(data);
          })
     }
   });     
   */     

});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>
</html>