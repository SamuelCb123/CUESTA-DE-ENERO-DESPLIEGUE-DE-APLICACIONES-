<?php
include('conexion.php');
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

$nombre = mysqli_real_escape_string($conexion, $nombre);
$comentario = mysqli_real_escape_string($conexion, $comentario);


$resultado = mysqli_query($conexion, 'INSERT INTO comentarios (nombre, comentario) VALUES ("' . $nombre . '", "' . $comentario . '")');
header('Location:comentarios.php');

mysqli_close($conexion);
?>
