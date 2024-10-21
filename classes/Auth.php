<?php

include "Conexion.php";

class Auth extends Conexion
{
    public function registrar($usuario, $password, $email)
    {
        $conexion = parent::conectar();
        $sql = "INSERT INTO t_usuario(usuario, password, email) 
                VALUES(?,?,?);";
        // Prepara la consulta correctamente
        $query = $conexion->prepare($sql);
        
        // Verifica si la preparación fue exitosa
        if (!$query) {
            die('Error en la preparación de la consulta: ' . $conexion->error);
        }
        
        // 'sss' ya que hay 3 parámetros de tipo string
        $query->bind_param('sss', $usuario, $password, $email);
        
        return $query->execute();
    }
}