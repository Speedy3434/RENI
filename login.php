<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=reni;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM usuarios ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicar Sesión</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <?php include 'header.php' ?>

    <main>
    <section id="banner">
        <img src="http://blog.camisetaimedia.com/wp-content/uploads/2016/07/taza-personalizada-banner-largo-1.jpg">

    </section>
    </main>

    <form action="procesar_usuario.php" method="post" class="registrar">
        <h2 class="titulo">Inicia Sesión</h2>
        <div class="contenedor-input">
            <input type="email" name="correo" placeholder="Correo" class="ancho_100" required>
           
            <input type="password" name="password" placeholder="Contraseña" class="ancho_100" required>

            <input type="submit" value="Iniciar" class="btn">
            <p class="linkk">Registrate Gratis <a href="registro.php">Ingresa aquí</a></p>
        </div>
    </form>

</body>
</html>