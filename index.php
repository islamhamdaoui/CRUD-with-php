<?php
session_start();  
if(isset($_SESSION['user'])){
  header('location:home.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

 <h1>Login here</h1>

 <form action="login.php" method="post" >

 <input type="text" placeholder="Enter name" name="name" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>"> <br><br>
           <input type="password" name="pass" placeholder="Enter password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['username'] ?>"> <br><br>
        <input type="checkbox" id="checkbox" name="check"> <label for="checkbox">Remember me?</label> <br><br>
<input type="submit">
 </form>

</body>
</html>