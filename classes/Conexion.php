<?php

class Conexion
{
    public $servidor = 'localhost';
    public $usuario = 'root';
    public $password = ''; //PORQUE NO LA DEFINÍ EN EL XAMMP entonces no existe contraseña.
    public $database = 'loginpoo2023';
    PUBLIC $port = 3306;

    public function conectar()
    {    
        return mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->database,
            $this->port
        );
    }
}
?>