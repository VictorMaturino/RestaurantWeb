<?php
SESSION_start();
SESSION_destroy();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <title>Login</title>

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: url("img/fondo.jpg");
            background-size:100% 100%;
        }

        .user_card {
            height: 400px;
            width: 350px;
            margin-top: auto;
            margin-bottom: auto;
            background: #F1CB7A;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }

        .brand_logo_container {
            position: absolute;
            height: 170px;
            width: 170px;
            top: -75px;
            border-radius: 50%;
            background: #c0392b;
            padding: 10px;
            text-align: center;
        }

        .brand_logo {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            border: 2px solid white;
        }

        .form_container {
            margin-top: 100px;
        }

        .login_btn {
            width: 100%;
            background: #c0392b !important;
            color: white !important;
        }

        .login_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .login_container {
            padding: 0 2rem;
        }

        .input-group-text {
            background: #c0392b !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }

        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #c0392b !important;
        }
    </style>

    <script>
        $(function () {
            $boton = $("form button");

            $boton.on("click", function (evento) {
                evento.preventDefault();
                var v_usuario = $("#usuario").val();
                var v_contrasena = $("#contrasena").val();

                $.ajax({
                        url: "login-procesar.php",
                        type: "POST",
                        data: {
                            usuario: v_usuario,
                            contrasena: v_contrasena
                        }
                    })
                    .done(function (res) {
                        if (res == 1) {
                            document.location.href = "index.php";
                        } else {
                            $("#mensaje").text("Usuario o contraseña Incorrectos!")
                                .addClass("text-danger")
                                .fadeIn()
                                .delay(3000)
                                .fadeOut();
                            console.log(res);
                        }
                    });

            });
        });
    </script>
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="img/logo.jpg"
                            class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="login-procesar.php" method="POST">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="usuario" id="usuario" class="form-control input_user" placeholder="username">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="contrasena" id="contrasena" class="form-control input_pass"
                                placeholder="password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                        <p id="mensaje" class="text-danger"></p>
                    </form>
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="button" name="button" class="btn login_btn" id="submit">Iniciar Sesion</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script src="JS/jquery-3.3.1.min.js"></script>
<script src="JS/bootstrap.js"></script>
<script src="JS/lightbox.min.js"></script>