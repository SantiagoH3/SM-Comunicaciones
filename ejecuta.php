<?php 
	include "DBconection.php";
	if($_POST['Caso']=="Eliminar"){
		echo 'El cliente se ha eliminado';
		$Sql="delete from clientes where id_cliente=".$_POST['Id'];
		mysqli_query($conexion,$Sql);
	}
	// if($_POST['Caso']=="Modificar"){
	// 	mysql_query($conexion,"update productos set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
	// 	mysql_query($conexion,"update productos set Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
	// 	mysql_query($conexion,"update productos set Precio='".$_POST['Precio']."' where Id=".$_POST['Id']);
	// 	echo 'El producto se ha modificado';
	// }
?>