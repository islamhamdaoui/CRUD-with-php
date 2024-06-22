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
    <h1>Users table</h1>
    <button class="add"  onclick="window.location.href='insertform.php'">Add new user</button>
    <button  onclick="window.location.href='home.php'">Go home</button> <br><br><br>


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
$respond = $bdd ->query("SELECT * FROM user");
$column= $respond -> columnCount();


 echo"<table border=1 >";

 echo "
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Family name</th>
  <th>Age</th>
  <th>Study field</th>
  
  </tr>
  ";

while($data = $respond ->fetch()) {


    echo"<tr>";
    for($i=0; $i < $column; $i++) {
        echo "<td>".$data[$i]."</td>";
    }
    echo "<td>" . "<a href='delete.php?id=$data[0]'>Delete</a>" . "</td>";
    echo "<td>" . "<a href='editform.php?id=$data[0]'>Edit</a>" . "</td>";

    echo"</tr>";
}
echo "</table>";


?>