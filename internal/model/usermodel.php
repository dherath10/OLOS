<?php


class user{
    
   public function  viewAllUser(){
       $con=$GLOBALS['con'];
  //sql query
  $sql="SELECT * FROM user u,login l,role r WHERE u.user_id=l.user_id AND u.role_id=r.role_id ORDER BY u.user_id DESC";
  //Execute a query
  $result=$con->query($sql);
  return $result;
   }
   
    public function  viewUser($user_id){
       $con=$GLOBALS['con'];
  //sql query
  $sql="SELECT * FROM user u,login l,role r "
          . "WHERE u.user_id=l.user_id AND u.role_id=r.role_id "
          . "AND u.user_id='$user_id'";
  //Execute a query
  $result=$con->query($sql);
  return $result;
   }
   
   public function  searchAllUser($key){
       $con=$GLOBALS['con'];
  //sql query
  $sql="SELECT * FROM user u,login l,role r "
          . "WHERE u.user_id=l.user_id AND u.role_id=r.role_id "
          . " AND (u.user_fname LIKE '%$key%' OR u.user_lname LIKE '%$key%' OR "
          . "u.user_id LIKE '%$key%' OR l.email LIKE '%$key%'"
          . "OR r.role_name LIKE '%$key%' OR u.user_status LIKE '%$key%')"
          . "ORDER BY u.user_id DESC";
  //Execute a query
  $result=$con->query($sql);
  return $result;
   }
   
   public function  searchPageUser($start,$key){
       $con=$GLOBALS['con'];
  //sql query
  $sql="SELECT * FROM user u,login l,role r "
          . "WHERE u.user_id=l.user_id AND u.role_id=r.role_id "
          . " AND (u.user_fname LIKE '%$key%' OR u.user_lname LIKE '%$key%' OR "
          . "u.user_id LIKE '%$key%' OR l.email LIKE '%$key%'"
          . "OR r.role_name LIKE '%$key%' OR u.user_status LIKE '%$key%')"
          . "ORDER BY u.user_id DESC LIMIT $start,5";
  //Execute a query
  $result=$con->query($sql);
  return $result;
   }
   
   public function  viewPageUser($start){
       $con=$GLOBALS['con'];
  //sql query
  $sql="SELECT * FROM user u,login l,role r WHERE u.user_id=l.user_id AND u.role_id=r.role_id ORDER BY u.user_id DESC LIMIT $start,5";
  //Execute a query
  $result=$con->query($sql);
  return $result;
   }
   
   function checkEmail($email){
       $con=$GLOBALS['con'];
       $sql="SELECT * FROM login WHERE email='$email'";
       $result=$con->query($sql);
       $nor=$result->num_rows;
       return $nor;       
   }
   
   function addUser($arr,$iname,$tmp_loc){
       $user_fname=$arr['user_fname'];
       $user_lname=$arr['user_lname'];
       $email=$arr['email'];
       $user_tel=$arr['user_tel'];
       $user_dob=$arr['user_dob'];
       $user_gender=$arr['user_gender'];
       $user_nic=$arr['user_nic'];
       $user_add=$arr['user_add'];
       $role_id=$arr['role_id'];
       $con=$GLOBALS['con'];
       $sql="INSERT INTO user (user_fname,user_lname,user_dob,"
               . "user_tel,user_gender,user_nic,user_add,role_id,user_status) "
               . "VALUES('$user_fname','$user_lname','$user_dob','$user_tel',"
               . "'$user_gender','$user_nic','$user_add','$role_id','Active')";
       $result=$con->query($sql) or die($con->error);
       $user_id=$con->insert_id; //Last ID
       
       $p=sha1("123"); ///Encryption
       //Insert into login table
       $sqllog="INSERT INTO login (email,password,user_id) VALUE ('$email',"
               . "'$p','$user_id')";
       $resultlog=$con->query($sqllog) or die($con->error);
       
       if($iname!=""){
           $inewname=$user_id."_".$iname;
           //To update Image
           $update="UPDATE user SET user_image='$inewname' WHERE user_id='$user_id'";
           $con->query($update) or die($con->error);
           $new_path="../images/user_images/".$inewname;
           //move image from temp loc to new path
           move_uploaded_file($tmp_loc,$new_path);
           
       }
       
       return $user_id;   
       
   }
   
   function deactiveUser($user_id){
         $con=$GLOBALS['con'];
  $sql="UPDATE user SET user_status='deactive' WHERE user_id='$user_id'";
  $result=$con->query($sql);
   }
   
   function activeUser($user_id){
         $con=$GLOBALS['con'];
  $sql="UPDATE user SET user_status='active' WHERE user_id='$user_id'";
  $result=$con->query($sql);
   }
    
}


?>
