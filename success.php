<?php   
session_start();
// $text = $_GET['name'];
echo "<marquee scrollamount='15' behavior='alternate' style='color:green';> <h1>Congratulations " . $_SESSION['name'], ", Welcome To Your Dashboard</h1></marquee>";
?>
