<?php session_start();
if (isset($_SESSION['usuario'])) {
	header('Location: ./clientes.php');
} else {
	header('Location: login.php');
}
?>