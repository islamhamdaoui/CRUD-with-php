<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users table</h1>
    <button class="add">Add new user</button>
    <button>Go home</button>


    <style>
          button{
            padding: 10px 30px;
            border: none;
            border-radius: 8px;
            font-weight:bold;
            color:#fff ;
            background-color: tomato;
            cursor: pointer;
          
            margin-top: 10px;
        }

        .add {
            background-color: royalblue;
        }
    </style>
</body>
</html>

<?php
require("connection.php");

 echo"<table border=1 >";

 echo "
  <tr>
  <th>ID</th>
  <th></th>
  
  </tr>
  
 
  ";


?>