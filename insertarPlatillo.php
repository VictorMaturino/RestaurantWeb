<?php

include "conexion.php";

$nombreP=$_POST["nombre"];
$ingredientes=$_REQUEST["ingredientes"];
$tipo=$_POST["tipo"];
$precio=$_POST["precio"];


    $consulta="INSERT into platillos(ingredientes,nombreP, precio,tipo,disponible,estatus)
    values ('$ingredientes','$nombreP','$precio','$tipo', '1','1')";

    $resultado=$db->query($consulta);
if($resultado){
    header("Location: sub_Platillos.php");
    
}else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}

?>