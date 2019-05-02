<?php
ob_start();
?>
<?php
include ("DBconection.php");
//Creamos el cleinte
$sql = "UPDATE clientes 
        SET nombre='".$_POST['nombre']."', localidad='".$_POST['localidad']."', tel='".$_POST['telefono']."', dir_ip='".$_POST['ip']."'
        WHERE id_cliente='".$_POST['id']."'";

mysqli_query($conexion,$sql);
header("Location: clientes.php");
?>
<?php
ob_end_flush();
?>