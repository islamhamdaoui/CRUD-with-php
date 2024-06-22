<?php 

session_start();

if(!isset($_SESSION['user'])){
    header('location:index.php');
}

echo 'Your username: ' . $_SESSION['username'] . '<br>';
echo 'Your password: ' . $_SESSION['password'] . '<br><br><br>';


echo "<a href='logout.php'>Logout here</a>";