<?php
ob_start();
include "DBconection.php";
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes Morosos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
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
                <a class="nav-link active" href="morosos.php">Morosos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="notificaciones.php">Notificaciones</a>
            </li>
            <li class="nav-item menu logout">
                <a class="nav-link" href="./cerrar.php">Log Out</a>
            </li>
            </ul>
        </div>
      </nav>
<body style='font-family: poppins; background-color: #0c2461;'>
    <div class="">
        <div class="table-container">
            <div class="table-header">
                <button class="btn-filtro" type="image" value="Filtro" src="../src/assets/filter.svg"><i class="fa fa-filter"></i><span class="filtro">&nbsp;&nbsp;Filtro</span></button>
            </div>
            <table class="table-sm">
                <thead>
                    <tr>
                    <th class="hcenter" scope="col">No.</th>
                    <th class="hcenter" scope="col">Localidad</th>
                    <th class="hcenter" scope="col">Nombre</th>
                    <th class="hcenter" scope="col">Monto</th>
                    <th class="hcenter" scope="col">IP</th>
                    <th class="hcenter" scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>San Alexis</td>
                        <td>Alexis</td>
                        <td>$ 12,000.00</td>
                        <td>192.168.10.2</td>
                        <td>15 / 04 / 2015</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>San Luis</td>
                        <td>Luis</td>
                        <td>$ 15,000.00</td>
                        <td>192.168.10.1</td>
                        <td>15 / 06 / 2016</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>San Tiago</td>
                        <td>Santiago Vagina </td>
                        <td>$ 4,000.00</td>
                        <td>192.168.10.3</td>
                        <td>32 / 01 / 2020</td>
                    </tr>
                </tbody>
            </table>
            <div class="table-footer">
                <a class="total" >Total 31,000.00</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
ob_end_flush();
?>