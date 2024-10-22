<?php

include "Conexion.php";

class Auth extends Conexion
{
    public function registrar($usuario, $password, $email)
    {
        $conexion = parent::conectar();
        $sql = "INSERT INTO t_usuario(usuario, password, email) 
                VALUES(?,?,?);";
        $query = $conexion->prepare($sql);

        if (!$query) {
            die('Error en la preparación de la consulta: ' . $conexion->error);
        }

        $query->bind_param('sss', $usuario, $password, $email);

        return $query->execute();
    }

    public function logear($usuario, $password)
    {
        $conexion = parent::conectar();
        $passwordExistente = "";

        // Usa una consulta preparada para evitar inyección SQL
        $sql = "SELECT password FROM t_usuario WHERE usuario = ?";
        $query = $conexion->prepare($sql);

        if (!$query) {
            die('Error en la preparación de la consulta: ' . $conexion->error);
        }

        // Vincula el parámetro de la consulta
        $query->bind_param('s', $usuario);
        $query->execute();

        // Obtén el resultado
        $resultado = $query->get_result();

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $passwordExistente = $fila['password'];

            // Verifica la contraseña
            if (password_verify($password, $passwordExistente)) {
                $_SESSION['usuario'] = $usuario;
                return true;
            } else {
                return false; // Contraseña incorrecta
            }
        } else {
            return false; // Usuario no encontrado
        }
    }
}
