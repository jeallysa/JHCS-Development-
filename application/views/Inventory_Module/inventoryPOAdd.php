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
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="css.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
</head>
<style>
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
                    <li class="">
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
                    <li class ="active">
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
                            
                               
       <!------------------                                          NOTIFICATION                    ---------------------------------->           
                            
                            
                            
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">shopping_basket</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                       <span class="label-count" style='background-color: #f44336;'> <?php 
                                           
                              $total = 0;
                                for($i = 0; $i <= 3 ;$i++){
                                     if(!empty($reorder[$i])){
                                          foreach($reorder[$i] as $object){
                                              $total = $total+1;
                                                 
                                             }
                                      }
                                 } echo $total;
                                           ?>   </span> </a>
                            
                            
                            
                            
                                <ul class="dropdown-menu">
                                    
                                   <?php 
                                 for($i = 0; $i <= 3 ;$i++){
                                     if(!empty($reorder[$i])){
                                          foreach($reorder[$i] as $object){
                                            echo   '<li>' . $object->name . "     " . $object->type. '</li>';
                                                 
                                             }
                                      }
                                 }
                                    ?>
                                   
                                </ul>
                            
                            
                            
                            
                            
    <!------------------                                          NOTIFICATION                    ---------------------------------->           
                
                            
                            
                            
                            
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
                            
                                <div class="content">
                                    <div class="container-fluid">
                                        
                                        <div class="row">  
                                            
                                            
                                                                   
              <!------------------------------                                FORM1                                        ----------------------------------------------->                            
                                                    
                                            
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header" data-background-color="blue">
                                                        <h4 style="text-align: center;">Supplier</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        
                                                   
                                                        
                                        <form method ="post" action ="InventoryPOAdd/insertSupplierToTemp" id="form1" >
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">Supplier's Name</label>
                                                                        
                                                                        <select class="form-control" id="supplier" name = "dropdown" >
                                                                    
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
                                                                        
                                                                        
                                                                        
                                                                       <input class="form-control" type="date" name="date" id ="poDate" value="<?php if(!empty($tempExisting)){
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
                                                                    
                                                 <input type='submit' value='Add'  id ='submitInfo'  class='btn btn-success accept' >   
                                                 <button type="submit" name = "cancel"  formaction="<?php echo base_url(); ?>InventoryPOAdd/cancelPO" value ="cancel" class="btn btn-danger decline">Cancel</button>
                                                                    
                                                                </div>
                                                            </div>
                                        </form>
                                                        
                                                        
                                                    </div>
                                                </div> 
                                            </div>                                                
                               
                                            
              <!-------------------------------------------------              FORM2                                 ----------------------------------------------->                                     
                                      <div  id="printThis" >  
                                        <div class="col-md-8" id="form2" >
                                            <button class ="btn-print pull-right" id="printer">Generate PDF</button>
                                                <form method = "post" action ="InventoryPOAdd/insertTempOrder" id ="form2"> 
                                                    
                                                    <div >
                                                        <h1>List of Order/s</h1>
                                                        
                                                         <?php if(!empty($lastPO[0])){
                                                                $last = $lastPO[0]->supp_po_id;
                                                                $new = $last + 1;
                                                                echo '<h3> PO#' .$new  .'</h3>';
                                                               } 
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        <p><?php echo "Date Of Recording " . date('m-d-Y') ?>
                                                        
                                                    </div>
                                                   
                                                    <div class="container col-md-12" id ="notThis">
                                                        <table id="myTable" class=" table order-list">
                                                            <thead>
                                                                <tr>
                                                                    <th><b>Item</b></th>
                                                                    <th><b>Quantity/weight</b></th>
                                                                    <th><b>Type</b></th>
                                                                    <th><b>Unit Price</b></th>
                                                                    <th><b>Amount</b></th>
                                                                    
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                   
                                                               <td class='col-sm-3'>
                                                                      <select class="form-control" name="item" id ="item" required>
                                                                            <option value = "">CHOOSE ITEM</option>
                                                                           
                                                  <?php
                                                          
                                                    for($i=0; $i <= 3 ; $i++){ 
                                                        if(!empty($suppliersItem[$i])){
                                                         foreach($suppliersItem[$i] as $object){ 
                                                             if($i==0){ 
                                                           echo '<option value = "'.$object->raw_coffee.'">'  . $object->raw_coffee . '</option>' ;
                                                           }
                                                                if($i==1){
                                                            echo '<option value = "'.$object->sticker.'">'    . $object->sticker .    '</option>' ;
                                                                 }
                                                               if($i==2){
                                                            echo '<option value = "'.$object->package_type.'">'  . $object->package_type. '</option>' ;
                                                            }
                                                               if($i==3){
                                                            echo '<option value = "'.$object->brewer.'">'  . $object->brewer . '</option>' ;
                                                            }
                                                          } 
                                                     }
                                                }
                                            ?>        
                                                                          
                                                                    </select>
                                                           </td>
                                                          <td class="col-sm-3">
                                                     <input type="number" class="form-control" min='1' name="qty" id = "qty" required/>
                                                           </td>
                                                                    
                                                                    
                                                            <td class='col-sm-3'>
                                                                      <select class="form-control" name = "itemType"  id = "itemType" required >
                                                                            <option value="">Select Type</option>      
                                                                     </select>
                                                            </td>    
                                                                   
                                                                    
                                                           <td class="col-sm-3">
                                                     <input type="text" class="form-control" name="unitPrice"  id = "unitPrice" readonly/> 
                                                           </td>
                                                                  
                                                                    
                                                            <td class="col-sm-3">
                                                      <input type="text"  class="form-control" name="amount"   id = "amount" readonly/> 
                                                            </td>
                                                                  
                                                                </tr>
                                                         <tr>
                                                                    <td colspan="5" style="text-align: left;">
                                                                        <button type="submit" class="btn btn-md btn-block" id="addToTemp" value="Add" />Add
                                                                       
                                                                    </td>
                                                         </tr>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                </form>               
                                         </div>            
                                                    
                                               
                                        
                                             
                                             
                                             
                                             
                                             
      <!------------------------------                                        FORM3                                ----------------------------------------------->                                              
                                             
                                             
                                  
                                    <div>          
                                         <form method="post" action="InventoryPOAdd/insertOrder" id="form3">
                                                <div class="container col-md-8">
                                                        <table id="myTableRes" class=" table order-list">
                                                            <thead>
                                                                <tr>
                                                                    <th><b>Item</b></th>
                                                                    <th><b>Quantity/weight</b></th>
                                                                    <th><b>Type</b></th>
                                                                    <th><b>Unit Price</b></th>
                                                                    <th><b>Amount</b></th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                                <?php  
                                                                $counter = 1;
                                                                    if(!empty($TempOrdered)){
                                                                         foreach ($TempOrdered as $object) {
                                                                         echo '<tr>' ,
      '<td class="col-sm-3"><input type="text" class="form-control" name="item_name[]" id="item_name'.$counter.'" value ="'.$object->item_name. '" readonly required>   </td>' ,
      '<td class="col-sm-3"><input type="text" class="form-control" name="qty[]"       id="qty'.$counter.'" value ="'.$object->qty       .'" readonly required>  </td>' ,
      '<td class="col-sm-3"><input type="text" class="form-control" name="type[]"      id="type'.$counter.'" value ="'.$object->type      .'" readonly required>   </td>' ,
      '<td class="col-sm-3"><input type="text" class="form-control" name="unitPrice[]" id="unitPrice'.$counter.'" value ="'.$object->unitPrice .'" readonly required>   </td>' ,
      '<td class="col-sm-1"><input type="text" class="form-control" name="amount[]"    id="amount'.$counter.'" value ="'.$object->amount    .'" readonly required>   </td>' ,
                                                                              '</tr>' ;
                                                                             $counter++;
                                                                             }
                                                                  
                                                                        }
                                                                ?>  
                                                
                                                
                                                        </tbody>
                            
                                                                <tr>
                                                                    <td><b>Total Grams/Qty</b></td>
                                                                    <td><center><b><input type="number"  class="form-control" name="totalItem" id="totalItem" readonly required/></b></center></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            
                                                                <tr>
                                                                     <td><b>Trucking Fee</b></td>
                                                                     <td><b><input type="number" class="form-control" name="truckingFee" id="truckingFee" value="<?php if(!empty($truckingFee)) { foreach($truckingFee as $object) { echo $object->trucking_fee; }}  ?>" readonly /></b></td>  
                                                                     <td></td>
                                                                     <td><!--<center><b><input type="number"  class="form-control" name="" id="" readonly required/></b></center> --></td>
                                                                </tr>
                                                            
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><center><b>Sub total</b></center></td>
                                                                    <td><center><b><input type="number"  class="form-control" name="subTotal"   id="subTotal"  readonly required/></b></center></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><center><b>Amount Due</b></center></td>
                                                                    <td><center><b><input type="number" class="form-control" name="totalAmount"  id="totalAmount" readonly required/></b></center></td>
                                                                </tr>
                                                        
                                                        </table>
                                                         <div align="center">
                                  
                                    <input type='submit' value='save' id = 'submitOrder'  class='btn btn-success accept' >                         
                                    <button type="submit"  name = "cancel"  formaction="<?php echo base_url(); ?>InventoryPOAdd/resetOrder" value ="cancel" class="btn btn-danger decline">Cancel</button>
                                                            
                                                        </div>
                                                    </div>
                                               </form> 
                                            </div>    
  <!------------------------------                                        End Form 3                                ----------------------------------------------->                                              
                                                  
                                   
                                                
                                              
                                                
                                               </div>  <!------------------------------END   FORM 2 and 3  DIV------------------------------------->  
                                            
                                            
             
   <div class="modal fade" id="invalidOrder" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ERROR:</h4>
        </div>
        <div class="modal-body">
            <center><p>Invalid Order</p></center>
        </div>
        <div class="modal-footer">
            <center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </center>
        </div>
      </div>
      
    </div>
  </div>
                                            
                                            
                                            
  <div class="modal fade" id="invalidDate" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ERROR:</h4>
        </div>
        <div class="modal-body">
            <center><p>Invalid Date</p></center>
        </div>
        <div class="modal-footer">
            <center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </center>
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
 <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    
    

    
<script>
    $('#printer').click(function(){
    var printme = document.getElementById('printThis'); 
    
    var wme = window.open("","","width= 900","height=700");
        
    var cancel = document.getElementsByClassName("btn");
    var notThis = document.getElementById("notThis");
        notThis.style.visibility ='hidden';
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
       notThis.style.visibility ='visible';
    }
    
                })
</script>    
        





<script type="text/javascript">
    
 
    /*
function btnClick(){
     if($('#subTotal').val()==""){
        alert("invalid order");
        return false;
     }
    
};
    
    
    
function checkdate(){
   
	   var sendDate = document.getElementById('poDate').val
          sendDate = new Date(Date.parse(sendDate.replace(/-/g,' ')))
	      today = new Date();
	      today.setHours(0,0,0,0)
	      if (sendDate < today) {
		      alert('Invalid Date');
		      return false;
	       }  
    
}
   
  */  
    
$(document).ready(function () {
    
 // I dont understand why it cant validate the first time  
    
    
document.getElementById('submitInfo').onclick = function() {
   
	      var sendDate = document.getElementById('poDate').value
          sendDate = new Date(Date.parse(sendDate.replace(/-/g,' ')))
	      today = new Date();
	      today.setHours(0,0,0,0)
	      if (sendDate > today) {
		       $("#invalidDate").modal();
		      return false;
	       }  
    
}  
});





$(document).ready(function () {


document.getElementById('submitOrder').onclick = function() {
    
     if($('#subTotal').val()==""){
           $("#invalidOrder").modal();
        return false;
     }
    
};  
});
    
    
    
    
    
 $(document).ready(function () {   
 
    $('#itemType').on('change', function(){
          var itemType = $(this).val();
          var itemName = document.getElementById("item").value;
           $.ajax({
              url:'<?php echo base_url(); ?>InventoryPOAdd/get_selectItem_amount' ,
              method:"POST",
              data:{itemName : itemName , itemType : itemType , sup_id :<?php if(!empty($tempExisting)){echo $tempExisting[0]->sup_id; } ?>}, //used the sup_id to know whose product.
              dataType: 'json',
              success: function(data){
                 // alert("success");
                  
                $('#unitPrice').val(data['unitPrice']);  //use this syntax when returning a single row only data['unitPrice']  column name in the query
                    var category = data['category'];       //use this syntax when returning a single row only data['category']  column name in the query
                     //alert(category);
                  
                  if(category == 1){
                    var y =  parseFloat($('#qty').val());
                    var x = (y/100) * parseFloat($('#unitPrice').val());
                    $('#amount').val(x);
                  }else{
                    var y =  parseFloat($('#qty').val());
                    var x = y * parseFloat($('#unitPrice').val());
                    $('#amount').val(x);
                 }
                    
                  
           //when the category is 1 divide by 100.       
                  $('#qty').keyup(function(){
                  if(category==1){
                  var y = parseFloat($(this).val());
			      var x = (y / 100) * parseFloat($('#unitPrice').val());
			      $('#amount').val(x);
               
                  }else{
               
                  var y = parseFloat($(this).val());
		     	  var x = y * parseFloat($('#unitPrice').val());
		          $('#amount').val(x);  
                 }
           }); 
                  
                  
                  
              },
              error: function(){
                 //alert('error');
              }
          });
      }); 
    
  
                      
     
        
       
  
        
        
        
   $('#item').on('change', function(){
          var item_name = $(this).val();
             
           $.ajax({
              url:'<?php echo base_url(); ?>InventoryPOAdd/get_selectItem_type' ,
              method:"POST",
              data:{item_name : item_name , sup_id :<?php if(!empty($tempExisting)){echo $tempExisting[0]->sup_id; } ?>}, //used the sup_id to know whose product.
              dataType: 'json',
              success: function(data){
                 // alert("success");
                  $('#itemType').html(data);
                  $('#unitPrice').val('');
                  $('#amount').val('');
                 
              },
              error: function(){
                 // alert("error");
                
              }
          });
      });  
        
          
       
}); //END 
         
    
   


  $(document).ready(function () {     
   var totalqty= $('input[name="qty[]"]').length;    
   var totalItem = 0;
   var subTotal = 0;
   var totalAmount = 0;
   var truckingFee =0;
    for(var i = 1 ; i <= totalqty ; i++ ){
        var x1 = parseFloat($('#qty'+i).val());
        var y1 = parseFloat($('#amount'+i).val());
        var z1 = parseFloat($('#truckingFee').val());
        
        subTotal = subTotal +y1;
            $('#subTotal').val(subTotal);
        totalItem = totalItem + x1;
            $('#totalItem').val(totalItem);
        
        totalAmount = subTotal + z1;
           $('#totalAmount').val(totalAmount);
       
        
        
        
        
        
        }    
  });                
    
  /*
  $(document).ready(function () { 
      
        $(' #qty1').keyup(function(){
            alert("kaljsdlk");
            var y = parseFloat($(this).val());
            var x = 10000;
            var z = x - y;
			$('#unitPrice1').val(z);
});      
      
      
      
      
      
 });
    
 */     

       
        
/*
$(document).ready(function() {    
    $('#ajax #item').on('change', function(){
        alert('Work...');
    });
});
*/
    
    
           
 
</script>
</html>