<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/bulma.css.map">
    <link rel="stylesheet" href="css/bulma.min.css">
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

        /* .is-boos{
            font-size:2rem;
        }
        .is-boos-med{
            font-size:1.5rem;
        } */
        

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
            /* width: 37rem;
            height: 2rem; */
            width: 21rem;
            height: 1rem;
            margin-right: 5%;
            background: peru;
            box-shadow: 3px 10px 10px -5px rgba(0, 0, 0, 0.63);
            float: right;
        }

        .opciones {
            margin-top: 10rem;
            margin-right: 5%;
            display: flex;
            padding: 10px;
            justify-content: space-between;
            align-items: center;
            padding-left: 85px;
        }

        .btnTabla {
            width: 100%;
        }

        .tabla {
            margin-left: 2rem;
        }

        .headerTabla {
            color: #484848;
            background-color: #cccccc;
            font-size: 1.5rem;
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

        #logo {
            width: 80px;
            height: 80px;
            display: inline-block;
            padding: 30px;

        }

        a {
            color: white;
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
            <li id="btnProductos" class="is-active"><a href="Inv.php">Productos</a></li>
            <li id="btnPlatillos"><a href="sub_Platillos.php">Platillos</a></li>
            <li id="btnProveedores"><a href="sub_Proveedores.php">Proveedores</a></li>
            <li id="btnReportes"><a href="">Reportes</a></li>
        </ul>
    </div>
    <br>
    <div class="columns">

        <div class="column is-two-thirds tabla is-boos-med">
            <form action="#" method="POST " enctype="multipart/form-data ">
                <div class="field">
                    <div class="control ">
                        <input id="txtBuscar" onkeyup="fn_Buscar()" name="txtBuscar" class="input is-medium is-boos" type="text" placeholder="Buscar..."
                            style="box-shadow: 1px 3px 10px 0px rgba(0, 0, 0, 0.63);">
                        <!-- <button >Buscar</button> -->
                        
                    </div>
                </div>
            </form>
            <br>
                                <form action="insertarInvProductos.php" method="POST" enctype="multipart/form-data" style="width:100%;">
                            <div id="tabla">
                                <div id="cabezeraTabla" class="columns is-boos-med">
                                            <div class="column is-one-third is-boos-med">
                                                <input class="button is-danger is-rounded btnTabla is-boos-med" type="submit" value="Sacar del inventario" formaction="insertarInvProductos.php?tipo=quitar">
                                            </div>
                                            <div class=" column is-one-third ">
                                                <input id="cantidadCambia"  name="cantidadCambia" class="input is-primary is-boos-med" type="number" placeholder="0.00 kg"
                                                    style="text-align: center;">
                                            </div>
                                            <div class="column is-one-third ">
                                                <input class="button is-success is-rounded btnTabla is-boos-med" type="submit" value="Regresar al inventario" formaction="insertarInvProductos.php?tipo=agregar">
                                            </div>
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
                                        ?>
                                <table class="table">
                                    <tr>
                                        <td class="headerTabla"><b>NOMBRE</b></td>
                                        <td class="headerTabla"><b>PRECIO</b></td>
                                        <td class="headerTabla"><b>CANTIDAD</b></td>
                                        <td class="headerTabla"><b>TIPO</b></td>
                                        <td class="headerTabla"><b></b></td>
                                        <td class="headerTabla"><b></b></td>
                                        <td class="headerTabla"></td>
                                    </tr>

                                    <tbody>
                                        <?php

                                foreach($resultado AS $prod){
                                    echo "<tr>
                                    <td>$prod[nombreP]</td>
                                    <td>$$prod[precio]</td>
                                    <td>$prod[cantidad]</td>
                                    <td >$prod[tipo]</td>
                                    <td><a href='eliminarProducto.php? id='$prod[id_producto]'><img src='img/basura.png' width='30px'></a></td>
                                    <td><input class='form-control' style='width:34px;' type='radio' name='id_producto' id='id_producto' value='$prod[id_producto]' readonly='readonly' required></td>
                                    </tr>";
                                    }
                                    ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </form>

            </div>

    <div class="column">
        <div class="opciones">
            <!-- <a class="button is-warning is-rounded">Editar</a> -->
            <button class="button btnOpciones is-rounded is-boos-med">Detalles</button>
            <a class="button btnOpciones is-rounded is-boos-med" href="agrProducto.php">Nuevo</a>
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
    </div>
        </div>

    </article>




    <!--Contenido 1 -->
    <!--Contenido 2 -->
    <!--Contenido 3 -->

    <script src="JS/jquery-3.3.1.min.js "></script>
    <script src="JS/bootstrap.js "></script>
    <script src="JS/lightbox.min.js "></script>
    <!-- <script src="JS/cambioInventario.js "></script> -->
    <script>
    const listaProductos="hola";


    // function myFunction() {
    // var x = document.getElementById("fname");
    //         x.value = x.value.toUpperCase();
    // }
    function fn_Buscar() {
        console.log(this.listaProductos);
        var v_nombreP = document.getElementById("txtBuscar").value;
        alert(`Estamos buscando ${v_nombreP}`);
        this.listaProductos=this.listaProductos+" "+v_nombreP;
        
    }


    </script>
    
</body>

</html>