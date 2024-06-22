<?php
session_start();
echo "<h1>Welcome ".  $_SESSION['username'] . " </h1>"; 

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
    <button class="add" onclick="window.location.href='insertform.php'">Insert user</button>
    <button  onclick="window.location.href='show.php'">Show all users</button>
    <button class="logout"  onclick="window.location.href='logout.php'">Log out</button>

    <style>

        button{
            padding: 10px 30px;
            border: none;
            border-radius: 8px;
            font-weight:bold;
            color:#fff ;
            background-color: royalblue;
            cursor: pointer;
        }

        .add{
            background-color: blueviolet;
        }

        .logout {
            background-color: tomato;
        }
    </style>
</body>
</html>


