<?php

    include "../../classes/Auth.php";

    $usuario = $_POST['usuario'];
    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT); //hash encryption
    $email = $_POST['email'];

    $Auth = new Auth();

    /**
     * Una vez que se registren los datos nos redirige al Login.
     */

    if($Auth->registrar($usuario,$password,$email)) 
    {   
        header("location:../../Index.php");
    } else
    {
        echo 'No se ha podido registrar';
    }

?>