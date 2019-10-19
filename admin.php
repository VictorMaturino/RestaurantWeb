<?php
SESSION_start();
SESSION_destroy();
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>
        body {
            background-image: url("img/fondo3.jpg");
        }

        html,
        body {
            position: relative;
            height: 100%;
        }

        .login-container {
            position: relative;
            width: 300px;
            margin: 80px auto;
            padding: 20px 40px 40px;
            text-align: center;
            background: #fff;
            border: 1px solid #ccc;
        }

        #output {
            position: absolute;
            width: 300px;
            top: -75px;
            left: 0;
            color: #fff;
        }

        #output.alert-success {
            background: rgb(25, 204, 25);
        }

        #output.alert-danger {
            background: rgb(228, 105, 105);
        }


        .login-container::before,
        .login-container::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 3.5px;
            left: 0;
            background: #fff;
            z-index: -1;
            -webkit-transform: rotateZ(4deg);
            -moz-transform: rotateZ(4deg);
            -ms-transform: rotateZ(4deg);
            border: 1px solid #ccc;

        }

        .login-container::after {
            top: 5px;
            z-index: -2;
            -webkit-transform: rotateZ(-2deg);
            -moz-transform: rotateZ(-2deg);
            -ms-transform: rotateZ(-2deg);

        }

        .avatar {
            width: 100px;
            height: 100px;
            margin: 10px auto 30px;
            border-radius: 100%;
            border: 2px solid #aaa;
            background-image: url("img/logo.jpg");
            background-size: 100% 100%;
        }

        .form-box input {
            width: 100%;
            padding: 10px;
            text-align: center;
            height: 40px;
            border: 1px solid #ccc;
            ;
            background: #fafafa;
            transition: 0.2s ease-in-out;

        }

        .form-box input:focus {
            outline: 0;
            background: #eee;
        }

        .form-box input[type="text"] {
            border-radius: 5px 5px 0 0;
            text-transform: lowercase;
        }

        .form-box input[type="password"] {
            border-radius: 0 0 5px 5px;
            border-top: 0;
        }

        .form-box button.login {
            margin-top: 15px;
            padding: 10px 20px;
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(20px);
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(20px);
                -ms-transform: translateY(20px);
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }
        }

        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
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
                        url: "login-procesar2.php",
                        type: "POST",
                        data: {
                            usuario: v_usuario,
                            contrasena: v_contrasena
                        }
                    })
                    .done(function (res) {
                        if (res == 1) {
                            document.location.href = "Administracion.php";
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
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="login-procesar2.php" method="POST">
                    <input name="user" type="text" placeholder="username" id="usuario">
                    <input type="password" placeholder="password" id="contrasena">
                    <button class="btn btn-info btn-block login" type="submit" id="submit" class="submit">Login</button>
                    <p id="mensaje" class="text-danger"></p>
                </form>
                <a href="login.php">Regresar</a>
            </div>
        </div>
    </div>
</body>

</html>

<script src="JS/jquery-3.3.1.min.js"></script>
<script src="JS/bootstrap.js"></script>
<script src="JS/lightbox.min.js"></script>