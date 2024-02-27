<?php
// Archivo para encriptar la contraseña de la base de datos
$configFile = 'C:/xampp/htdocs/password.php';
$password = '';

// Genera un salt aleatorio
$salt = random_bytes(16);

// Define el número de iteraciones
$iterations = 1000;

// Encripta la contraseña utilizando PBKDF2 con el salt y el número de iteraciones
$encryptedPassword = hash_pbkdf2("sha256", $password, $salt, $iterations, 20);

// Guarda el salt y la contraseña encriptada en el archivo de configuración
file_put_contents($configFile, "<?php\n return array( 'password' => '" . $encryptedPassword . "', 'salt' => '" . bin2hex($salt) . "' );\n?>");