<?php
# Entrada
$c = $_POST["cantidad"];
$t = $_POST["tipo"];

# Proceso
$db = new PDO('mysql:host=localhost;dbname=reni;charset=utf8', 'root', '');
$db->query("INSERT INTO descuentos VALUES ('$c', '$t')");

# Salida
header('Location: descuentos.php');
?>