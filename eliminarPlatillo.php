<?php
    include "conexion.php";
    if(isset($_GET["id"]))
    {
        // eliminas el registro
        $consulta = "DELETE FROM platillos WHERE id_platillo='$_GET[id]'";
        $resultado = $db->query($consulta);
    }

if($resultado){
    header("Location: sub_Platillos.php");

}
else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}

    ?>