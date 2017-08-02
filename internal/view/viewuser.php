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

//TO get user info
$user_id=$_REQUEST['user_id'];
include '../model/usermodel.php';
$obu=new user();
$resultu=$obu->viewUser($user_id);
$rowu=$resultu->fetch_array();

//To get user Image
if ($rowu['user_image'] == "") {
   $path = "../images/user.png";
 } else {
  $path = "../images/user_images/" . $rowu['user_image'];
}



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
                    <li class="active">View a User</li>
                </ol>                
                &nbsp;</div>
            <div id="contentdiv">
                <div class="dash">View a User</div>
                <hr />
                <div id="msg"></div>
                <div class="container-fluid"> 

                    <div class="row">
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>First Name</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12"> 
     <input type="text" name="user_fname" id="user_fname" 
            placeholder="First Name " class="form-control" 
            value="<?php echo $rowu['user_fname']; ?>" readonly/>
     <span>*</span>
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Last Name</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <input type="text" name="user_lname" id="user_lname" 
            placeholder="Last Name " class="form-control"
            value="<?php echo $rowu['user_lname']; ?>" readonly
            />
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
            value="<?php echo $rowu['email']; ?>"
            readonly
            />
      <span>*</span>
      <span id="show"></span>
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Gender</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <input type="radio" name="user_gender" checked/>
     <?php echo $rowu['user_gender']; ?><br />
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
            placeholder="Date of Birth " class="form-control"
            value="<?php echo $rowu['user_dob']; ?>" readonly />
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>NIC/Passport</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <input type="text" name="user_nic" id="user_nic" 
            placeholder="NIC/Password" class="form-control" 
            value="<?php echo $rowu['user_nic']; ?>" readonly/>
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
            placeholder="Telephone Number " class="form-control"
            value="<?php echo $rowu['user_tel']; ?>" readonly/>
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Address</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <textarea name="user_add" id="user_add" class="form-control" readonly>
    <?php echo $rowu['user_add']; ?>
     </textarea>
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
         <option value="" selected><?php echo $rowu['role_name'] ?></option>
           
     </select>
      <span>*</span>
 </div>
 <div class="col-md-2 col-sm-6 col-xs-12"> 
     <label>Image</label></div>
 <div class="col-md-4 col-sm-6 col-xs-12">
     <img id="img_prev" src="<?php echo $path; ?>" width="100" 
          height="auto" />
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

