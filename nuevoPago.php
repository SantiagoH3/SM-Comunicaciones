<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SM - Nuevo Pago</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand logobrand" href="home.php">SM Comunicaciones</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav menu">
            <li class="nav-item">
                <a class="nav-link" href="clientes.php">Clientes </a>
            </li>
            <li class="nav-item active menu">
                <a class="nav-link" href="pagos.php">Pagos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="morosos.php">Morosos</a>
            </li>
            </ul>
        </div>
      </nav>
<body>
    <!-- Content -->
    <div class="login">
        <div class="modal show fade in">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">			
                        <h4 class="modal-title">Nuevo Pago</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="input-nc nc-nombre" name="cliente" placeholder="Cliente" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-nc np-authorizacion border-nc" name="autorizacion" placeholder="No. Autorización" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-nc np-monto border-nc" name="monto" placeholder="Monto" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-nc np-fecha-pago border-nc" name="fechapago" placeholder="Fecha de pago" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-nc np-fecha-corte border-nc np-border" name="fechacorte" placeholder="Fecha de corte" required="required">		
                            </div>
                            <div class="btn-login-form">
                                <button class="btn-login btn-sm" type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</body>
</html>