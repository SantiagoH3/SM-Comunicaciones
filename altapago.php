<?php
include ("DBconection.php");
if(!isset($_POST['cliente_id']) && !isset($_POST['autorizacion']) && !isset($_POST['monto']) && !isset($_POST['meses'])){
  header("Location: pagos.php");
} else {	
  //Creamos el cleinte
  $cliente_id=$_POST['cliente_id'];
  $autorizacion=$_POST['autorizacion'];
  $monto=$_POST['monto'];
  $meses=$_POST['meses'];

  $Sql="insert into pagos (cliente_id, autorizacion, monto, meses) values(
      '".$cliente_id."',
      '".$autorizacion."',
      '".$monto."',
      '".$meses."')";
  mysqli_query($conexion,$Sql);
  header("Location: pagos.php");
}
?>