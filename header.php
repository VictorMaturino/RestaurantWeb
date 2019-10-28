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

            .navbar-nav.navbar-left li a {
                color:#e8e8e8;
            }

            .navbar-nav.navbar-right li a {
                color: white;
            }

            p{
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
            <br>
                <ul class="navbar-nav navbar-left">
                    <li role="presentation" class="">
                    <img src="img/logo.png" alt="" width="60px" height="50px">
                    </li>
                    <li role="presentation" class="">
                        <a href="Catalogo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Catalogo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="Inv.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inventario &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="Ventas.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administración &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <?php 
                        if (empty($_SESSION['usuario'])) {
                             echo '
                            <li role="presentation" id="login">
                                <a href="login.php">Iniciar Sesion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            ';
                        }
                        else{
                             echo '
                            <li role="presentation" id="usuario">
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A cargo: '.$_SESSION["usuario"].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </li>
                            <li role="presentation" id="salir">
                                <a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            ';                            
                        }
                    //     if (empty($_SESSION['usuario']) && $_SESSION["tipo"]=="Administador") {
                    //         echo '
                    //        <li role="presentation" id="login">
                    //            <a href="ventas.php">Iniciar Sesion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    //        </li>
                    //        ';
                    //    }

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