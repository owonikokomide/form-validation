<?php
define("servername", "localhost");
define("username", "root");
define("password", "");
define("dbname", "second_project");

$connection = mysqli_connect(servername, username, password, dbname);
if($connection){
  echo "connected";
}
else{
  die ("not-connected").mysqli_connect_errno;
}
?>