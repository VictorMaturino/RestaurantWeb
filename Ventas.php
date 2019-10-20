
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
    </style>
</head>


<body>

    <?php
    include "header.php";
    ?>

    <div class="enc">
        <p class="enc_1">Venta</p>
    </div>
    <br>
    <div class="boton">
        <button><img src="img/star2.png" width="20px" height="20px"> Reportes</button>
        <button><img src="img/star2.png" width="20px" height="20px"> -----</button>
        <button><img src="img/star2.png" width="20px" height="20px"> -----</button>
    </div>


    <article class="container-fluid">
        <section class="row">
            <section class="col-md-12">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="desde">Kevin</label>
                        <input type="date" name="desde" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="hasta">Hasta</label>
                        <input type="date" name="hasta" class="form-control">
                    </div>
                    <br><br>
                    <button class="btn btn-success">IMPRIMIR</button><img src="img/impresora.png" width="30px">
                </form>
            </section>
        </section>
    </article>




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