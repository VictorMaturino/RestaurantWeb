<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo</title>
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
        .btnTabla{
            width: 100%;
        }
        .tabla {
            margin-left: 2rem;
        }
        #tabla{
            background:gray;
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
            color:white;
            text-align: center;
            
        }
        #btnBuscar {
            margin-top: 1rem;
            margin-left: 51rem;
        }
        #divTabla{
            background:gray; height: 400px; 
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
            background-color:#ffe788;
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
        <p class="enc_1">Inventario</p>
    </div>
    <br>
    <div class="tabs is-centered">
        <ul>
            <li id="btnPlatillosF" class="is-active"onclick="cambioSubModuloProductos()"><a>Platillos Fuertes</a></li>
            <li id="btnEnsaladas" onclick="cambioSubModuloPlatillos()"><a>Ensaladas</a></li>
            <li id="btnSopas" onclick="cambioSubModuloPlatillos()"><a>Sopas</a></li>
            <li id="btnBebidas" onclick="cambioSubModuloPlatillos()"><a>Bebidas</a></li>
            <li id="btnPostres"onclick="cambioSubModulo()"><a>Postres</a></li>
            
        </ul>
        </div>
    <br>
    <br>
    <br>
    <br>
    <div class="columns">
        <div class="column is-two-thirds tabla">
       
            <form action="# " method="POST " enctype="multipart/form-data ">
                <div class="field">
                   
                </div>
            </form>
            <br>
            
            <div id="tabla">

                <div id="cabezeraTabla" class="columns">
                    <div class="column is-one-third">
                        <button class="button is-danger is-rounded btnTabla" >Regresar</a>
                    </div>
                    <div class=" column is-one-third ">
                        <button class="button is-danger is-rounded btnTabla" >1</a>
                    </div>
                    <div class=" column is-one-third ">
                        <button class="button is-danger is-rounded btnTabla" >2</a>
                    </div>
                    <div class=" column is-one-third ">
                        <button class="button is-danger is-rounded btnTabla" >3</a>
                    </div>
                    <div class="column is-one-third ">
                        <button class="button is-success is-rounded btnTabla">Agregar</button>
                    </div>
                </div>
                <div id="divTabla">
                <div id="div1">
                    <table class="table">
                    <!-- is-hoverable -->
                        <tr>
                            <td>PRODUCTO</td>
                            <td>CANTIDAD</td>
                            <!-- <td>SELECCIONAR</td> -->
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
            <div class="opciones">
                <!-- <a class="button is-warning is-rounded">Editar</a> -->
                <button class="button btnOpciones is-rounded">Detalles</button>
                <button class="button btnOpciones is-rounded">Agregar</button>

            </div>
            <div class="estante"></div>
            <br>
            <br>
            <br>
            <div class="estante"></div>
            <br>
            <br>
            <div class="opciones">
                <button class="button is-danger is-rounded">Suspender</button>
            </div>
            <div class="estante"></div>
        </div>

    </div>

    </article>




    <!--Contenido 1 -->
    <!--Contenido 2 -->
    <!--Contenido 3 -->

    <script src="JS/jquery-3.3.1.min.js "></script>
    <script src="JS/bootstrap.js "></script>
    <script src="JS/lightbox.min.js "></script>
    <script src="JS/cambioInventario.js "></script>
    <script>
    
    

    </script>
    <!-- <script>
        var productos = [{
            nombre: 'coca',
            precio: '30',
            provedor: 'Cocacola'
        }, {
            nombre: 'coca',
            precio: '30',
            provedor: 'Cocacola'
        }, {
            nombre: 'coca',
            precio: '30',
            provedor: 'Cocacola'
        }, {
            nombre: 'coca',
            precio: '30',
            provedor: 'Cocacola'
        }, ];
    </script> -->
</body>

</html>
