<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario Bueno</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/kevin.css">
    
    <!-- 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css"> -->

    

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
        /* txtBuscar */

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
            /* margin-top: 1rem; */
            background: peru;
            box-shadow: 3px 10px 10px -5px rgba(0, 0, 0, 0.63);
            float: right;
        }
        
        .opciones {
            margin-top:10rem;
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
        .headerTabla{
            color: #484848; 
            background-color: #cccccc; 
            font-size:1.5rem;
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
        #logo {
                width: 80px;
                height: 80px;
                display: inline-block;
                padding: 30px;

            }

            .navbar-brand {
                font-family: 'Arial';
            }

            .navbar {
                background-color: #3c3b3a;
                /* background-color: #3c3b3a; */
                border-radius: 0%;
                font-size: 18px;
                margin-bottom: -5px;

            }

            .nav.navbar-nav li a {
                color:#e8e8e8
            }

            .nav.navbar-nav.navbar-right li a {
                color: white;
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
        <div class="column is-two-thirds tabla is-boos-med">
            <form action="# " method="POST " enctype="multipart/form-data ">
                <div class="field">
                    <div class="control ">
                        <input id="txtBuscar" class="input is-medium is-boos" type="text" placeholder="Buscar..." style="box-shadow: 1px 3px 10px 0px rgba(0, 0, 0, 0.63);">
                    </div>
                </div>
            </form>
            <br>
            <div id="tabla">
                <div id="cabezeraTabla" class="columns is-boos-med">
                    <div class="column is-one-third is-boos-med">
                        <button class="button is-danger is-rounded btnTabla is-boos-med" >Sacar del inventario</a>
                    </div>
                    <div class=" column is-one-third ">
                        <input class="input is-primary is-boos-med" type="text " placeholder="0.00 kg" style="text-align: center;">
                    </div>
                    <div class="column is-one-third ">
                        <button class="button is-success is-rounded btnTabla is-boos-med">Regresar al inventario</button>
                    </div>
                </div>
                <div id="divTabla">
                <div id="div1">
                    <table class="table">
                    <!-- is-hoverable -->
                        <tr>
                            <td class="headerTabla"><b>PRODUCTO</b></td>
                            <td class="headerTabla"><b>CANTIDAD</b></td>
                            <td class="headerTabla"></td>
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
                <button class="button btnOpciones is-rounded is-boos-med">Detalles</button>
                <a class="button btnOpciones is-rounded is-boos-med"  href="agrProducto.php">Nuevo</a>

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

    </article>




    <!--Contenido 1 -->
    <!--Contenido 2 -->
    <!--Contenido 3 -->

    <script src="JS/jquery-3.3.1.min.js "></script>
    <script src="JS/bootstrap.js "></script>
    <script src="JS/lightbox.min.js "></script>
    <!-- <script src="JS/cambioInventario.js "></script> -->
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
