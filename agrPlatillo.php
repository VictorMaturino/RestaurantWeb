<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/bulma.css.map">
    <link rel="stylesheet" href="css/bulma.min.css">



    <style lang="scss">
        /* .btnMenu {

        } */
    </style>

    <style>
        body {
            background-color: #e4e4e461;
            /* #e4e4e461 */
        }

        #btnGuardar {
            margin-left: 70rem;

        }

        /* Tabla */
        #txtPrecio {
            width: 40rem;
        }

        #formulario {
            border: solid;
            border-radius: 10px;
            background: #cccccc;
            padding: 2rem;
            color: black;
            margin-right: 0.5rem;
        }

        #tipoIng {
            margin-left: 2rem;
        }

        .field label {
            /* width: 80%; */
            color: #484848;
        }

        .headerTabla {
            color: #484848;
            background-color: #cccccc;
            font-size: 1.5rem;
        }

        .estantes {
            /* display: flex; */
            text-align: right;
            justify-content: right;
            margin-top: 50rem;
            /* align-content: flex-start; */
        }

        #precio {
            position: absolute;
            margin-left: 18rem;
            margin-top: 4rem;
        }

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

        .tabla {
            margin-left: 2rem;
        }

        #btnTipo {
            margin-left: 2rem;

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

        #barrasOpciones {
            margin-top: 7rem;
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
    <div class="tabs is-centered is-boos-med">
        <ul>
            <li id="btnProductos"><a href="Inv.php">Productos</a></li>
            <li id="btnPlatillos" class="is-active"><a href="sub_Platillos.php">Platillos</a></li>
            <li id="btnProveedores"><a href="sub_Proveedores.php">Proveedores</a></li>
            <li id="btnReportes"><a href="">Reportes</a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="columns">
        <div id="formulario" class="column is-two-thirds tabla">
            <br>
            <form action="insertarPlatillo.php" method="POST">
                <div class="field">
                    <label for="nombre" class="label">Nombre PLATILLO</label>
                    <button id="btnGuardar" class="button btnOpciones is-rounded is-success">Agregar</button>
                    <div class="control">
                        <input id="txtNombre" class="input" type="text" name="nombre" placeholder="Nombre">
                    </div>
                </div>
                <br>
                <div class="field is-horizontal">
                    <label for="nombre" class="label">Precio</label>
                    <div class="control">
                        <input id="txtPrecio" class="input" type="number" name="precio" placeholder="Precio">
                        <div class="control">
                        </div>
                    </div>
                    <div id="tipoIng" class="control">
                        <select name="tipo" size="1" id="tipo" class="form-control" class="entradas">
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <option value="Comida">Comida</option>
                            <option value="Bebidas">Bebidas</option>
                            <option value="Caldos">Caldos</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>

                <hr style="color: #484848; background-color: #484848;">
                <div id="divTabla">
                    <div id="div1">
                        <?php
    include "conexion.php";
    $consulta = "SELECT * FROM productos";
    $registros = $db->query($consulta);

    $resultado = array();
    while($fila = $registros->fetch_assoc()){
        $resultado[] = $fila;
    }

    //var_dump($resultado);

    ?>
                        <table class="table">

                            <!-- is-hoverable -->
                            <tr>
                                <td class="headerTabla"><b>INGREDIENTES</b></td>
                                <td class="headerTabla"><b></b></td>
                            </tr>

                            <tbody>
                                <?php

                        foreach($resultado AS $prod){
                            echo "<tr>
                            <td>$prod[nombreP]</td>
                            <td><input type='checkbox' name='ingredientes' value='$prod[nombreP]' class='form-control'></td>
                            </tr>";
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>


        </div>
        <!-- </div> -->
        <div id="barrasOpciones" class="column">
            <div class="opciones">
            </div>
            <div class="estante"></div>
            <br>
            <br>
            <br>
            <div class="estante"></div>
            <br>
            <br>
            <!-- <div class="opciones">
            <button class="button is-danger is-rounded">Suspender</button>
            </div> -->
            <div class="estante"></div>
        </div>



        </article>



        <script src="JS/jquery-3.3.1.min.js "></script>
        <script src="JS/bootstrap.js "></script>
        <script src="JS/lightbox.min.js "></script>
        <script src="JS/cambioInventario.js "></script>

        <script>
            // btnGuardar
            function metGuardar() {
                var v_nombreP = document.getElementById("txtNombreP").value;
                var v_precio = document.getElementById("txtPrecio").value;
                alert(`Quieres guardar ${nombreP}`);
                debugger;
                .ajax({
                        url: "../bd/insertarPlatillo.php",
                        type: "POST",
                        data: {
                            v_nombreP: nombre,
                            v_precio: precio
                            // usuario: v_usuario,
                            // contrasena: v_contrasena
                        }
                    })
                    .done(function (res) {
                        if (res == 1) {
                            document.location.href = "Inv.php";
                        } else {
                            $("#mensaje").text("Error en la operación!")
                                .addClass("text-danger")
                                .fadeIn()
                                .delay(3000)
                                .fadeOut();
                            console.log(res);
                        }
                    });

            }
            var global = '';

            function cambiar(campo) {
                global = global + ", " + campo;
            }

            function abrirDropDown() {
                alert("hola");


                // var drop = document.getElementById('tipo');
                // debugger;
                // if (drop.classList.contains("is-active")) {
                //     drop.classList.remove("is-active");
                // }
                // else{
                //     drop.classList.add("is-active");
                // }
            }
        </script>
</body>

</html>