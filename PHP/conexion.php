<?php

// Conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "BASE_FINAL";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
    }
    else{
        echo"Base de datos conectada!";
    }
?>