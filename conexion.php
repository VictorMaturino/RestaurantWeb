<?php
$db = new mysqli ("localhost","root","admin123","restaurant");
if($db->connect_errno){
    echo "No se puede conectar a la base de datos".$db->connect_errno;
}
?>