<?php
class role{
  public function  viewRole(){
       $con=$GLOBALS['con'];
  //sql query
  $sql="SELECT * FROM role";
  //Execute a query
  $result=$con->query($sql);
  return $result;
   }
    
}


?>
