<?php

include "conexion.php";

$editar=$_GET["editar"];
$id=$_GET["var"];
$nombreP=$_POST["nombre"];
$ingredientes=$_POST["comentario"];
$tipo=$_POST["tipo"];
$precio=$_POST["precio"];

if($editar=='si'){
    //,`precio` = '$precio', `tipo` = '$tipo',`ingredientes` = '$ingredientes', WHERE `platillos`.`id_platillo` = $id;";

    $consulta = "UPDATE `platillos` SET `nombreP` = '$nombreP' ,`precio` = '$precio', `tipo` = '$tipo',`ingredientes` = '$ingredientes' WHERE `platillos`.`id_platillo` = $id;";
   $resultado=$db->query($consulta);
   if($resultado){
       header("Location: sub_Platillos.php");
       
   }else{
       print '<script language="JavaScript">';
       print 'alert("Error:::");';
       print '</script>';
   }


}
else{
    $consulta="INSERT into platillos(ingredientes,nombreP, precio,tipo,disponible,estatus)
    values ('$comentario','$nombreP','$precio','$tipo', '1','1')";
    $resultado=$db->query($consulta);
    
    
    if($resultado){
        header("Location: sub_Platillos.php");
        
    }else{
        print '<script language="JavaScript">';
        print 'alert("Error:::");';
        print '</script>';
    }
}
    
?>