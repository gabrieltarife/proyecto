<?php
$configFile = 'password.php';
$servername = "localhost";
$dbUsername = "root";
$config = include $configFile;
$password = $config['password'];
$dbname = "isena";

// Crear conexión
$conn = new mysqli($servername, $dbUsername, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    // Mostrar mensaje de error y cerrar sesión
    die("Error al conectarse a la base de datos: " . $conn->connect_error);
}

// Muestra el mensaje de notificación y luego lo borra
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} else {
    $message = null;
}