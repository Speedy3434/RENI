<?php
# Entrada
$id = $_POST["id"]; 
$c = $_POST["correo"];
$u = $_POST["usuario"];
$n = $_POST["nombres"];
$a = $_POST["apellidos"];

# Proceso
$p1 = sha1($p1);
$db = new PDO('mysql:host=localhost;dbname=portal;charset=utf8', 'root', '');
$db->query("UPDATE usuarios SET correo = '$c', usuario = '$u', nombres= '$n', apellidos= '$a' WHERE id = '$id'");

# Salida
header('Location: descuentos.php');
?>