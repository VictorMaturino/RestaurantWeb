<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION['usuario']) && $_SESSION["tipo"]=="Mesero"){
        $cliente = $_SESSION['usuario'];
        header('Location: Catalogo.php');
    }else if(isset($_SESSION['usuario']) && $_SESSION["tipo"]=="Administrador"){
        $cliente = $_SESSION['usuario'];
        header('Location: Ventas.php');
    }else if(isset($_SESSION['usuario']) && $_SESSION["tipo"]=="Cocinero"){
    $cliente = $_SESSION['usuario'];
    header('Location: Inv.php');
    }
    else{
    header('Location: login.php');
    die() ;
    }
?>