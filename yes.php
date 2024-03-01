<!-- Php codes -->
<?php
session_start();
include('config.php'); 

if(isset($_POST['submit'])){ 
$email = $_POST['username'];
$num = $_POST['number'];
$text = $_POST['text'];
$tel = $_POST['tel'];
$date = $_POST['date'];

$preg = "/[^a-zA-Z_ ]/";
$dates = date("Y-m-d");
$dated = date("Y-m-d", strtotime('+ 5 days'));
if($email ==""){
  echo "email is empty";
}

elseif(preg_match($preg,$text)){
  echo "Only letters are required in the firstname field";
}
elseif(($date < $dates)||($date > $dated)){
  echo "date out of range";
  
}
else{
  // echo "Congratulations ". $text;
  // header('location:success.php?name='.$text);
  $insert = "INSERT INTO owonikoko(email, first_name, passengers, telephone, date)
VALUES('$email', '$text', '$num', '$tel', '$date')";
$query = mysqli_query($connection, $insert);
if($query){
  $_SESSION['name']=$text;
  $_SESSION['tel']=$tel;
  header('location:success.php');
}
else{
  echo "not inserted";
}
}
}

?>
