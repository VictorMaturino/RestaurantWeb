<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION['usuario'])){
        $cliente = $_SESSION['usuario'];
    }else{
 header('Location: login.php');
     die() ;

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        body {
            background-color: #F1CB7A;
        }

        .enc {
            background-color: black;
            width: 100%;
            height: 40px;
        }

        .enc_1 {
            font-size: 30px;
            color: white;
            text-align: center;
        }

        .boton button {
            text-decoration: none;
            padding: 10px;
            font-weight: 400;
            font-size: 20px;
            color: black;
            background-color: #E7F66D;
            border-radius: 6px;
        }

        .boton button:hover {
            color: black;
            background-color: #E7F66D;
            font-size: 30px;
        }

        .boton {
            text-align: center;
        }

        .busq {
            margin-top: 10%;
            margin-left: 8%;
        }
    </style>
</head>


<body>

    <?php
    include "header.php";
    ?>

    <div class="enc">
        <p class="enc_1">CATALOGO</p>
    </div>
    <br>
    <div class="boton">
        <button><img src="img/star2.png" width="20px" height="20px"> Todo</button>
        <button><img src="img/star2.png" width="20px" height="20px"> Comidas</button>
        <button><img src="img/star2.png" width="20px" height="20px"> Bebidas</button>
        <button><img src="img/star2.png" width="20px" height="20px"> Postres</button>
        <button><img src="img/star2.png" width="20px" height="20px"> Otros</button>
    </div>

    <div class="busq">
        <article class="container-fluid">
            <section class="row">
                <section class="col-md-4">
                    <form action="insertar2.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="search" name="bu" class="form-control">
                        </div>
                        <button class="btn btn-primary">Buscar</button>
                    </form>
                </section>
            </section>
        </article>
    </div>


    <!--Contenido 1 -->
    <!--Contenido 2 -->
    <!--Contenido 3 -->

    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/lightbox.min.js"></script>

    <script>

    </script>
</body>

</html>