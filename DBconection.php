<?php

$user = 'root';
$pass = '';
$server = 'localhost';
$DB = 'SMcomunicacion';
$link = "mysql:host=$server;dbname=$DB";

$conexion = mysqli_connect($server, $user, $pass, $DB);
mysqli_select_db($conexion, $DB);
  
try{
  $pdo = new PDO($link,$user,$pass);
}catch (PDOException $e) {
  print "Error! ". $e->getMesssage() ."<br/>";
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DB-CONEXION</title>
</head>
<body>
  <?php
    if(!$conexion){
      echo '<p class="conexion-info fail">Conexion: FAIL </p>';
    } else {
      echo '<p class="conexion-info">Conexion: OK <img class="ok-luz" src="COK.gif"></p>';
    }
  ?>
</body>
</html>