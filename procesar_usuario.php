<?php
# Entrada
$c = $_POST["correo"];
$p = $_POST["password"];
$u = $_POST["usuario"];
$n = $_POST["nombres"];
$a = $_POST["apellidos"];
# Proceso

$db = new PDO('mysql:host=localhost;dbname=reni;charset=utf8', 'root', '');
$db->query("INSERT INTO usuarios VALUES (NULL, '$c', '$p', $u, '$n', '$a')");

# Salida
header('Location: confirmar_usuario.php');
?>