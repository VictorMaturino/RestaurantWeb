<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION['usuario'])){
        $cliente = $_SESSION['usuario'];
    }else{
 header('Location: admin.php');
     die() ;

    }
?>
<?php
include "conexion.php";

$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$contrasena2=$_POST["contrasena2"];

if($contrasena==$contrasena2){

    $consulta="INSERT into usuarios(nombre, usuario, contrasena)
    values ('$nombre','$usuario','$contrasena')";

    $resultado=$db->query($consulta);
if($resultado){
    header("Location: Administracion.php");
    
}else{
    header("Location: registro.php");
}
}else{
    require('registro.php');
    print '<script language="JavaScript">';
    print 'alert("Las contraseñas No coenciden Reintenta otravez!");';
    print '</script>';
}


?>
<style>
       body {
        background-image:url(img/fondo.png);
        }
        h2{
            color: white;
        }
</style>
<a href="registro.php"><img src="img/inicio.png" width="80" height="80">
</a>