<?php
  include "DBconection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SM Comunicaciones</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet">
  <style>
    body {
      background: black;
    }

    .welcome {
      font-family: 'Holtwood One SC', serif;
    }

    .modal-title {
      text-align: center;
    }
  </style>
</head>
  <body> 
    <div class="login">
      <div class="container">
          <span class="welcome">BIENVENIDO</span>
      </div>
      <div id="modal-show" class="modal fade in show">
        <div class="modal-dialog modal-dialog-centered modal-login">
          <div id="modal" class="modal-content">
            <div class="modal-header">			
                <h4 class="modal-title">SM Comunicaciones</h4>
            </div>
            <div class="modal-body">
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
                <div id="input-group" class="input-group form-group">
                  <span id="span-select" class="input-group-addon span1"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="email" type="text" class="form-control input-email" name="usuario" placeholder="User">
                </div>
                <div id="input-group" class="input-group form-group">
                  <span id="span-select2" class="input-group-addon span2"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control input-pass" name="password" placeholder="Password">
                </div>       
                <div class="form-group">
                  <div class="btn-login-form">
                    <button onclick="login.submit()" class="btn btn-login btn-sm"><a class="a-btn" onclick="login.submit()" href="#">Ingresar</a></button>
                  </div>
                </div>
                <?php if(!empty($errores)): ?>
                  <div class="error">
                    <ul>
                      <?php echo $errores; ?>
                    </ul>
                  </div>
                <?php endif; ?>
              </form>
            </div>
            <div class="modal-footer">
              <a href="#" class="lost-pass">Olvidé mi contraseña</a>
            </div>
          </div>
        </div>     
      </div>
    </div>
    <script src="src/js/login.js"></script>
    <script src="src/js/anims.js"></script>
  </body>
</html>