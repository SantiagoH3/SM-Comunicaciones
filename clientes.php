<?php
    include "DBconection.php";
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
    <title>Clientes</title>
    <link rel="stylesheet" href="login.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand logobrand" href="clientes.php">SM Comunicaciones</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active menu">
            <a class="nav-link" href="clientes.php">Clientes <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item menu">
            <a class="nav-link" href="pagos.php">Pagos</a>
        </li>
        <li class="nav-item menu">
            <a class="nav-link" href="morosos.php">Morosos</a>
        </li>
        <li class="nav-item menu logout">
            <a class="nav-link" href="#">Log Out</a>
        </li>
        </ul>
    </div>
</nav>
<body style='font-family: poppins; background-color: #0c2461;'>
    <div class="contain">
        <div class="table-container">
            <div class="table-header">
                <button class="btn-filtro" type="image" value="Filtro" src="../src/assets/filter.svg"><i class="fa fa-filter"></i><span class="filtro">&nbsp;&nbsp;Filtro</span></button>
            </div>
            <div class="table-div">
                <table>
                    <thead>
                        <tr>
                            <th class="hcenter" scope="col">No.</th>
                            <th class="hcenter" scope="col">IP</th>
                            <th class="hcenter" scope="col">Localidad</th>
                            <th class="nom" scope="col">Nombre</th>
                            <th class="hcenter" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $resultado=mysqli_query($conexion,"select * from clientes");
                            while($row=mysqli_fetch_array($resultado)){
                            echo '
                            <tr>
                                <th scope="row">
                                    '.$row[0].'
                                </th>
                                <td>
                                    '.$row[4].'
                                </td>
                                <td>
                                    '.$row[3].'
                                </td>
                                <td class="nom">
                                    '.$row[1].'
                                </td>
                                <td>
                                    <button class="edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="delete" data-toggle="modal" data-target="#delete'.$row[0].'"><i class="far fa-trash-alt"></i></button>
                                </td>
                                <!-- Modal eliminar cleinte -->
                                <div class="modal fade modal-ec" id="delete'.$row[0].'" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h2>¿Seguro que quieres eliminar este Cliente?</h2>
                                                <p class="datos-cliente">N: '.$row[1].'&nbsp;&nbsp;&nbsp;&nbsp;IP: '.$row[4].'</p>
                                                <div class="buttons">
                                                    <button class="si-bc eliminar" data-id="'.$row[0].'">Si</button>
                                                    <button class="no-bc" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-footer">
                <button class="btn-nc" data-toggle="modal" data-target="#exampleModal" type="submit">Nuevo Cliente</button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">			
                        <h4 class="modal-title">Nuevo Cliente</h4>
                    </div>
                    <div class="modal-body">
                        <form action="altacliente.php" method="post">
                            <div class="form-group">
                                <input id="nombre" type="text" class="input-nc nc-nombre" name="nombre" placeholder="Nombre(s)" required="required">		
                            </div>
                            <div class="form-group">
                                <input id="localidad" type="text" class="input-nc nc-localidad border-nc" name="localidad" placeholder="Localidad" required="required">		
                            </div>
                            <!-- <div class="form-group">
                                <input type="text" class="input-nc nc-fechaderegistro border-nc" name="fecharegistro" placeholder="Fecha de Registro" required="required">		
                            </div> -->
                            <div class="form-group">
                                <input id="telefono" type="text" class="input-nc nc-telefono border-nc" name="telefono" placeholder="Número Telefónico" required="required">		
                            </div>
                            <div class="form-group">
                                <input id="ip" type="text" class="input-nc np-border" name="ip" placeholder="Dirección IP" required="required">		
                            </div> 
                            <div class="modal-footer">
                                <button type="button" id="limpiar-nc" class="btn-mnc btn-limpiar">Limpiar</button>
                                <button type="button" class="btn-mnc btn-cerrar" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn-mnc btn-guardar">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="eliminar-cliente.js"></script>
</body>
</html>