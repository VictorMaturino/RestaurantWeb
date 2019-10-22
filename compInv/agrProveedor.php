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
            /* margin-right: 0.5rem; */
        }
        
        .field label {
            /* width: 80%; */
            color: #484848;
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
        .txtFormulario{
            width:43rem;
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
                    <label for="nombre" class="label">Nombre compañia PROVEEDOR</label>
                    <div class="control">
                        <input class="input" type="text" name="nombre_C" placeholder="Text input">
                    </div>
                    <!-- <p class="help">This is a help text</p> -->
                </div>
                <br>
                <div class="field is-horizontal">
                    <label for="nombre" class="label">Nombre contacto</label>
                    <div class="control">
                        <input class="input txtFormulario" type="text" name="contacto_C" placeholder="Text input">
                    </div>
                </div>
                <div class="field is-horizontal">
                    <label for="nombre" class="label">Telefono contacto</label>
                    <div class="control">
                        <input class="input txtFormulario" type="text" name="telefono_C" placeholder="Text input">
                    </div>
                </div>
            </form>
        </div>
        <div class="column">
            <div class="opciones">
                <!-- <a class="button is-warning is-rounded">Editar</a> -->
                <!-- <button class="button btnOpciones is-rounded">Detalles</button> -->
                <button name="btn_agregar_C" class="button btnOpciones is-rounded is-success">Agregar</button>
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

        <script src="JS/jquery-3.3.1.min.js "></script>
        <script src="JS/bootstrap.js "></script>
        <script src="JS/lightbox.min.js "></script>
        <script src="JS/cambioInventario.js "></script>

</body>

</html>