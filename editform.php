<?php
  require("connection.php");
 $id = $_GET['id'];

   
  $respond = $bdd -> prepare("SELECT * FROM user WHERE id = :id");
  $respond -> execute(array(
    "id"=> $id,
  ));

  $data = $respond ->fetch();
?>