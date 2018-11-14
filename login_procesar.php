<?php
# Entrada
$correo = $_POST["correo"];
$password = $_POST["password"];

# Proceso
$password = sha1($password);

$db = new PDO('mysql:host=localhost;dbname=reni;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password'");
$usuarios = $stmt->fetchAll();

$validacion = false;

if (count($usuarios) == 1) {
    # Datos correctos
    $validacion = true;
    session_start();
    $_SESSION["correo"] = $correo;
}

# Salida
if ($validacion) {
    header('Location: index.php');
}
else {
    header('Location: login.php?error=1');
}
?>