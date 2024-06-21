<?php

session_start();

$_SESSION['username'] = $_POST['name'];
$_SESSION['password'] = $_POST['pass'];
$_SESSION['user'] = true;

header('location:home.php');