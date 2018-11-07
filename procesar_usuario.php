<?php
# Entrada
$c = $_POST["correo"];
$p1 = $_POST["password1"];
$p2 = $_POST["password2"];
$n = $_POST["nombres"];
$a = $_POST["apellidos"];
# Proceso
$p1 = sha1($p1);
$db = new PDO('mysql:host=localhost;dbname=portal;charset=utf8', 'root', '');
$db->query("INSERT INTO usuarios VALUES (NULL, '$c', '$p1', SYSDATE(), '$n', '$a',)");

# Salida
header('Location: confirmar_usuario.php');
?>