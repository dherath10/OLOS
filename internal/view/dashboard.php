<!DOCTYPE html>
<?php
include '../common/session.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Ordering System</title>
        
        <link rel="stylesheet" type="text/css" 
              href="../bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/loginlayout.css" />
        
    </head>
    <body>
        <div id="maindiv">
            <div id="headerdiv" class="navbar navbar-default navbar-inverse navbar-fixed-top">                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8">
                            <div class="webbanner">
                                OnLine Ordering System
                            </div>
                        </div>
                        <div class="col-md-2">&nbsp;</div>
                    </div>
                </div>                          
            </div>
            <div class="row"><div class="col-lg-12">&nbsp;</div></div> 
             <div class="row"><div class="col-lg-12">&nbsp;</div></div> 
              <div class="row"><div class="col-lg-12">&nbsp;</div></div> 
               <div class="row"><div class="col-lg-12">&nbsp;</div></div> 
            <div id="sessiondiv">
                <div class="al">
                    <i class="glyphicon glyphicon-user"></i>                 
                        <?php echo $fname." | ".$role_name," | " ?> 
                    <a href="../view/signout.php">
                        <button class="btn-xs btn-primary">SignOut</button>
                        
                    </a>
                </div>
                
                &nbsp;</div>
            <div id="navidiv">
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>
                
                &nbsp;</div>
            <div id="contentdiv">
            <div class="dash"><?php echo $role_name; ?>'s Dashboard</div>
             <hr />
             <div class="container-fluid " style="text-align: center">
                 <?php 
                 //Start Owner
                 if($role_id==1){ ?>
                 <!-- 1st Row start -->
                 <div class="row" >
                     <div class="col-md-1">&nbsp;</div>
                     <div class="col-md-2">
<a href="../view/user.php">
    <img src="../images/user_role.png" /><br />
            User Module</a>                         
                     </div>
                     <div class="col-md-2">
<a href="../view/customer.php">
    <img src="../images/customer.png" /><br />
                        Customer Module</a>
                     </div>
                     <div class="col-md-2">
                         <a href="../view/product.php">
                             <img src="../images/Product.png" /><br />
                        Product Module</a>
                     </div>
                     <div class="col-md-2">
                         <a href="../view/order.php">
                             <img src="../images/addOrder.png" /><br />
                        Order Module</a></div>
                     <div class="col-md-2">
                         <a href="../view/payment.php">
                             <img src="../images/payments.png" /><br />
                        Payment Module</a>
                     </div>                     
                     <div class="col-md-1">&nbsp;</div>                     
                 </div>
                <!-- 1st Row end -->
                <div class="row"><div class="col-md-12">&nbsp;</div></div>
                <!-- 2nd Row start -->
                 <div class="row">
                     <div class="col-md-1">&nbsp;</div>
                     <div class="col-md-2">
                         <a href="../view/stock.php">
                             <img src="../images/stockBalance.png" /><br />
                        Stock Module</a>
                     </div>
                     <div class="col-md-2">
                         <a href="../view/delivery.php">
                             <img src="../images/g.r.n.png" /><br />
                        Delivery Module</a>
                     </div>
                     <div class="col-md-2">
                         <a href="../view/report.php">
                             <img src="../images/stockAdjustments.png" /><br />
                        Report Module</a>
                     </div>
                     <div class="col-md-2">
                         <a href="../view/notification.php">
                             <img src="../images/checkOut.png" /><br />
                        Notification Module</a>
                     </div>
                     <div class="col-md-2">
                         <a href="../view/feedback.php">
                             <img src="../images/checkIn.png" /><br />
                        Feedback Module</a>
                     </div>                     
                     <div class="col-md-1">&nbsp;</div>                     
                 </div>
                <!-- 2nd Row end -->
                <div class="row"><div class="col-md-12">&nbsp;</div></div>
                <!-- 3rd Row start -->
                 <div class="row">
                     <div class="col-md-3 col-sm-6 col-xs-12">&nbsp;</div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <a href="../view/backup.php">
                             <img src="../images/categorize.png" /><br />
                        Back Up Module</a>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <a href="../view/track.php">
                             <img src="../images/p.r.n_customer.png" /><br />
                        Track Module</a>
                     </div>                                          
                     <div class="col-md-3 col-sm-6 col-xs-12">&nbsp;</div>                     
                 </div>
                
                
                <!-- 3rd Row end -->
                 <?php 
                 } 
                 //End Owner
                 ?>
                <?php 
                 //Start Web Admin
                 if($role_id==2){ ?>
                 <!-- 1st Row start -->
                 <div class="row">
                     <div class="col-md-1">&nbsp;</div>
                     <div class="col-md-2">
                         <a href="../view/user.php">
    <img src="../images/user_role.png" /><br />
            User Module</a> 
                     </div>
                     <div class="col-md-2">
                         <a href="../view/notification.php">
                             <img src="../images/checkOut.png" /><br />
                        Notification Module</a>
                     </div>
                     <div class="col-md-2">
                        <a href="../view/report.php">
                  <img src="../images/stockAdjustments.png" /><br />
                        Report Module</a>
                     </div>
                     <div class="col-md-2">
     <a href="../view/backup.php">
                             <img src="../images/categorize.png" /><br />
                        Back Up Module</a>
                     </div>
                     <div class="col-md-2">
     <a href="../view/track.php">
                             <img src="../images/p.r.n_customer.png" />
                             <br />
                        Track Module</a>
                     </div>                     
                     <div class="col-md-1">&nbsp;</div>                     
                 </div>
                <!-- 1st Row end -->
                <?php 
                 } 
                 //End Web Admin
                 ?>
                <?php 
                 //Start Manager
                 if($role_id==3){ ?>
                 <!-- 1st Row start -->
                 <div class="row">                     
                     <div class="col-md-3">
                         <a href="../view/customer.php">
    <img src="../images/customer.png" /><br />
                        Customer Module</a>
                     </div>
                     <div class="col-md-3">
                         <a href="../view/product.php">
                             <img src="../images/Product.png" /><br />
                        Product Module</a>
                     </div>
                     <div class="col-md-3">
                         <a href="../view/order.php">
                             <img src="../images/addOrder.png" /><br />
                        Order Module</a>
                     </div>
                     <div class="col-md-3"><a href="../view/delivery.php">
                             <img src="../images/g.r.n.png" /><br />
                        Delivery Module</a></div>                                      
                 </div>
                <!-- 1st Row end -->
                <div class="row"><div class="col-md-12">&nbsp;</div></div>
                <!-- 2st Row start -->
                 <div class="row">                     
                     <div class="col-md-3">&nbsp;</div>
                     <div class="col-md-3">
                         <a href="../view/report.php">
                             <img src="../images/stockAdjustments.png" /><br />
                        Report Module</a>
                     </div>
                     <div class="col-md-3">
                          <a href="../view/feedback.php">
                             <img src="../images/checkIn.png" /><br />
                        Feedback Module</a>
                     </div>
                     <div class="col-md-3">&nbsp;</div>                                      
                 </div>
                <!-- 2st Row end -->
                <?php 
                 } 
                 //End Manager
                              
                 ?>
                 <?php 
                 //Start Officer
                 if($role_id==4){ ?>
                 <!-- 1st Row start -->
                 <div class="row">                     
                     <div class="col-md-3">
                         <a href="../view/customer.php">
    <img src="../images/customer.png" /><br />
                        Customer Module</a>
                     </div>
                     <div class="col-md-3">
                         <a href="../view/product.php">
                             <img src="../images/Product.png" /><br />
                        Product Module</a>
                     </div>
                     <div class="col-md-3"><a href="../view/order.php">
                             <img src="../images/addOrder.png" /><br />
                        Order Module</a></div>
                     <div class="col-md-3"> 
                         <a href="../view/payment.php">
                             <img src="../images/payments.png" /><br />
                        Payment Module</a></div>                                      
                 </div>
                <!-- 1st Row end -->
                <div class="row"><div class="col-md-12">&nbsp;</div></div>
                <!-- 2st Row start -->
                 <div class="row">                     
                     <div class="col-md-3"><a href="../view/stock.php">
                             <img src="../images/stockBalance.png" /><br />
                        Stock Module</a></div>
                     <div class="col-md-3">
                         <a href="../view/delivery.php">
                             <img src="../images/g.r.n.png" /><br />
                        Delivery Module</a>
                     </div>
                     <div class="col-md-3">
                         <a href="../view/notification.php">
                             <img src="../images/checkOut.png" /><br />
                        Notification Module</a>
                     </div>
                     <div class="col-md-3">
                         <a href="../view/report.php">
                             <img src="../images/stockAdjustments.png" /><br />
                        Report Module</a></div>                                      
                 </div>
                <!-- 2st Row end -->
                <?php 
                 } 
                 //End Officer
                
                 ?>
             </div>
<div class="col-md-12">&nbsp;</div>  

                &nbsp;</div>
            
            <div id="footerdiv">
                <div class="ci">&copy; 2017 UCSC, ALL RIGHTS RESERVED</div></div>          
        </div>
    </body>
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"> </script>
</html>



