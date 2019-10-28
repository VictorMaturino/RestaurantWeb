<?php
    include "conexion.php";
    if(isset($_GET["id"]))
    {
        // eliminas el registro
        $consulta = "DELETE FROM productos WHERE id_producto='$_GET[id]'";
        $resultado = $db->query($consulta);
    }

if($resultado){
    header("Location: Inv.php");

}
else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}

    ?>