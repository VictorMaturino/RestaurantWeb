<?php
    include "conexion.php";
    if(isset($_GET["id"]))
    {
        // eliminas el registro
        $consulta = "DELETE FROM proveedores WHERE id_proveedor='$_GET[id]'";
        $resultado = $db->query($consulta);
    }

if($resultado){
    header("Location: sub_Proveedores.php");

}
else{
    print '<script language="JavaScript">';
    print 'alert("Error:::");';
    print '</script>';
}

    ?>