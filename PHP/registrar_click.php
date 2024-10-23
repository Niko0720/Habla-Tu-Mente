<?php
// Conectar a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    
}

// Obtener el tipo de problema desde la solicitud
$data = json_decode(file_get_contents('php://input'), true);
$problemType = $data['problem'];

// Actualizar el contador en la base de datos
$sql = "UPDATE contador_problemas SET clicks = clicks + 1 WHERE problema = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $problemType);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Click registrado exitosamente.";
} else {
    echo "Error al registrar el click.";
    error_log(print_r($data, true));
    
    if ($stmt === false) {
        echo "Error al preparar la consulta: " . $conn->error;}

}

$stmt->close();
$conn->close();
?>
