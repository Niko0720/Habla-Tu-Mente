<?php
include('conexion.php');

// Recibe los datos del formulario de registro
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];
$telefono = $_POST["telefono"];

// Inserta los datos en la tabla de usuarios
$sql = "INSERT INTO usuario (nombre, correo, mensaje, telefono) VALUES ('$nombre', '$correo', '$mensaje', '$telefono')";
if ($conexion->query($sql) === TRUE) {
    ?>
  <script>window.location.replace("http://localhost/PROYECTO%20PIA%20FINAL/PHP/formulario_base.php");</script>
  <?php
} else {
echo "Error al registrar: " . $conexion->error;
}

?>