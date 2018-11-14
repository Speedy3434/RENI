<?php
session_start();
$id = intval($_GET["id"]);
$db = new PDO('mysql:host=localhost;dbname=reni;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM usuarios WHERE id = '$id'");
$u = $stmt->fetchObject();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de resgistro</title>
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

    <form action="procesar_editar_usuario.php" method="post">
        <input type="hidden" name="id" value="<?php echo intval($_GET['id'])?>">
        <div>
            Correo: <input type="email" name="correo" value="<?php echo $u->correo?>">

            Usuario: <input type="text" name="usuario" value="<?php echo $u->usuario?>">
        
            Nombres: <input type="text" name="nombres" value="<?php echo $u->nombres?>">
        
            Apellidos: <input type="text" name="apellidos" value="<?php echo $u->apellidos?>">

        </div>

        <button type="submit">Editar cuenta</button>
    </form>

</body>
</html>

