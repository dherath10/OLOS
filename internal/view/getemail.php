<?php
include '../common/dbconnection.php'; //To get connection string
$ob = new dbconnection();
$con = $ob->connection();
include '../model/usermodel.php';
$obj=new user();
$email=$_GET['q'];
$pat='/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,6})+$/';
$status=0;
if(preg_match($pat,$email)){

$nor=$obj->checkEmail($email);


if($nor==0){
    echo "<span class='alert-success'>Available to use</span>";
    $status=1;
}else{
    echo "<span class='alert-danger'>Already taken</span>";
    
}

}else{
    
}
?>
<input type="hidden" name="hid" id="hid" value="<?php echo $status; ?>" />

