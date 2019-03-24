<?php

$user = 'id8828298_test';
$pass = '12345';
$server = 'localhost';
$DB = 'id8828298_dbsmcom';

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
		echo '<h1>Error en la conexión</h1>';
	} else {
    echo '<h1>Todo bien krnal</h1>';
  }
  ?>
</body>
</html>