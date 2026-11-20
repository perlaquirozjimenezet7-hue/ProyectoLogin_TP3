<<<<<<< HEAD
<?php
// db_connect.php
// Ajusta estos parámetros a tu entorno
$db_host = '127.0.0.1';
$db_name = 'db_proyecto_login';
$db_user = 'perlaquiroz';
$db_pass = 'CLAVESEGURA2026'; 

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $options);
} catch (PDOException $e) {
    // En producción no mostrar detalles sensibles
    die("Error de conexión a la base de datos.");
}
=======
<?php
// db_connect.php
// Ajusta estos parámetros a tu entorno
$db_host = '127.0.0.1';
$db_name = 'db_proyecto_login';
$db_user = 'perlaquiroz';
$db_pass = 'CLAVESEGURA2026'; 

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $options);
} catch (PDOException $e) {
    // En producción no mostrar detalles sensibles
    die("Error de conexión a la base de datos.");
}
>>>>>>> 8b91247bf1670668600e4ae32d15c726c855a142
