<?php
include "conexion.php";

$nombre=$_POST["nombre"];
$cantidad=$_POST["cantidad"];
$costo=$_POST["costo"];
$precio=$_POST["precio"];
$tipo=$_POST["tipo"];
$proveedor=$_POST["proveedor"];

    $consulta="INSERT into productos(nombreP, cantidad, costo, tipo, precio, nom_proveedor)
    values ('$nombre','$cantidad','$costo', '$tipo','$precio', '$proveedor')";

    $resultado=$db->query($consulta);
if($resultado){
    header("Location: Inv.php");
    
}else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}

?>