<?php 
	include "DBconection.php";
	if($_POST['Caso']=="Eliminar"){
		echo 'El cliente se ha eliminado';
		$Sql="delete from clientes where id_cliente=".$_POST['Id'];
		mysqli_query($conexion,$Sql);
	}
?>