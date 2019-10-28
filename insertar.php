<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION['usuario'])){
        $cliente = $_SESSION['usuario'];
    }else{
     header('Location: Administracion.php');
     die() ;

    }
?>
<?php
include "conexion.php";

$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$contrasena2=$_POST["contrasena2"];
$tipo=$_POST["tipo"];

if($contrasena==$contrasena2){

    $consulta="INSERT into usuarios( usuario, contrasena,nombre, tipo)
    values ('$usuario','$contrasena','$nombre', '$tipo')";

    $resultado=$db->query($consulta);
if($resultado){
    header("Location: Ventas.php");
    
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