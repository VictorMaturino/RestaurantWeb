<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/kevin.css">
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
            margin-top:-15px;
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
        
        .estantes {
            /* display: flex; */
            text-align: right;
            justify-content: right;
            /* align-content: flex-start; */
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

        #btnC1{
            width: 20px;
            height: 40px;
            margin-left: 200px;
        }
        #btnC2{
            width: 20px;
            height: 40px;
            margin-left: -50px;
        }
        #btnC3{
            width: 20px;
            height: 40px;
            margin-left: -300px;
        }
        #btnC4{
            width: 20px;
            height: 40px;
            margin-left: -550px;
        }
        #btnC5{
            width: 20px;
            height: 40px;
            margin-left: -800px;
        }
        #btnC6{
            width: 20px;
            height: 40px;
            margin-left: -1050px;
        }
        #btnC7{
            width: 20px;
            height: 40px;
            margin-left: -1300px;
        }
        #btnC8{
            width: 20px;
            height: 40px;
            margin-left: -1550px;
        }
        #btnC9{
            width: 20px;
            height: 40px;
            margin-left:-1800px;
        }
        #btnC10{
            width: 20px;
            height: 40px;
            margin-left: -2050px;
        }
        .btnCantidad
        {
            background-color:#48c7746e;
        }
        .Total{
            width: 340px;
            height: 300px;
            background: #ffffff;
            margin-top: 28px;
            margin-left: 60px;

        }
        #T{

        margin-left:80px;
        margin-top:10px;
        margin-bottom:20px;
        font-size:30px;
        
        }

        #CantidadP{

            color:#ffffff;
            font-size:22px;
            margin-left:40px;
            margin-top:20px;
        }
            
           

    </style>
</head>


<body>
    <?php
    include "header.php";
    ?>
    <div class="enc">
        <p class="enc_1">Catalogo</p>
    </div>
    <br>
    <div class="tabs is-centered is-boos-med">
        <ul>
            <li id="btnPlatillos" class="is-active"><a href="">Platillos Fuertes</a></li>
            <li id="btnBebidas"><a href="">Bebidas</a></li>
            <li id="btnEnsaladas"><a href="">Ensaladas</a></li>
            <li id="btnSopas"><a href="">Sopas</a></li>
            <li id="btnPostres"><a href="">Postres</a></li>
        </ul>
    </div>   
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

                    <h1 id="CantidadP">CANTIDAD</h1>

                    <div class="column is-one-third is-boos-med">
                        <button id="btnC1" name="btnCantidad1" class="button is-success is-rounded btnTabla is-boos-med" >1</a>
                    </div>
                   
                    <div class="column is-one-third ">
                        <button id="btnC2" name="btnCantidad2" class="button btnCantidad is-rounded btnTabla is-boos-med">2</button>
                    </div>

                    <div class="column is-one-third ">
                        <button id="btnC3" name="btnCantidad3" class="button btnCantidad is-rounded btnTabla is-boos-med">3</button>
                    </div>
                    <div class="column is-one-third ">
                        <button id="btnC4" name="btnCantidad4" class="button btnCantidad is-rounded btnTabla is-boos-med">4</button>
                    </div>
                    <div class="column is-one-third ">
                        <button id="btnC5" name="btnCantidad5" class="button btnCantidad is-rounded btnTabla is-boos-med">5</button>
                    </div>
                    <div class="column is-one-third ">
                        <button id="btnC6" name="btnCantidad6" class="button btnCantidad is-rounded btnTabla is-boos-med">6</button>
                    </div>
                    <div class="column is-one-third ">
                        <button id="btnC7" name="btnCantidad7" class="button btnCantidad is-rounded btnTabla is-boos-med">7</button>
                    </div>
                    <div class="column is-one-third ">
                        <button id="btnC8" name="btnCantidad8" class="button btnCantidad is-rounded btnTabla is-boos-med">8</button>
                    </div>
                    <div class="column is-one-third ">
                        <button id="btnC9" name="btnCantidad9" class="button btnCantidad is-rounded btnTabla is-boos-med">9</button>
                    </div>
                    <div class="column is-one-third ">
                        <button id="btnC10" name="btnCantidad10" class="button btnCantidad is-rounded btnTabla is-boos-med">10</button>
                    </div>

                </div>
                <div id="divTabla">
                <div id="div1">
                    <table class="table">
                    <!-- is-hoverable -->
                        <tr>
                            <td class="headerTabla"><b>PRODUCTO</b></td>
                            <td class="headerTabla"><b>PRECIO</b></td>
                            <td class="headerTabla"></td>
                        </tr>
                        <tr>
                            <td>Rollos de Ternera (jamon y queso)</td>
                            <td>130</td>
                            <td>
                                <input type="checkbox">    
                            </td>
                        </tr>
                        <tr>
                            <td>Pollo con verduras y jengibre</td>
                            <td>80</td>
                            <td>
                                <input type="checkbox">    
                            </td>
                        </tr>
                        <tr>
                            <td>Viudo de pescado</td>
                            <td>125</td>
                            <td>
                                <input type="checkbox">    
                            </td>
                        </tr>
                        <tr>
                            <td>Lomo de cerdo acaramelado</td>
                            <td>150</td>
                            <td>
                                <input type="checkbox">    
                            </td>
                        </tr>
                        <tr>
                            <td>Higado Frito con cilantro</td>
                            <td>60</td>
                            <td>
                                <input type="checkbox">    
                            </td>
                        </tr>
                        <tr>
                            <td>Pescado apanado con hierbas</td>
                            <td>100</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Permiles en salsa de soya</td>
                            <td>90</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Camarones al ajillo</td>
                            <td>180</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Higado de pollo Salteados</td>
                            <td>89</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Ajiaco olombiano</td>
                            <td>70</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Lengua de Res en salsa de tomate</td>
                            <td>120</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Lomo de Res en salsa verde</td>
                            <td>130</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Tilapia al horno</td>
                            <td>40</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Hamburguesas caseras</td>
                            <td>60</td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>Bistec a caballo</td>
                            <td>35</td>
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
                <!-- <button class="button btnOpciones is-rounded is-boos-med">Detalles</button>
                <a class="button btnOpciones is-rounded is-boos-med"  href="agrProducto.php">Nuevo</a> -->

            </div>
            <h1 id="T">Total</h1>

            <div class="estante"></div>
            <div class="Total"></div>
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
<<<<<<< HEAD
    <!-- <script src="JS/cambioInventario.js "></script> -->
=======
    <script src="JS/cambioInventario.js "></script>
>>>>>>> a552bcb5502d6d2f126b2decd184e4aec16e1763
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
