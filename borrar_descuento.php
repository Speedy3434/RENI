<?php
# Entrada
$id = $_POST["id"];

# Proceso
$db = new PDO('mysql:host=localhost;dbname=reni;charset=utf8', 'root', '');
$db->query("DELETE FROM usuarios WHERE id = '$id'");

# Salida
header('Location: descuentos.php');
?>