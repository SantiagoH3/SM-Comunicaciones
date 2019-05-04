<?php
ob_start();
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location: login.php');
}
include "DBconection.php";

$sql = "SELECT * FROM clientes WHERE vencido = 'si'";
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$res = $sentencia->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
  <title>Notificaciones</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand logobrand" href="clientes.php">SM Comunicaciones</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item menu">
            <a class="nav-link" href="clientes.php">Clientes</a>
        </li>
        <li class="nav-item menu">
            <a class="nav-link" href="pagos.php">Pagos</a>
        </li>
        <li class="nav-item menu">
            <a class="nav-link" href="morosos.php">Morosos</a>
        </li>
        <li class="nav-item active menu">
            <a class="nav-link" href="notificaciones.php">Notificaciones <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item menu logout">
            <a class="nav-link" href="./cerrar.php">Log Out</a>
        </li>
        </ul>
    </div>
  </nav>
  <div class="space"></div>
  <div class="container">
    <div class="row">
      <?php
      foreach($res as $row){
        echo '<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 notificacion">
        <div class="info-not nombre-not"><b>Deudor:&nbsp;&nbsp;</b>'.$row[1].'</div>
        <div class="info-not">Localidad:&nbsp;&nbsp;'.$row[3].'</div>
        <div class="info-not">IP:&nbsp;&nbsp;'.$row[4].'</div>
        <div class="info-not"><img src="./src/assets/alert.png" class="img-fluid alert-img"></div>
        </div>';
      }
       ?>
    </div>
  </div>
</body>
</html>
<?php
ob_end_flush();
?>