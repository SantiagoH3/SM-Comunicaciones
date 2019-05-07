<?php
ob_start();
?>
<?php
include ("DBconection.php");
if(!isset($_POST['cliente_id']) && !isset($_POST['monto']) && !isset($_POST['meses'])){
  header("Location: pagos.php");
} else {	
  //Creamos el cleinte
  $cliente_id=$_POST['cliente_id'];
  $autorizacion=$_POST['autorizacion'];
  $monto=$_POST['monto'];
  $meses=$_POST['meses'];

  $Sql="insert into pagos (cliente_id, monto, meses) values(
      '".$cliente_id."',
      '".$monto."',
      '".$meses."')";
  mysqli_query($conexion,$Sql);

  $sql_cliente = 'UPDATE clientes SET fecha_vencido ="'.$meses.'" WHERE id_cliente ='.$cliente_id;
  mysqli_query($conexion,$sql_cliente);
  $sql_vencido_update = 'UPDATE clientes SET vencido = "no" WHERE id_cliente ='.$cliente_id;
  mysqli_query($conexion,$sql_vencido_update);
  header("Location: pagos.php");
}
?>
<?php
ob_end_flush();
?>