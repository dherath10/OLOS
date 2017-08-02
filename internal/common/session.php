<?php
//To start the session
if(!isset($_SESSION)){
    session_start();
}
//To get count from session array
$count=count($_SESSION['user_info']);
//If not login
if($count==0){ 
    $msg="Please Login...";
    $msg= base64_encode($msg);
    header("Location:../view/login.php?msg=$msg");
    exit();   
}
$user_info=$_SESSION['user_info'];
$fname=$user_info['user_fname']." ".$user_info['user_lname'];
$role_name=$user_info['role_name'];
$user_id=$user_info['user_id'];
$role_id=$user_info['role_id'];

?>
