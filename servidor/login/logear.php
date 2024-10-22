<?php session_start(); //poder iniciar sesiones.

    include "../../classes/Auth.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if($Auth->logear($usuario,$password)){
        header("location:../../inicio.php");
    } else{
        echo "No se pudo logear";
    }
?>