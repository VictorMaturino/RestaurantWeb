
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
        #btnGuardar{
            margin-left:60rem;
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
        #barrasOpciones{
            margin-top:7rem;
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
            <li id="btnPlatillos"><a href="sub_Platillos.php">Platillos</a></li>
            <li id="btnProveedores" class="is-active"><a href="sub_Proveedores.php">Proveedores</a></li>
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
            <?php
            include "conexion.php";
            $id=$_GET["var"];
            $consulta = "SELECT * FROM proveedores WHERE id_proveedor='$id'";
            $registros = $db->query($consulta);

            $resultado = array();
            $compania='';
            $nombreC='';
            $contacto='';
            while($fila = $registros->fetch_assoc()){
                $resultado[] = $fila;
                $compania=$fila['compania'];
                $nombreC=$fila['nombreContacto'];
                $contacto=$fila['contacto'];
            }
            ?>
            <form action="insertarProveedores.php?editar=si&var=<?php echo $id;?>" method="POST">
            
                <div class="field">
                    <label for="nombre" class="label">EDITAR</label>
                    <button id="btnGuardar" class="button btnOpciones is-rounded is-success" type="submit">Guardar</button>
                    <label for="nombre" class="label">Nombre compañia PROVEEDOR</label>
                    <div class="control">
                        <input id="compania" value="<?php echo $compania;?>" class="input" type="text" name="compania" placeholder="Nombre" required>
                    </div>
                </div>
                <br>
                <div class="field is-horizontal">
                    <label for="nombre" class="label">Nombre contacto</label>
                    <div class="control">
                        <input id="txtNombreContacto"  value="<?php echo $nombreC;?>" class="input txtFormulario" type="text" name="nombreContacto" placeholder="Nombre" required>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <label for="nombre" class="label">Telefono contacto</label>
                    <div class="control">
                        <input id="txtContacto"  value="<?php echo $contacto;?>" class="input txtFormulario" type="number" name="contacto" placeholder="Telefono" required>
                    </div>
                </div>
            </form>
        </div>
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
    </div>

        <script src="JS/jquery-3.3.1.min.js "></script>
        <script src="JS/bootstrap.js "></script>
        <script src="JS/lightbox.min.js "></script>
        <script src="JS/cambioInventario.js "></script>
        <script>

        function fn_actualizar(){
            <?php
            
            ?>
        }
        
        </script>
</body>

</html>