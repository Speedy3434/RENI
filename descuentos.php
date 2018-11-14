<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=reni;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll();
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
<body bgcolor="fdddca">
    <?php include 'header.php' ?>
    <main>
    <section id="banner">
        <img src="http://blog.camisetaimedia.com/wp-content/uploads/2016/07/taza-personalizada-banner-largo-1.jpg">

        <section id="bienvenidos">
            <h2>Los descuentos que tenemos para tí</h2>
            <table style="width: 100%; border-collapse: collapse;" border="1">
                <tr>
                    <th>Cantidad</th>
                    <th>Tipo</th>
                    <th>Operaciones</th>
                </tr>

                <?php if (count($usuarios) == 0) { ?>
                    <tr>
                         <td colspan="5" 
                         style="text-align: center"> No se encontraron registros</td>
                    </tr>
                <?php } ?>

                <?php foreach ($usuarios as $u) { ?>
                <tr>
                    <td><?php echo $u["cantidad"] ?> 
                    <td><?php echo $u["tipo"] ?></td>
                    <td style="text-align: center">            
                        <form action="borrar_descuento.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                            <button type="submit">Borrar</button>
                        </form>    
                        <form action="editar_usuario.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                            <button type="submit">Editar</button>
                        </form>
                        <form action="editar_password.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                            <button type="submit">E.Contraseña</button>
                        </form>         
                    </td>
                </tr>
                <?php } ?>
    </table>
        </section>

    </section>
    </main>