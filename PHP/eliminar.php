<?php
ob_start(); // Iniciar el buffer de salida
include('conexion.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);  // Asegúrate de que sea un número entero
    
    // Verificar la conexión
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Consulta para eliminar el registro
    $query = "DELETE FROM usuario WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        // Redirige a la página principal después de eliminar
        header("Location: formulario_base.php");
        exit();  // Asegura que el script termine después de la redirección
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
}

ob_end_flush(); // Finaliza el buffer de salida y envía los encabezados
?>
