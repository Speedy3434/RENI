<h1>Tiendas Reni</h1>
<nav>
    <a href="index.php">Portada</a>
    <a href="catalogo.php">Cátalogo</a>
    <a href="paquetes.php">Paquetes</a>
    <a href="descuentos.php">Descuentos</a>
    <a href="registrar_usuario.php">Crear cuenta</a>

    <?php if (isset($_SESSION["correo"])) { ?>
        <a href="logout.php">Cerrar sesión (<?php echo $_SESSION["correo"] ?>)</a>
    <?php } else { ?>
        <a href="login.php">Iniciar sesión</a>
    <?php } ?>
    
</nav>