<?php


require("auth.php");


require("connection.php");
$name = $_POST['name'];
$fname = $_POST['fname'];
$age = $_POST['age'];
$study = $_POST['study'];

$insert = $bdd ->prepare("INSERT INTO user(name,fname,age,study)VALUES(:name, :fname, :age ,:study)");
$insert ->execute(array(

    "name"=> $name,
    "fname"=> $fname,
    "age"=> $age,
    "study"=> $study

));

header("location:insertform.php");

?>
