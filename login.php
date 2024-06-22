<?php 

session_start();

$_SESSION['username'] = $_POST['name'];
$_SESSION['password'] = $_POST['pass'];
$_SESSION['user'] = true;

if (isset($_POST['check'])) {

setcookie('username',$_POST['name'], time()+24*365*3600,'/');
setcookie('password',$_POST['pass'], time()+24*365*3600,'/');
}


header('location:home.php');