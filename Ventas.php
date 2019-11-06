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

        #tabla {
            background: gray;
        }

        #div1 {
            overflow: scroll;
            height: 100%;
            width: 100%;
            /* margin-left: 10%; */
        }

        #div1 table {
            width: 100%;
            background-color: gray;
            color: white;
            text-align: center;

        }

        #btnBuscar {
            margin-top: 1rem;
            margin-left: 51rem;
        }

        #divTabla {
            background: gray;
            height: 400px;
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
            width: 200px;
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
            <li id="btnProductos" class="is-active" onclick="cambioSubModuloProductos()"><a>Ventas</a></li>
            <li id="btnPlatillos" ><a href="registro.php">Usuarios</a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="columns">
        <div class="column is-two-thirds tabla">

            <br>

            <div id="tabla">

                <div id="divTabla">
                    <div id="div1">
                        <table class="table">
                            <!-- is-hoverable -->
                            <tr>
                                <td>MESERO</td>
                                <td>MESA</td>
                                <td>DESDE</td>
                                <td>HASTA</td>
                                <td>TOTAL</td>
                                <!-- <td>SELECCIONAR</td> -->
                            </tr>
                            <tr>
                                <td>Mesero</td>
                                <td>Mesa 1</td>
                                <td>22/03/2019</td>
                                <td>22/03/2019</td>
                                <td>$1500</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr>
                                <td>Arroz integral</td>
                                <td>100</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <form action="# " method="POST " enctype="multipart/form-data ">
                <div class="field">
                    <div class="control">
                        <label for="">Desde:</label>
                        <input class="input" type="date" style="box-shadow: 1px 3px 10px 0px rgba(0, 0, 0, 0.63);">
                        <br><br>
                        <label for="">Hasta:</label>
                        <input class="input" type="date" style="box-shadow: 1px 3px 10px 0px rgba(0, 0, 0, 0.63);">
                    </div>
                </div>
                <br>
                <button class="button btnOpciones is-rounded btn-success">Imprimir</button>
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