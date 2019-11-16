<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario Bueno</title>
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

        /* Tabla */

        #formulario {
            border: solid;
            border-radius: 10px;
            background: #cccccc;
            padding: 2rem;
            color: black;
            margin-right: 0.5rem;
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
        #barraOpciones{
            margin-top:7rem;
        }
        .tabla {
            margin-left: 2rem;
        }

        #tipoIng {
            margin-left: 2rem;
        }

        #icoTipoIng {
            /* margin-top: 2.5rem; */
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
        #btnGuardar{
            margin-left:70rem;
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

        .boton {
            text-align: center;
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
    <br>
    <br>
    <br>
    <div class="columns">
        <div id="formulario" class="column is-two-thirds tabla">
        <?php
            include "conexion.php";
            $id=$_GET["var"];
            $consulta = "SELECT * FROM productos WHERE id_producto='$id'";
            $registros = $db->query($consulta);
            
            $resultado = array();
            $nombreP='';
            $proveedor='';
            $cantidad='';
            $costo='';
            $precio='';
            $tipo='';
            while($fila = $registros->fetch_assoc()){
                $proveedor=$fila['id_proveedor']; 
                $resultado[] = $fila;
                $nombreP=$fila['nombreP']; 
                $cantidad=$fila['cantidad'];
                $costo=$fila['costo'];
                $precio=$fila['precio'];
                $tipo=$fila['tipo'];
            }
            
            $consulta = "SELECT * FROM proveedores WHERE id_proveedor='$proveedor'";
            $registros = $db->query($consulta);
            $nombreProveedor='';
            while($fila = $registros->fetch_assoc()){
                $resultado[] = $fila;
                $nombreProveedor=$fila['compania']; 
            }

            ?>
            <form action="insertarP.php?editar=si&var=<?php echo $id;?>" method="POST" enctype="multipart/form-data ">
                <div class="field">
                    <label for="nombre" class="label">EDITAR</label>
                    <button id="btnGuardar" class="button btnOpciones is-rounded is-success">Agregar</button>
                    <label for="nombre" class="label">Nombre PRODUCTO</label>
                    <div class="control">
                        <input class="input" value="<?php echo $nombreP;?>" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>
                <br>
                <div class="field is-horizontal">
                    <label for="cantidad" class="label">Cantidad</label>
                    <div class="control">
                        <input class="input txtFormulario" value="<?php echo $cantidad;?>" type="number" name="cantidad" placeholder="Cantidad" required>
                    </div>
                    <label for="costo" class="label">Costo</label>
                    <div class="control">
                        <input class="input" value="<?php echo $costo;?>" type="number" name="costo" placeholder="Costo" required>
                        <div class="control">
                            <label class="checkbox">
                        </div>
                    </div>
                    <label for="tipo">&nbsp; Tipo</label>
                    <div id="tipoIng" class="control">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                        <select name="tipo" value="<?php echo $tipo;?>" size="1" id="tipo" class="form-control" class="entradas">
                            <option value="Comida">Comida</option>
                            <option value="Bebidas">Bebidas</option>
                            <option value="Ingredientes">Ingredientes</option>
                            <option value="Otro">Otro</option>
                        </select>
                        <label for="precio">Precio</label>
                        <div class="control">
                            <input id="txtPrecio" value="<?php echo $precio;?>" class="entradas" type="number" name="precio" placeholder="Precio" required>
                        </div>
                    </div>
                </div>


                <hr style="color: #484848; background-color: #484848;">
                    <label for="" >Actualmente:</label> <?php echo $nombreProveedor;?>
                <div id="divTabla">
                    <div id="div1">
                        <?php
                            include "conexion.php";
                            $consulta = "SELECT * FROM proveedores";
                            $registros = $db->query($consulta);

                            $resultado = array();
                            while($fila = $registros->fetch_assoc()){
                                $resultado[] = $fila;
                            }

                            ?>
                        <label for="" style="color:white;"></label>
                        <table class="table">

                            <tr>
                                <td class="headerTabla"><b>PROVEEDOR</b></td>
                                <td class="headerTabla"><b>TELEFONO</b></td>
                                <td class="headerTabla">
                                    <a href="sub_Proveedores.php">+</a></td>
                            </tr>

                            <tbody>
                                <?php

                        foreach($resultado AS $prov){
                            echo "<tr>
                            <td>$prov[compania]</td>
                            <td>$prov[contacto]</td>
                            <td><input class='form-control' type='radio' name='proveedor' id='proveedor' value='$prov[id_proveedor]' readonly='readonly' required></td>
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





        <div id="barraOpciones" class="column">
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
            $("#tipo").change(function () {
                if (this.value == "Ingredientes") {
                    $(".entradas").attr("disabled", true);
                } else {
                    $(".entradas").attr("disabled", false);
                }
            })
        </script>
</body>

</html>