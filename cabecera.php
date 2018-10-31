
<nav>
<ul>
    <li><a href="index.php">Portada</a></li>
    <li><a href="catalogo.php">Cátalogo</a></li>
    <li><a href="paquetes.php">Paquetes</a></li>
    <li><a href="descuentos.php">Descuentos</a></li>
    <li><a href="registrar_usuario.php">Crear cuenta</a></li>
  

    <?php if (isset($_SESSION["correo"])) { ?>
        <li><a href="logout.php">Cerrar sesión (<?php echo $_SESSION["correo"] ?>)</a></li>
    <?php } else { ?>
        <li><a href="login.php">Iniciar sesión</a></li>
    <?php } ?>
</ul>
</nav>