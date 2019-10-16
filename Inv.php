<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.sass"> -->

    <style lang="scss">
        /* .btnMenu {

        } */
    </style>

    <style>
        body {
            background-color: #F1CB7A;
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
        
        .tabla {
            margin-left: 2rem;
        }
        
        #btnBuscar {
            margin-top: 1rem;
            margin-left: 51rem;
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
            color: black;
            background-color: #E7F66D;
            border-radius: 6px;
        }
        
        .boton button:hover {
            color: black;
            background-color: #E7F66D;
            font-size: 30px;
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

    <div class="enc">
        <p class="enc_1">Ventas</p>
    </div>
    <br>
    <div class="boton">
        <button><img src="img/star2.png" width="20px" height="20px"> Reportes</button>
        <button><img src="img/star2.png" width="20px" height="20px"> -----</button>
        <button><img src="img/star2.png" width="20px" height="20px"> -----</button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="columns">
        <div class="column is-two-thirds tabla">
            <form action="# " method="POST " enctype="multipart/form-data ">
                <div class="field">
                    <div class="control">
                        <input class="input is-large" type="text" placeholder="Buscar..." style="box-shadow: 3px 16px 10px -5px rgba(0, 0, 0, 0.63);">
                    </div>
                </div>
            </form>
            <br>
            <!-- <button id="btnBuscar" class="btn btn-success ">IMPRIMIR</button> -->
            <div id="tabla" style="background:gray;">

                <div id="cabezeraTabla" class="columns">
                    <div class="column is-one-third">
                        <a class="button is-danger is-rounded" style="width: 100%;">Regresar</a>
                    </div>
                    <div class=" column is-one-third ">
                        <input class="input is-primary " type="text " placeholder="0.00 kg" style="text-align: center;">
                    </div>
                    <div class="column is-one-third ">
                        <button class="button is-success is-rounded" style="width: 100%; ">
                                    Agregar
                                </button>
                    </div>
                </div>
                <div style="background:gray; height: 400px; ">Soy la tabla</div>
            </div>


        </div>
        <div class="column">
            <div class="opciones">
                <!-- <a class="button is-warning is-rounded">Editar</a> -->
                <a class="button is-warning is-rounded">Detalles</a>
                <a class="button is-warning is-rounded">Agregar</a>

            </div>
            <div class="estante"></div>
            <br>
            <br>
            <br>
            <div class="estante"></div>
            <br>
            <br>
            <div class="opciones">
                <a class="button is-danger is-rounded">Suspender</a>
            </div>
            <div class="estante"></div>
        </div>

        <!-- <div class="col-sm-3 " style="background: red; margin: 15px; ">
                <div> Primera fila botones
                    <button>Editar</button>
                    <button>Mostrar</button>
                    <button>Eliminar</button>
                </div>
                <div> Segunda fila botones

                    </button>
                </div>
            </div> -->
    </div>

    <!-- <article class=" container-fluid ">
        <section class="row ">
            <section class="col-md-12 ">
                <form action="# " method="POST " enctype="multipart/form-data ">
                    <div class="form-group ">
                        <label for="desde ">Desde</label>
                        <input type="date " name="desde " class="form-control ">
                    </div>
                    <div class="form-group ">
                        <label for="hasta ">Hasta</label>
                        <input type="date " name="hasta " class="form-control ">
                    </div>
                </form>
            </section>
        </section> -->
    </article>




    <!--Contenido 1 -->
    <!--Contenido 2 -->
    <!--Contenido 3 -->

    <script src="JS/jquery-3.3.1.min.js "></script>
    <script src="JS/bootstrap.js "></script>
    <script src="JS/lightbox.min.js "></script>

    <script>
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
    </script>
</body>

<!-- </html> -->