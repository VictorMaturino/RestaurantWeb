<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/bulma.css.map">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/iconos.css" > 
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css"> -->

    <style lang="scss">
        /* .btnMenu {

        } */
    </style>

    <style>
        body {
            background-color: #e4e4e461;
            /* #e4e4e461 */
        }

        /* Tabla */

        #tabla {
            border: solid;
            border-radius: 10px;
        }

        #cabezeraTabla {
            background: grey;
            border: solid;
            border-radius: 50px;
        }

        .estantes {
            /* display: flex; */
            text-align: right;
            justify-content: right;
            /* align-content: flex-start; */
        }

        /* .btnMenu{

        } */

        .estante {
            width: 23rem;
            height: 1rem;
            /* margin-top: 1rem; */
            background: peru;
            box-shadow: 3px 10px 10px -5px rgba(0, 0, 0, 0.63);
            float: right;
        }

        .opciones {
            display: flex;
            padding: 10px;
            justify-content: space-between;
            align-items: center;
            padding-left: 40px;
        }

        .btnTabla {
            width: 100%;
        }

        .tabla {
            margin-left: 2rem;
            margin-top: -10%;
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
            color: #e8e8e8;
            background-color: #848484;
            border-radius: 6px;
        }

        .boton button:hover {
            color: black;
            background-color: #E7F66D;
            /* font-size: 30px; */
        }

        .btnOpciones {
            color: black;
            background-color: #ffe788;
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

        .control {
            width: 400px;
        }

        .column {
            margin-left: 20%;
            margin-top: 1%;
        }
        #btnGuardar{
            width:25rem;
        }
    </style>
</head>


<body>
    <?php
    include "header.php";
    ?>
    <div class="enc">
        <p class="enc_1">Administración</p>
    </div>
    <br>
    <div class="tabs is-centered">
        <ul>
            <li id="btnProductos" onclick="cambioSubModuloProductos()"><a href="ventas.php">Ventas</a></li>
            <li id="btnPlatillos" class="is-active"><a href="registro.php">Usuarios</a></li>
        </ul>
    </div>
    <div class="columns">
        <div class="column is-two-thirds tabla">

            <div class="column">
                <form action="insertar.php" method="POST" enctype="multipart/form-data ">
                    <div class="field">
                        <div class="control">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
                        </div>
                        <br>
                        <div class="control">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" required>
                        </div>
                        <br>
                        <div class="control">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Contraseña"
                                required>
                        </div>
                        <br>
                        <div class="control">
                            <label for="contrasena2">Verificar Contraseña</label>
                            <input type="password" name="contrasena2" id="contrasena2" class="form-control"
                                placeholder="Repetir Contraseña" required>
                        </div>
                        <br>
                        <div class="control">
                            <label for="tipo">Tipo de Usuario</label>
                            <select name="tipo" size="1" id="tipo" class="form-control">
                                <option>Mesero</option>
                                <option>Cocinero</option>
                                <option>Administrador</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <button id="btnGuardar" class="button btnOpciones is-success is-medium">
                    <span class="icon is-small">
                    <i class="far fa-check-circle"></i>
                    </span>
                    
                    <span>Guardar</span>
                    </button>
                </form>
            </div>

        </div>

        </article>


        <script src="JS/jquery-3.3.1.min.js "></script>
        <script src="JS/bootstrap.js "></script>
        <script src="JS/lightbox.min.js "></script>
        <script src="JS/cambioInventario.js "></script>
        <script>



        </script>
</body>

</html>