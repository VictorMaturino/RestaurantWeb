<?php
include "conexion.php";
$editar=$_GET["editar"];
$id=$_GET["var"];
$nombre=$_POST["nombre"];
$cantidad=$_POST["cantidad"];
$costo=$_POST["costo"];
$precio=$_POST["precio"];
$tipo=$_POST["tipo"];
$proveedor=$_POST["proveedor"];

if($tipo=='Ingredientes'){
$precio=0;
}

if($editar=="si"){

    $consulta = "UPDATE `productos` SET `nombreP` = '$nombre', `cantidad` = '$cantidad', `costo` = '$costo',
     `precio` = '$precio', `tipo` = '$tipo', `id_proveedor` = '$proveedor' WHERE `productos`.`id_producto` = $id;";
    $resultado=$db->query($consulta);
    if($resultado){
        header("Location: Inv.php");
        
    }else{
        print '<script language="JavaScript">';
        print 'alert("Error:::");';
        print '</script>';
    }

}else{

    
    $consulta = "SELECT nombreP FROM productos WHERE nombreP = '$nombre'";
    
    $resultado =$db->query($consulta);
    $filas =$resultado->num_rows;
    
    if($filas >0){
        print '<script language="JavaScript">';
        print 'confirm("Ese producto ya ha sido dada de alta");';
    print '</script>';
    header("Location: Inv.php");
}
else{
       
    $consulta="INSERT INTO `productos` (`id_producto`, `id_proveedor`, `nombreP`, `cantidad`, `costo`, `precio`, `tipo`, `estatus`) VALUES (NULL, '$proveedor', '$nombre', '$cantidad', '$costo', '$precio', '$tipo', '1');";

    $resultado=$db->query($consulta);
    if($resultado){
        header("Location: Inv.php");
        
    }else{
        print '<script language="JavaScript">';
        print 'alert("Error:::");';
        print '</script>';
    }
}

}
?>