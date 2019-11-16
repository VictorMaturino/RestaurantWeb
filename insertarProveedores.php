<?php

include "conexion.php";
$editar=$_GET["editar"];
$id=$_GET["var"];
$compania=$_POST["compania"];
$nombreContacto=$_POST["nombreContacto"];
$contacto=$_POST["contacto"];

if($editar=='si')
{
    $consulta = "UPDATE `proveedores` SET `compania` = '$compania', `nombreContacto` = '$nombreContacto', `contacto` = '$contacto' WHERE `proveedores`.`id_proveedor` = $id;";
    $resultado=$db->query($consulta);
    if($resultado){
        header("Location: sub_Proveedores.php");
        
    }else{
        print '<script language="JavaScript">';
        print 'alert("Error:::");';
        print '</script>';
    }

}else{

    
    $consulta = "SELECT compania FROM proveedores WHERE compania = '$compania'";

    $resultado =$db->query($consulta);
    $filas =$resultado->num_rows;
    
    if($filas >0){
    print '<script language="JavaScript">';
    print 'confirm("Esa compañia ya ha sido dada de alta");';
    print '</script>';
    header("Location: sub_Proveedores.php");
    }
    else{
        
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
    
}
}

?>