<?php

include "conexion.php";

$nombreP=$_POST["nombre"];
$ingredientes=$_POST["ingredientes"];
$tipo=$_POST["tipo"];
$precio=$_POST["precio"];
$comentario=$_POST["comentario"];


    // if(count($_POST["ingredientes"])>0){

    // // foreach($_POST["ingredientes"] as $valor){
    // //     $valor = $valor2;
    // // }
    
    // }else{ 
    //     require('agrPlatillo.php');
    //     print '<script language="JavaScript">';
    //     print 'alert("Seleccione por lo menos un Ingrediente.!");';
    //     print '</script>';
    // }

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

?>