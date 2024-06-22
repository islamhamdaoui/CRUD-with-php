<?php
require("auth.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">

    <input type="text" placeholder="Name" name="name"> <br><br>
    <input type="text" placeholder="Family name" name="fname"><br><br>
    <input type="number" placeholder="Age" name="age"><br><br>
    <input type="text" placeholder="Study field" name="study"> <br><br>
    <input type="submit" value="Add user">

    </form>
    <button  onclick="window.location.href='home.php'">Go Home</button>

    <style>

        input {
            height: 35px;
            max-width: 330px;
            width: 100%;
            background-color: #f6f6f6;
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
            box-shadow: 1px 5px 4px rgba(0, 0, 0, 0.1);
        }

        input[type=submit]{
            background-color: royalblue;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        
        button{
            padding: 10px 30px;
            border: none;
            border-radius: 8px;
            font-weight:bold;
            color:#fff ;
            background-color: tomato;
            cursor: pointer;
            max-width: 330px;
            width: 100%;
            margin-top: 10px;
        }
    </style>
</body>
</html>