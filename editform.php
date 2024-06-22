<?php


require("auth.php");


  require("connection.php");
 $id = $_GET['id'];

   
  $respond = $bdd -> prepare("SELECT * FROM user WHERE id = :id");
  $respond -> execute(array(
    "id"=> $id,
  ));

  $data = $respond ->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="edit.php" method="post">
    
    <input type="text" placeholder="Name" name="name" value="<?php echo $data['name']; ?>"> <br><br>
    <input type="text" placeholder="Family name" name="fname" value="<?php echo $data['fname'] ?>"><br><br>
    <input type="number" placeholder="Age" name="age" value="<?php echo $data['age'] ?>"><br><br>
    <input type="text" placeholder="Study field" name="study" value="<?php echo $data['study'] ?>"> <br><br>
    <input type="hidden"  name="id" value="<?php echo $data['id'] ?>"> 
<input type="submit" value="Save edit"> <br><br>

</form>
<button onclick="window.location.href='show.php'">Go back</button>
</body>
</html>