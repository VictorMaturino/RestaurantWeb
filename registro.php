
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/bulma.css.map">
    <link rel="stylesheet" href="css/bulma.min.css">
    <title>Registro</title>
    <style>
        body {
            background-color: #FF7400;
        }
        .reg {
            position: absolute;
		top:50%;
		left:30%;
		width:800px;
		margin-left:-50px;
		height:400px;
		margin-top:-300px;
        } 
        label {
            color: white;
        }
        h1 {
            color: white;
        }
    </style>
</head>
<body>
<div class="reg">
<article class="container-fluid">
    <section class="row">
    <section class="col-md-10">
    <form action="bd/insertarProducto.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <a href="index.php"><img src="img/logo.jpg" width="80" height="80">
        </a>
        <h1>Nuevo Usuario +</h1>
        <br>
        <br>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
        </div>

        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
        </div>

        <div class="form-group">
            <label for="contrasena2">Verificar Contraseña</label>
            <input type="password" name="contrasena2" class="form-control" placeholder="Repetir Contraseña" required>
        </div>

    <button class="btn btn-primary">Registrar</button>
    <p id="mensaje" class="text-danger"></p>
    </form>
    </section>
    </section>
    </article>
    </div>
    <script>
    
    </script>
</body>
</html>