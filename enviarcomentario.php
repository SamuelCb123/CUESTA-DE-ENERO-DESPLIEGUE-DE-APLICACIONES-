<?php
include('conexion.php');
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];


$resultado = mysqli_query($conexion, 'INSERT INTO comentarios (nombre, comentario) VALUES ("' . $nombre . '", "' . $comentario . '")');
header('Location:comentarios.php');

mysqli_close($conexion);
?>
