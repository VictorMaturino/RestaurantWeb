<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario Bueno</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="../css/kevin.css">
    
    
    
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
        .headerTabla{
            color: #484848; 
            background-color: #cccccc; 
            font-size:1.5rem;
        }
        .estantes {
            /* display: flex; */
            text-align: right;
            justify-content: right;
            /* align-content: flex-start; */
        }
        #precio{
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
        #tipoIng{
            margin-left: 2rem;
        }
        #icoTipoIng{
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
    </style>
</head>


<body>
    <?php
    include "../header.php";
    ?>
    <div class="enc">
        <p class="enc_1">Inventario</p>
    </div>
    <br>
    <?php
    include "sub_header.php";
    ?>   
    <br>
    <br>
    <br>
    <br>
    <div class="columns">
        <div id="formulario" class="column is-two-thirds tabla">
            <br>
            <form action="">
                <div class="field">
                    <label for="nombre" class="label">Nombre PRODCUTO</label>
                    <div class="control">
                        <input class="input" type="text" name="nombre_P" placeholder="Text input">
                    </div>
                    <!-- <p class="help">This is a help text</p> -->
                </div>
                <br>
                <div class="field is-horizontal">
                    <label for="nombre" class="label">Cantidad</label>
                    <div class="control">
                        <input class="input txtFormulario" type="text" name="cantidad_P" placeholder="Text input">
                    </div>
                    <label for="nombre" class="label">Costo</label>
                    <p id="precio" class="label">Precio</p>
                    <div class="control">
                        <input class="input" type="text" name="ingrediente" placeholder="Text input">
                        <div class="control">
                        <label class="checkbox">
                        <input id="txtPrecio" class="Disable input" type="text" name="precio" placeholder="Text input">
                                <!-- <input type="checkbox" onclick="desPrecio()">
                                Es ingrediente
                              </label> -->
                        </div>
                    </div>
                    <div name="tipoIng" id="tipoIng" class="select">
                        <select>
                            <option>Ingrediente</option>
                            <option name="bebida">Bebida</option>
                            <option>Comida</option>
                            <option>Postre</option>
                            <option>Otro</option>
                        </select>
                    </div>
                     <span id="icoTipoIng" class="icon is-small is-left">
                            <i class="fas fa-long-arrow-alt-down"></i>
                        </span>
                </div>
            </form>

            <hr style="color: #484848; background-color: #484848;">
            <div id="divTabla">
                <div id="div1">
                    <table class="table">
                        <!-- is-hoverable -->
                        <tr>
                        <td class="headerTabla"><b>PROVEEDOR</b></td>
                            <td class="headerTabla"><b>TELEFONO</b></td>
                            <td class="headerTabla">
                                <a href="agrProveedor.php">+</a></td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>MacDounals</td>
                            <td>6181234567</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                    </table>
                </div>


            </div>
        </div>
        <!-- </div> -->
        <div class="column">
            <div class="opciones">
                <!-- <a class="button is-warning is-rounded">Editar</a> -->
                <!-- <button class="button btnOpciones is-rounded">Detalles</button> -->
                <button class="button btnOpciones is-rounded is-success">Agregar</button>

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
            function desPrecio() {
                // alert("Hola, si esta activo");

                var productos = document.getElementById('txtPrecio');
                if (productos.disabled == false) {
                    productos.disabled = true;
                } else {
                    productos.disabled = false;
                }

            }
        </script>
</body>

</html>