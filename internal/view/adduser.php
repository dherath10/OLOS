<!DOCTYPE html>
<?php
include '../common/session.php'; //To get session infor

include '../common/dbconnection.php'; //To get connection string
$ob = new dbconnection();
$con = $ob->connection();

include '../model/commonmodel.php'; //To call role model
$obj = new role(); //To create an object using role class
$result = $obj->viewRole(); //To get all roles' infor

//To set default time zone
date_default_timezone_set("Asia/colombo");
$cdate=date("Y-m-d");
$cid=strtotime($cdate); //Date convert into timestamp 

function getDate1($y){
$a= floor($y/4);
$ctimestamp=time();
$seconds=(60*60*24*365)*$y+(60*60*24*$a);
$timestamp=$ctimestamp-$seconds;
$aDate=Date("Y-m-d",$timestamp);//To get date from timestamp
return $aDate;
}

$maxDate= getDate1(18);
$minDate=getDate1(60);



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Ordering System</title>

        <link rel="stylesheet" type="text/css" 
              href="../bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" 
              href="../css/loginlayout.css" />
 <script type="text/javascript" 
 src="../js/jquery-1.8.3.min.js"></script>
     <script type="text/javascript" 
         src="../js/uservalidation.js"></script>
         <script type="text/javascript">
function checkEmail(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("show").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("show").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getemail.php?q="+str,true);
xmlhttp.send();
}

// To preview photo 

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_prev')
            .attr('src', e.target.result)
            .height(70);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function clearImg(){
    //$("#img_prev").attr('src',"");
    document.getElementById('img_prev').src="";
}


</script>
         
         
    </head>
    <body>
        <div id="maindiv">
            <div id="headerdiv" 
           class="navbar navbar-default navbar-inverse navbar-fixed-top">                
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
            <div class="row"><div class="col-md-12">&nbsp;</div></div>
            <div class="row"><div class="col-md-12">&nbsp;</div></div>
            <div class="row"><div class="col-md-12">&nbsp;</div></div>
            <div class="row"><div class="col-md-12">&nbsp;</div></div>
            <div id="sessiondiv">
                <div class="al">
                    <i class="glyphicon glyphicon-user"></i>                 
                    <?php echo $fname . " | " . $role_name, " | " ?> 
                    <a href="../view/signout.php">
                        <button class="btn-xs btn-primary">SignOut</button>

                    </a>
                </div>

                &nbsp;</div>
            <div id="navidiv">
                <ol class="breadcrumb">
                    <li><a href="../view/dashboard.php">Dashboard</a></li>
                    <li><a href="../view/user.php">User Module</a></li>
                    <li class="active">Add a User</li>
                </ol>                
                &nbsp;</div>
            <div id="contentdiv">
                <div class="dash">Add a User</div>
                <hr />
                <div id="msg"></div>
                <div class="container-fluid"> 
<form method="post" action="../controller/usercontroller.php?status=Add"
      enctype="multipart/form-data">
                    <div class="row">
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>First Name</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12"> 
     <input type="text" name="user_fname" id="user_fname" 
            placeholder="First Name " class="form-control" />
     <span>*</span>
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Last Name</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <input type="text" name="user_lname" id="user_lname" 
            placeholder="Last Name " class="form-control" />
             <span>*</span>
 </div>                 
                    </div> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">&nbsp;</div>
                    </div>
                    
                    <div class="row">
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Email</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12"> 
     <input type="text" name="email" id="email" 
            placeholder="Email Address " class="form-control"
            onkeyup="checkEmail(this.value)"
            autocomplete="no"
            />
      <span>*</span>
      <span id="show"></span>
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Gender</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <input type="radio" name="user_gender" id="male" 
            value="Male" class="input-group-lg" /> Male
     <input type="radio" name="user_gender" id="female" 
            value="Female" class="input-group-lg" />Female <br />
      <span>*</span>
 </div>                 
                    </div> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">&nbsp;</div>
                    </div>
                    
                    <div class="row">
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>DOB</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12"> 
     <input type="date" name="user_dob" id="user_dob" 
            placeholder="Date of Birth " class="form-control" />
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>NIC/Passport</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <input type="text" name="user_nic" id="user_nic" 
            placeholder="NIC/Password" class="form-control" />
 </div>                 
                    </div> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">&nbsp;</div>
                    </div>
                    <div class="row">
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Telephone No:</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12"> 
     <input type="text" name="user_tel" id="user_tel" 
            placeholder="Telephone Number " class="form-control" />
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Address</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
<textarea name="user_add" id="user_add" class="form-control">Address</textarea>
 </div>                 
                    </div> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">&nbsp;</div>
                    </div>
                    <div class="row">
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Role:</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12"> 
     
     <select name="role_id" id="role_id" class="form-control">
         <option value="">Select a Role</option> 
         <?php while($row=$result->fetch_array()){?>
         <option value="<?php echo $row[0]; ?>">
             <?php echo ucwords($row[1]); ?>
         </option>  
         <?php } ?>
         
     </select>
      <span>*</span>
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Image</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <input type="file" name="user_image" id="user_image" 
            class="form-control" onchange="readURL(this)" />
     <br />
     <img id="img_prev" />
 </div>                 
                    </div>                     
                    <div class="row">
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     &nbsp;</div>
 <div class="col-md-4 col-sm-6 col-xs-12"> 
     &nbsp;
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     &nbsp;
 <div class="col-md-4 col-sm-6 col-xs-12">
     <div id="prev">&nbsp;</div>
 </div>                 
                    </div> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">&nbsp;</div>
                    </div>
<div class="row">
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     &nbsp;</div>
 <div class="col-md-4 col-sm-6 col-xs-12"> 
     <button type="submit" class="btn btn-primary">Save</button>
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     &nbsp;</div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <button type="reset" class="btn btn-warning" 
             onclick="clearImg()">Clear</button>
 </div>                
                    </div> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">&nbsp;</div>
                    </div>

                </div>


                &nbsp;
                
</form>
                </div>

            <div id="footerdiv">
                <div class="ci">&copy; 2017 UCSC, ALL RIGHTS RESERVED</div></div>          
        </div>
        </div>
    </body>
    <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
</html>

<?php

?>

