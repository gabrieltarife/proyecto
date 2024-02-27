<?php
$configFile = 'password.php';
$config = include $configFile;
$password = $config['password'];

return [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => $password,
    'db'   => 'isena',
];

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    session_regenerate_id();
    header("Location: ../login/login.php");
    exit;
}