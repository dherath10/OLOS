<?php
include '../common/dbconnection.php';
$ob=new dbconnection();
$con=$ob->connection();

include '../model/usermodel.php';
$obj=new user();

$status= strtolower($_REQUEST['status']);

switch ($status){
    case "add":
       $arr=$_POST;
        //To check whether image has been uploaded
        if($_FILES['user_image']['name']!=""){
            $iname=$_FILES['user_image']['name'];
            $tmp_loc=$_FILES['user_image']['tmp_name'];            
        }else{
            $iname="";
            $tmp_loc="";
        }
        $user_id=$obj->addUser($arr,$iname,$tmp_loc);      
        
        header("Location:../view/user.php?user_id=$user_id");
         
        break;
        
    case "deactive":
        $user_id=$_GET['user_id'];
        $page=$_GET['page'];
        $obj->deactiveUser($user_id);
        header("Location:../view/user.php?page=$page");        
        break;
    
    case "active":
        $user_id=$_GET['user_id'];
        $page=$_GET['page'];
        $obj->activeUser($user_id);
        header("Location:../view/user.php?page=$page");        
        break;
    
    
}




?>
