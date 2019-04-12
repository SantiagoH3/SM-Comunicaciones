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
  <link rel="stylesheet" href="./src/scss/pages/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
    body {
    input, textarea, select, a { outline: none; }
    background-color: $light-blue;

    .modal-content {
        height: 309px;
        overflow: hidden;
        transition: 1.5s;
    }

    .modal-anim {
        transition: 1.5s;
    }

    @keyframes modal-in {
        0% { left: -200% }
        100% { left: 0% }
    }
    
    .login {

        .lost-pass {
            margin: 0 auto;
            font-size: 14px;
        }

        font-family: $primary-font;
        outline: 100px;
    
        input {
            height: 40px;
            border-right: 1px solid rgb(0, 0, 0);
            background-color: #f0f0f0; 
            z-index: 0;
        }

        input:focus {
            background-color: white; 
            outline: 100px;
            border: 1px solid #0585FB;
        }

        .input-pass {
            border-bottom: 1px solid rgb(0, 0, 0);
            border-radius: 20px;
            border-top-right-radius: 0px;
        }

        .input-email {
            border-top: 1px solid rgb(0, 0, 0);
            border-bottom: 1px solid #0585FB;
            border-top-right-radius: 20px;
        }

        .input-group {
            margin:0px auto;
            width: 1px;
            margin-bottom: 5px;

            .form-control{
                margin: auto;
                width: 100%;
                height: 40px;
            }

            span {
                background: rgb(202, 202, 202);
                border-top: 1px solid rgb(0, 0, 0);
                border-left: 1px solid #0585FB;
                border-bottom: 1px solid #0585FB;
                border-top-left-radius: 20px;
                color: rgb(52, 138, 231);
                border-bottom-left-radius: 0;
                font-size: 20px;
            }

            .span2 {
                border-top: 1px solid #0585FB;
                border-bottom: 1px solid rgb(0, 0, 0);
                border-left: 1px solid #0585FB;
                border-top-left-radius: 0px;
                border-bottom-left-radius:20px;
            }

            .input-pass {
                border-top: 1px solid #0585FB;
            }

            input {
                font-size: 20px;
            }

            input:hover {
                background-color: white;
            }

            .active-input {
                color: #e67e22;
            }

            .active-input-ok {
                color: #2ecc71;
            }
        }

        .btn-login {
            margin-top: 10px;
            width: 40%;
            height: 42px;
            color: white;
            border: 1px solid #0585FB;
            background-color: #0585FB;
            box-shadow: -0.5px 2px 4px 1px black;
            font-size: 20px;
            border-radius: 10px;
            overflow-x: hidden;
            transition: 1s;
            outline: none;
        }

        .container {
            display: table;

            .welcome {
                text-align: center;
                font-size: 72px;
                color: $black-b;
                display: table-cell; 
                vertical-align: middle;
                text-shadow: 0px 4px 4px rgba(90, 90, 90, 0.66);
                color: blue;
                padding-top: 100px;
            }
        }

        .show {
            display: block !important;
            background: rgba(56, 56, 56, 0.7);
            padding: 13% 0;

            h4 {
                font-size: 30px;
                font-weight: bold;
                text-shadow: 1px 1px rgb(129, 129, 129);
            }
        } 
    }
}

.login-start {
    width: 75% !important;
    transition: 2s;
}

.a-btn {
    text-decoration: none;
    color: white;
}

.a-btn:hover {
    color: white;
    text-decoration: none;
}
  </style>
</head>
  <body> 
    <div class="login">
      <div class="container">
          <span class="welcome">BIENVENIDO</span>
      </div>
      <div id="modal-show" class="modal fade in show">
        <div class="modal-dialog modal-login">
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
    <script src="./src/js/anims.js"></script>
  </body>
</html>