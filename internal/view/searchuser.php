<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); //To hide errors
include '../common/session.php'; //To get session infor

include '../common/dbconnection.php'; //To get connection string
$ob = new dbconnection();
$con = $ob->connection();
$key=$_REQUEST['searchkey'];
include '../model/usermodel.php'; //To call user model
$obj = new user(); //To create an object using user class
$result = $obj->searchAllUser($key); //To get all users' infor
$nou = $result->num_rows;
$nopages= ceil($nou/5); //No of pages

if($_GET['page']=="" || $_GET['page']==1){
    $start=0; //starting point   
    
}else{
    $n=$_GET['page'];
    $start=5*($n-1); //starting point     
}
$result=$obj->searchPageUser($start,$key);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Ordering System</title>

        <link rel="stylesheet" type="text/css" 
              href="../bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/loginlayout.css" />
        <script type="text/javascript">
        
        function confMessage(str){            
            var r=confirm("Are You Sure to "+str+" User");
            if(!r){
                return false;               
            }
            
            
        }
        
        
        </script>
            
           
        
        
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
                     <li class="active">Search User</li>
                </ol>                
                &nbsp;</div>
            <div id="contentdiv">
                <div class="dash">Search User</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            &nbsp;
                        </div>
                        <div class="col-md-6" style="text-align: right">
                            <form action="searchuser.php" method="post">
                                <input type="text" class="input-sm" required=""
                                   name="searchkey" placeholder="Search Users" />
          <button type="submit" name="search" class="btn btn-primary btn-sm">
                                <i class="glyphicon glyphicon-search"></i> </button>
                            </form>
                            
                        </div>
                </div>
                <hr />
                <div class="row" style="padding-bottom: 10px;">
                    <div class="col-md-6">Search KeyWord: 
                        <span class="alert-success"><?php echo $key; ?></span> </div>
                    <div class="col-md-6" style="text-align: right">
                        No of Records:<span class="alert-info"> 
                            <?php echo $nou; ?></span> </div>
                </div>
                <div class="container">
                    <?php if($nou!=0){ ?>
                    <table class="table table-responsive table-striped">
                        <tr>
                            <th>&nbsp;</th>
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>&nbsp;</th>                        
                        </tr>
                        <?php
                        while ($row = $result->fetch_array()) {
                            //To check the Image
                            if ($row['user_image'] == "") {
                                $path = "../images/user.png";
                            } else {
                                $path = "../images/user_images/" . $row['user_image'];
                            }
                            //To check the status
                            if(strtolower($row['user_status'])=="active"){
                                $label="Deactive";
                                $class="btn btn-danger";
                            }else{
                                $label="Active";
                                 $class="btn btn-info";
                            }
                            ?>
                            <tr>
                                <td>
                                    <img src="<?php echo $path; ?>" 
                                         width="35" 
                                         height="auto" />
                                    &nbsp;</td>
                                <td>
                                    <?php echo $row['user_id']; ?>

                                    &nbsp;</td>
                                <td>
                                    <?php echo $row['user_fname']; ?>
                                    &nbsp;</td>
                                <td>
                                    <?php echo $row['user_lname']; ?>
                                    &nbsp;</td>
                                <td>
                                    <?php echo $row['email']; ?>
                                    &nbsp;</td>
                                <td>
                                    <?php echo $row['role_name']; ?>
                                    &nbsp;</td>
                                <td>
                                    <?php echo $row['user_status']; ?>
                                    &nbsp;</td>
                                <td>
<a href="../controller/usercontroller.php?user_id=<?php echo $row['user_id']; ?>&status=View"><button type="button" class="btn btn-success">View</button>
 </a>
 <a href="../controller/usercontroller.php?user_id=<?php echo $row['user_id']; ?>&status=Update">
     <button type="button" class="btn btn-primary">Update</button>
 </a>
                                    
<a href="../controller/usercontroller.php?
   user_id=<?php echo $row['user_id']; ?>&status=<?php echo $label; ?>&page=<?php echo $_GET['page']; ?>">
    <button type="button" class="<?php echo $class; ?>" 
            onclick="return confMessage('<?php echo $label; ?>')">
     <?php echo $label; ?></button>
 </a>



                                    &nbsp;</td>                         
                            </tr> 
                        <?php } ?>
                    </table>  
                    
                    <ul class="pagination pagination-sm">  
                        <?php for($i=1;$i<=$nopages;$i++){ ?>
 <li><a href="searchuser.php?page=<?php echo $i; ?>
        &searchkey=<?php echo $key; ?>">
     <?php echo $i; ?></a></li>  
                        <?php } ?>
                    </ul>
                    <?php } else{ ?>
                    <div class="alert alert-danger ali">No records</div> 
                    <?php } ?>

                </div>


                &nbsp;</div>

            <div id="footerdiv">
                <div class="ci">&copy; 2017 UCSC, ALL RIGHTS RESERVED</div></div>          
        </div>
    </body>
    <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
</html>



