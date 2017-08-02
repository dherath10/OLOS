<?php
//To start the session
if(!isset($_SESSION)){
    session_start();
}
//To set default time zone
date_default_timezone_set("Asia/colombo");
//Get the values
//Server side validation
if($_POST['email']=="" || $_POST['pass']==""){
    //To encode the message
    $msg=base64_encode("Empty Email address or Password");
    //Data passing through URL
    header("Location:../view/login.php?msg=$msg");
    exit();    
    
}
include '../common/dbconnection.php';
$ob=new dbconnection();
$con=$ob->connection();

$email=trim($_POST['email']);
//Encript the password to with table field
$pass=sha1(trim($_POST['pass']));
include '../model/loginmodel.php';

$obj=new login();
$result=$obj->loginvalidate($email, $pass);
if($result->num_rows==1){
    //To get user details
    $row=$result->fetch_array();
    $_SESSION['user_info']=$row;
    $in=date("Y-m-d")." ".date("H:i:s");
    $user_id=$row['user_id'];
    $ip=$_SERVER['REMOTE_ADDR'];
    include '../model/trackmodel.php';
    $objt=new track();
    $track_id=$objt->trackin($in, $user_id, $ip); 
    array_push($_SESSION['user_info'], $track_id);
    //print_r($_SESSION['user_info']);
    
   header("Location:../view/dashboard.php");
    
}else{
    $msg=base64_encode("Invalid Email address or Password");
    header("Location:../view/login.php?msg=$msg");
    
}






?>
