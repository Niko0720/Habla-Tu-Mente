<?php
include('conexion.php');
$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($conexion,$sql);
if(!$resultado){
    echo "No se detectaron los datos";
}
?>