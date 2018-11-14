<?php
# Entrada
$c = $_POST["correo"];
$p1 = $_POST["password1"];
$u = $_POST["usuario"];
$n = $_POST["nombres"];
$a = $_POST["apellidos"];
# Proceso
$p1 = sha1($p1);
$db = new PDO('mysql:host=localhost;dbname=reni;charset=utf8', 'root', '');
$db->query("INSERT INTO usuarios VALUES (NULL, '$c', '$p1', $u, '$n', '$a')");

# Salida
header('Location: index.php');
?>