
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
                                                <a href="<?php echo base_url(); ?>inventoryPOAdd">
                                                    Add Purchase Order
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOOrder">
                                                    Orders
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOUnpaidDelivery">
                                                    Unpaid Delivery
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                               <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOTransactionHistory">
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
                                                        
                                                        <form method = "post" action ="<?php echo base_url(); ?>InventoryPOAdd/insertSupplierToTemp">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">Supplier's Name</label>
                                                                        
                                                                        <select class="form-control" id="sel1" name = "dropdown" >
                                                                         
                                           <?php
                                                         if(!empty($tempExisting)){
                                                            echo '<option>'  .$tempExisting[0]->supp_name . '</option>' ; 
                                                         }else                  
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
                                                                      <label for="email">Order Date:</label>
                                                                       <input class="form-control" type="date" name="date" value="<?php if(!empty($tempExisting)){
                                                                                                                                      echo $tempExisting[0]->date; } ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">Credit Terms:</label>
                                                        <input type="number" class="form-control" name="creditTerms" min="1" max = "30"  value="<?php if(!empty($tempExisting)){
                                                                                                                                                echo $tempExisting[0]->credit_term; } ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group label-floating">
                                                              <label class="control-label">Trucking Fee</label>
                                                         <input type="number" class="form-control"  min="1"  name = "truckingFee" value = "<?php if(!empty($tempExisting)){
                                                                                                                                           echo $tempExisting[0]->trucking_fee; } ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div align="center">
                                                                    <button type="submit" name = "cancel"  value ="submit" class="btn btn-success accept">Add</button>
                                                                    <button type="submit" name = "cancel"  formaction="<?php echo base_url(); ?>InventoryPOAdd/cancelOrder" value ="cancel" class="btn btn-danger decline">Cancel</button>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        
                                                        
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            <div class="col-md-8">
                                                <button class ="print pull-right"> Generate PDF</button>
                                                <form method = "post" action ="InventoryPOAdd/insertOrder" id ="toBePrinted"> 
                                                    
                                                   
                                                    <div >
                                                        <h1>List of Order/s</h1>
                                                         <?php $last = $lastPO[0]->supp_po_id;
                                                                $new = $last + 1;
                                                        echo '<h3> PO#' .$new  .'</h3>' ?>
                                                            
                                                        <p><?php echo "Date Of Recording " . date('m-d-Y') ?>
                                                        
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
                                                                          <select class="form-control" name= "<?php echo "item[]" ?>" id="item"  required>
                                                                           
                                                                              
                                                                              
                                                  <?php
                                                 
                                                          
                                                    for($i=0; $i <= 3 ; $i++){ 
                                                        if(!empty($suppliersItem[$i])){
                                                         foreach($suppliersItem[$i] as $object){ 
                                                             if($i==0){
                                                           echo '<option>'  . $object->raw_coffee . '</option>' ;
                                                           }
                                                                if($i==1){
                                                            echo '<option>'  . $object->sticker . '</option>' ;
                                                                 }
                                                               if($i==2){
                                                            echo '<option>'  . $object->package_name. '</option>' ;
                                                            }
                                                               if($i==3){
                                                            echo '<option>'  . $object->brewer_type . '</option>' ;
                                                            }
                                                          } 
                                                     }
                                                }
                                            ?>        
                                                           </select>
                                                                    </td>
                                                                    <td class="col-sm-3">
                                                                        <input type="number" class="form-control" min='1' name=" <?php echo "qty[]" ?>" required />
                                                                    </td>
                                                                    <td class="col-sm-3">
                                                                        <input type="text" class="form-control" name=""  id="" readonly/>
                                                                    </td>
                                                                    <td class="col-sm-3">
                                                                        <input type="text"  class="form-control" name="" id="" readonly/>
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
                                                                    <td><center><b><input type="text"  class="form-control" name="" id="" readonly value="xxx"/></b></center></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td><b>Total Grams</b></td>
                                                                    <td><center><b><input type="text"  class="form-control" name="" id="" readonly value="xxx"/></b></center></td>
                                                                 
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                               
                                                                    <td><center><b>Sub total</b></center></td>
                                                                    <td><center><b><input type="text"  class="form-control" name="" id="" readonly value="xxx"/></b></center></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td> </td>
                                                                    <td> </td>
                                                               
                                                                    <td><center><b>Amount Due</b></center></td>
                                                                    <td><center><b><input type="text"  class="form-control" name="" id=""  readonly value="xxx"/></b></center></td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        <div align="center">
                                                            <button type="submit" name = "submit"  value ="insert" class="btn btn-success accept">Save</button>
                                                            <button type="reset" name = "cancel"   class="btn btn-danger decline" formaction="InventoryPOAdd/cancelOrder">Reset</button>
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
     
        
cols +='<td><select class="form-control" name= "item[]"> <?php
                                                        for($i=0; $i < 4 ; $i++){       
                                                          if(!empty($suppliersItem[$i])){
                                                         foreach($suppliersItem[$i] as $object){
                                                               if($i==0){
                                                          echo '<option>'  . $object->raw_coffee . '</option>' ;
                                                           }
                                                             
                                                                if($i==1){
                                                            echo '<option>'  . $object->sticker . '</option>' ;
                                                            }
                                                               if($i==2){
                                                            echo '<option>'  . $object->package_name. '</option>' ;
                                                            }
                                                            
                                                               if($i==3){
                                                            echo '<option>'  . $object->brewer_type . '</option>' ;
                                                            }
                                                            
                                                          }
                                                        }
                                                     }
                                                ?> </select></td>';
        cols += '<td><input type="text" class="form-control" name="qty[]"/></td>';
        cols += '<td><input type="text" class="form-control" name=""/></td>';
        cols += '<td><input type="text" class="form-control" name=""/></td>';
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