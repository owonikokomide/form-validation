<!-- Html codes -->
<?php include('yes.php'); ?>
<!DOCTYPE html>
<html lang="en">    
<head> 
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> 
</head>
<body> 
<form action="" method="post" id="form">
  <label for="email">Email:</label>
<input type="email" name="username" id="email" placeholder = "Email" ><br><br> 
<label for="text">Firstname:</label>
<input type="text" name="text" id="text" placeholder="First name" required><br><br>
<label for="number">Passengers:</label>
<input type="number" name= "number" id="number" placeholder="Num" min="2" max="5" required><br><br>
<label for="tel">Telephone:</label>
<input type="tel" name="tel" id="tel" placeholder ="Telephone" required><br><br>
<label for="date">Date:</label>
<input type="date" name="date" id="date"  required><br><br>
<button type="submit" name="submit" id="submit" disabled>submit </button>
</form>



</body>

<script src= "validate.js"></script>

</html>
