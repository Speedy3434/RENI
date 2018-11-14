<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registo de Descuentos</title>
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

    <form action="procesa_descuento.php" method="post" class="registrar">
        <h2 class="titulo">Registro De descuentos</h2>
        <div class="contenedor-input">
            <input type="text" name="cantidad" placeholder="Cantidad" class="ancho_100">

            <textarea name="tipo" cols="30" rows="10" placeholder="Descripcion" class="ancho_100"></textarea>

            <button  type="submit" class="btn">Registrar Descuento</button>
        </div>

        
    </form>

</body>
</html>