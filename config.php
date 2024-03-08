<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "first_project"; 

$connection = mysqli_connect($servername, $username, $password, $dbname);
if($connection){
  //echo "connected";
}
else{
  die ("not-connected").mysqli_connect_errno;
}
?>
