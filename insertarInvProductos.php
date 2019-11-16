<?php
include "conexion.php";

$cantidad=$_POST["cantidadCambia"];
$tipo=$_GET["tipo"];
$errorId=false;
$id=$_POST["id_producto"];

if($id==null)
{
print '<script language="JavaScript">';
print 'alert("Seleccione producto!");';
print '</script>';
header("Location: Inv.php");

}else
{


$consulta="SELECT `cantidad` FROM `productos` WHERE id_producto = $id;";
$registros = $db->query($consulta);

$resultado = array();
while($fila = $registros->fetch_assoc()){
    $resultado[] = $fila;
}
// foreach($resultado AS $prod){
    $cantidadAct=$resultado[0]['cantidad'] ;
// }


if($tipo=='agregar')
{
    $cantidadAct=$cantidadAct+$cantidad;
    
}else{
    $cantidadAct=$cantidadAct-$cantidad;
    
}
    $consulta="UPDATE `productos` SET `cantidad` = '$cantidadAct' WHERE `productos`.`id_producto` = $id;";
    $resultado=$db->query($consulta);
    $id=null;
if($resultado){

    // $consulta="INSERT INTO `movimientos` (`id_movimiento`, `id_producto`, `id_usuario`, `fecha`, `producto`, `cantidad`, `tipo`, `estatus`) VALUES (NULL, '1', '1', '2019-04-14', 'nombreP', '$id', 'ingrediente', '1');
    // ";
    // $resultado=$db->query($consulta);
if($resultado){
    header("Location: Inv.php");
}else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}
    header("Location: Inv.php");
    




}else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}

}



?>