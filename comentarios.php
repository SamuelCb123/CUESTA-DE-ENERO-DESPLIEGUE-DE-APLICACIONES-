<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="JS/bootstrap.bundle.js"></script>
</head>
<body>
<header>
        <nav>
            <img src="logo.PNG" width="100px">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="comentarios.php"> Opiniones</a></li>
            </ul>
        </nav>
        </header>


    <form method="POST" action="enviarcomentario.php">
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Valoraciones</h2>
                        <br>
                        <p class="lead">Introduce tu Experiencia </p>
                        <br>
                        <div class="col-xs-12">
                            <h3>Realiza un comentario </h3>
                            <br>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input class="form-control" name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre">
                            </div>
                            <div class="form-group">
                                <label for="comentario" class="form-label">Comentario</label>
                                <textarea class="form-control" name="comentario" cols="30" row="5" type="text" id="comentario" placeholder="Escribe tu comentario..."></textarea>
                            </div>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Enviar comentario">
                            <br>
                            <br>
                            <br>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <footer>
    <p>&copy; 2024 Samuel</p>
</footer>
</body>
</html>
