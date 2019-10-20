<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas</title>
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

        .form-group {
            width: 20%;
            margin: 1%;
            float: left;
        }

        #div1 {
            overflow: scroll;
            height: 200px;
            width: 520px;
            margin-left: 10%;
        }

        #div1 table {
            width: 500px;
            background-color: lightgray;
        }

        .botones {
            margin-left: 10%;
        }
    </style>
</head>


<body>

    <?php
    include "header.php";
    ?>

    <div class="enc">
        <p class="enc_1">Inventario</p>
    </div>
    <br>
    <div class="boton">
        <button><img src="img/star2.png" width="20px" height="20px"> Productos</button>
        <button><img src="img/star2.png" width="20px" height="20px"> Provedores</button>
        <button><img src="img/star2.png" width="20px" height="20px"> Reportes</button>
    </div>


    <article class="container-fluid">
        <section class="row">
            <section class="col-md-12">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="search" name="buscar" class="form-control" placeholder="Buscar">
                        <br>
                        <button class="btn btn-primary">Buscar</button>
                    </div>
                </form>
            </section>
        </section>
    </article>

    <article class="container-fluid">
        <section class="row">
            <section class="col-md-12">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="number" name="kilos" class="form-control" placeholder="Kilogramos 0.00">
                        <br>
                        <button class="btn btn-danger">Retirar</button>
                        <button class="btn btn-success">Agregar</button>
                    </div>
                </form>
            </section>
        </section>
    </article>


    <div id="div1">
        <table border="1">
            <tr>
                <td>PRODUCTO</td>
                <td>CANTIDAD</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
        </table>
    </div>

        <br>

        <div class="botones">
            <button>Editar</button>
            <button>Agregar</button>
            <button>Suspender</button>
        </div>
        
        <br>
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