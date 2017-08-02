<?php

class dbconnection{
 public $host="localhost";
 public $user="root";
 public $password="";
 public $db="olos";
 
 public function connection(){
  //Connection string
  $con=new mysqli($this->host,$this->user,
          $this->password,$this->db);
  return $con;
 }
}
?>
