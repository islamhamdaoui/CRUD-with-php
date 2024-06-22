<?php
session_start();
echo"<h1>Home </h1>";
if(!isset($_SESSION["user"])) {
   header("location:index.php");
}
echo $_SESSION['username'] . "<br>";
echo $_SESSION['password'] . "<br>";

echo"<a href='logout.php'>Logout</a>";
