<?php

$user = 'root';
$pass = '';
$server = 'localhost';
$DB = 'SMcomunicacion';

	$conexion = mysqli_connect($server, $user, $pass, $DB);
	mysqli_select_db($conexion, $DB);

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
      echo '<p class="conexion-info fail">Conexion: FAIL</p>';
    } else {
      echo '<p class="conexion-info">Conexion: OK</p>';
    }
  ?>
</body>
</html>