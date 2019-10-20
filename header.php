<?php
SESSION_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insolit Studios</title>

    <head>
        <style>
            #logo {
                width: 80px;
                height: 80px;
                display: inline-block;
                padding: 30px;

            }

            .navbar-brand {
                font-family: 'Arial';
            }

            .navbar {
                background-color: #3c3b3a;
                /* background-color: #3c3b3a; */
                border-radius: 0%;
                font-size: 18px;
                margin-bottom: -5px;

            }

            .nav.navbar-nav li a {
                color:#e8e8e8
            }

            .nav.navbar-nav.navbar-right li a {
                color: white;
            }
        </style>
    </head>
</head>

<body>
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#barra"
                    aria-expanded="false">
                    <span class="sr-only">Cambiar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="barra">
                <ul class="nav nav-pills navbar-nav navbar-left">
                    <li role="presentation" class="">
                    <img src="img/logo.png" alt="" width="60px" height="50px">
                    </li>
                    <li role="presentation" class="">
                        <a href="Catalogo.php">Catalogo</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="Inv.php">Inventario</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="Ventas.php">Ventas</a>
                    </li>
                </ul>
                <ul class=" nav navbar-nav navbar-right">
                    <?php 
                        if (empty($_SESSION["usuario"])) {
                             echo '
                            <li role="presentation" id="login">
                                <a href="login.php">Iniciar Sesion</a>
                            </li>
                            ';
                        }
                        else{
                             echo '
                            <li role="presentation" id="usuario">
                                <a href="#">A cargo: '.$_SESSION["usuario"].'</a>
                            </li>
                            <li role="presentation" id="salir">
                                <a href="logout.php">Salir</a>
                            </li>
                            ';                            
                        }

                         ?>
                </ul>
            </div>
        </div>
    </nav>




    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/lightbox.min.js"></script>
    <script>

    </script>

</body>

</html>