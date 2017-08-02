<?php


class login{
    
   public function  loginvalidate($email,$pass){
       $con=$GLOBALS['con'];
  //sql query
  $sql="SELECT * FROM login l,user u,role r WHERE l.email='$email' 
  AND l.password='$pass' AND l.user_id=u.user_id AND u.role_id=r.role_id "
          . "AND u.user_status='Active'";
  //Execute a query
  $result=$con->query($sql);
  return $result;
   }
    
}


?>
