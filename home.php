<?php
session_start();
echo "<h1>Welcome ".  $_SESSION['username'] . " </h1>"; 
echo"<a href='logout.php'>Logout</a> <br><br>";
if(!isset($_SESSION["user"])) {
   header("location:index.php");
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
    <button onclick="window.location.href='insertform.php'">Insert user</button>
    <button onclick="window.location.href='show.php'">Show all users</button>
</body>
</html>


