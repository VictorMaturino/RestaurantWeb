<?php 
session_start();
// session_destroy();
include "conexion.php";

$usuario = $_POST["usuario"];
$contrasena =$_POST["contrasena"];
// $tipo =$_POST["tipo"];

$consulta = "SELECT*FROM usuarios WHERE usuario = '$usuario'AND contrasena = '$contrasena'";


$resultado =$db->query($consulta);
$filas =$resultado->num_rows;

if($filas >0){
    // header("Location: Inv.php");
    echo 1;
    $_SESSION["usuario"] = $usuario;
    $tabla = $resultado->fetch_assoc();
    $_SESSION["idUsuario"] = $tabla["id"];
    $_SESSION["tipo"] = $tabla["tipo"];
    
    // header("Location: Administracion.php");
}
else{
    echo $db->query($consulta);
    header("Location: Inv.php");
}

?>