<?php
include('conexion.php');

$resultado = mysqli_query($conexion, 'SELECT * FROM comentarios');
while ($comentario = mysqli_fetch_object($resultado)) {
    echo '<b>' . $comentario->nombre . '</b> (' . $comentario->fecha . ') dijo:';
    echo '<br/>';
    echo $comentario->comentario;
    echo '<br/>';
}
?>
