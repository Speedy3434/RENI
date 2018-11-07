<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiendas RENI</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>
    <?php include 'header.php' ?>

    <main>
    <section id="banner">
        <img src="http://blog.camisetaimedia.com/wp-content/uploads/2016/07/taza-personalizada-banner-largo-1.jpg">

        <section id="bienvenidos">
            <h2>Crea Tu Propia Cuenta</h2>
            
        </section>

    </section>
    </main>

    <form action="procesar_usuario.php" method="post">
        <div>
            Correo: <input type="email" name="correo">
        </div>
        <div>
            Contraseña: <input type="password" name="password1">
        </div>
        <div>
            Confirmar: <input type="password" name="password2">
        </div>
        <div>
            Nombres: <input type="text" name="nombres">
        </div>
        <div>
            Apellidos: <input type="text" name="apellidos">
        </div>
        <button type="submit">Crear cuenta</button>
    </form>

</body>
</html>