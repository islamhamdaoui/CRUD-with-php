<?php

require("connection.php");

$id = $_POST['id'];
$name = $_POST['name'];
$fname = $_POST['fname'];
$age = $_POST['age'];
$study = $_POST['study'];

$edit = $bdd-> prepare("UPDATE user SET name = :name, fname = :fname, age= :age, study= :study WHERE id =:id");
$edit->execute(array(
    "id"=> $id,
    "name"=> $name,
    "fname"=> $fname,
    "age"=> $age,
    "study"=> $study
));

header("location:show.php");