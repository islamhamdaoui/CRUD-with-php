<?php
require("connection.php");
$id = $_GET['id'];

$delete = $bdd -> prepare('DELETE FROM user WHERE id = :id');

$delete -> execute(array(
    
    'id'=> $id
));

header('location:show.php');