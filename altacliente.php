<?php
include ("DBconection.php");
if(!isset($_POST['nombre']) &&  !isset($_POST['localidad']) && !isset($_POST['telefono']) && !isset($_POST['ip'])){
  header("Location: clientes.php");
}else{	
  //Creamos el cleinte
  $nombre=$_POST['nombre'];
  $localidad=$_POST['localidad'];
  $telefono=$_POST['telefono'];
  $ip=$_POST['ip'];

  $Sql="insert into clientes (nombre, tel, localidad, dir_ip) values(
      '".$nombre."',
      '".$telefono."',
      '".$localidad."',
      '".$ip."')";
  mysqli_query($conexion,$Sql);
  header("Location: clientes.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Registro malo</h1>
</body>
</html>