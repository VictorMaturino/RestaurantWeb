<?php 
session_start();
include "conexion.php";

$usuario = $_POST["usuario"];
$contrasena =$_POST["contrasena"];

$consulta = "SELECT*FROM usuario_admin
             WHERE usuario = '$usuario'
             AND contrasena = '$contrasena'";


$resultado =$db->query($consulta);
$filas =$resultado->num_rows;

if($filas >0){
    echo 1;
    $_SESSION["usuario"] = $usuario;
    $tabla = $resultado->fetch_assoc();
    $_SESSION["idUsuario"] = $tabla["id"];
    //exit;
}
else{
    echo $db->query($consulta);
}

?>