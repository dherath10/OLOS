<!DOCTYPE html>
<?php
//To start the session
if(!isset($_SESSION)){
    session_start();
}
date_default_timezone_set("Asia/colombo");

$user_info=$_SESSION['user_info'];
$track_id=$user_info[15];
$out=date("Y-m-d")." ".date('H:i:s');
include '../common/dbconnection.php';
$ob=new dbconnection();
$con=$ob->connection();
include '../model/trackmodel.php';

$obj=new track();
$obj->trackout($track_id, $out);
unset($_SESSION['user_info']);//To remove session by session
header("refresh:5;url=../view/login.php"); //To redirect within 5 second

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
            <div id="headerdiv">                
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
            <div id="sessiondiv">
               
                
                &nbsp;</div>
            <div id="navidiv">&nbsp;</div>
            <div id="contentdiv">
            <div class="dash">Sign Out</div>
            <div style="text-align: center">
                <p class="alert alert-success">
                You are successfully Sign Out<br />
                <a href="../view/login.php">Login</a></p>
                <br />
                <img src="../images/loading.gif" />
            
            
            </div>
                   


                &nbsp;</div>
            <div id="footerdiv">
                <div class="ci">&copy; 2017 UCSC, ALL RIGHTS RESERVED</div></div>          
        </div>
    </body>
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"> </script>
</html>



