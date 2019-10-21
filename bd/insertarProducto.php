
<?php
include "../conexion.php";

// $id_producto=$_POST["id_producto"];
$id_proveedor=$_POST["id_proveedor"];
$nombreP=$_POST["nombreP"];
$cantidad=$_POST["cantidad"];
$costo=$_POST["costo"];
$precio=$_POST["precio"];
$tipoIngre=$_POST["tipoIngre"];
$tipo=$_POST["tipo"];
$estatus=$_POST["estatus"];


$consulta="INSERT into productos(nombre,provedor,costo)
values ('fanta','coca cola','21')";
$resultado=$db->query($consulta);
    // $consulta="INSERT into productos(id_producto,nombrP,cantidad,costo,precio,tipoIngre,tipo,estatus)
    // values ('','$nombreP','$cantidad','$costo','$precio','$tipoIngre','$tipo','$estatus')";
    // $resultado=$db->query($consulta);
    
if($resultado){
    header("Location: ../Administracion.php");
    
}else{
    header("Location: ../registro.php");
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