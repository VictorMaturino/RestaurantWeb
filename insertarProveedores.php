<?php

include "conexion.php";
$compania=$_POST["compania"];
$nombreContacto=$_POST["nombreContacto"];
$contacto=$_POST["contacto"];
    $consulta="INSERT into proveedores(compania,nombreContacto, contacto,estatus)
    values ('$compania','$nombreContacto','$contacto','1')";
    

    $resultado=$db->query($consulta);
if($resultado){
    header("Location: sub_Proveedores.php");
    
}else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}

?>