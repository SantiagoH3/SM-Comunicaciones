<?php
    include "DBconection.php";

    $sql = 'SELECT * FROM pagos';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $res = $sentencia->fetchAll();

    $total_pagos = $sentencia->rowCount();
    $pagos_x_pagina = 10;
    $paginas = $total_pagos/$pagos_x_pagina;
    $paginas = ceil($paginas);

    if (!$_GET){
        header('Location:pagos.php?pagina=1');
    }

    if ($_GET['pagina']>$paginas || $_GET['pagina']<1){
        header('Location:pagos.php?pagina=1');
    }

    $iniciar = ($_GET['pagina']-1)*$pagos_x_pagina;
    $sql_pagos = 'SELECT * FROM pagos LIMIT :iniciar,:pagos';
    $sentencia_pagos = $pdo->prepare($sql_pagos);
    $sentencia_pagos->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
    $sentencia_pagos->bindParam(':pagos', $pagos_x_pagina, PDO::PARAM_INT);
    $sentencia_pagos->execute();

    $resultado_pagos = $sentencia_pagos->fetchAll();
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
    <title>Pagos</title>
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
                <a class="nav-link active" href="pagos.php">Pagos</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="morosos.php">Morosos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item menu logout">
                <a class="nav-link" href="#">Log Out</a>
            </li>
            </ul>
        </div>
      </nav>
<body style='font-family: poppins; background-color: #0c2461;'>
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
                    <?php 
                            foreach($resultado_pagos as $row){
                                $resultado = mysqli_query($conexion,'SELECT * FROM clientes WHERE id_cliente ='.$row[1]);
                                while($dato = mysqli_fetch_array($resultado)){
                            echo '
                        <tr>
                            <th scope="row">
                                '.$row[0].'
                            </th>
                            <td>
                                '.$dato["localidad"].'
                            </td>
                            <td>
                                '.$dato["nombre"].'
                            </td>
                            <td>
                                $ '.$row[3].'
                            </td>
                            <td>
                                '.$dato["dir_ip"].'
                            </td>
                            <td>
                                '.$row[4].'
                            </td>
                        </tr>
                        ';
                        }
                    }
                    ?>
                </tbody>
            </table>
            <div class="row table-footer">
                <div class="paginacion col-md-6 col-lg-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">

                            <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled': '' ?>">
                                <a class="page-link" href="pagos.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                                    Previous
                                </a>
                            </li>
                            
                            <?php for($i=0;$i<$paginas;$i++): ?>
                                <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
                                    <a class="page-link" href="pagos.php?pagina=<?php echo $i+1 ?>">
                                        <?php echo $i+1 ?>
                                    </a>
                                </li>
                            <?php endfor ?>

                            <li class="page-item <?php echo $_GET['pagina']>=$paginas? 'disabled': '' ?>">
                                <a class="page-link" href="pagos.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                                    Next
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="nuevo-cliente col-md-6 col-lg-6">
                    <button class="btn-nc" data-toggle="modal" data-target="#exampleModal" type="submit">Nuevo Pago</button>
                </div>
            </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">			
                    <h4 class="modal-title">Nuevo Pago</h4>
                </div>
                <div class="modal-body">
                    <form action="altapago.php" method="post">
                        <div class="form-group">
                            <input id="localidad" type="text" class="input-nc nc-nombre border-nc" name="localidad" placeholder="Localidad" required="required">		
                        </div>
                        <div class="form-group">
                            <input id="nombre" type="text" class="input-nc nc-telefono border-nc" name="cliente_id" placeholder="Cliente ID" required="required">		
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-nc nc-monto border-nc" name="monto" placeholder="Monto" required="required">		
                        </div>
                        <div class="form-group">
                            <input id="meses" type="text" class="input-nc np-border" name="meses" placeholder="Meses" required="required">		
                        </div> 
                        <div class="modal-footer">
                            <!-- <button type="button" id="limpiar-nc" class="btn-mnc btn-limpiar">Limpiar</button> -->
                            <button type="button" class="btn-mnc btn-cerrar" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn-mnc btn-guardar">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>