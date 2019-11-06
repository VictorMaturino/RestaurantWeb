<?php

include "conexion.php";

$id=$_GET["id"];

    $consulta="UPDATE platillos SET disponible='0', estatus='0' WHERE id_platillo='$id'";

    $resultado=$db->query($consulta);
if($resultado){
    header("Location: sub_Platillos.php");
    
}else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}

?>