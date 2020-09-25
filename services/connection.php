<?php
// Estilo por procedimientos

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_reread"

// Crear la conexion
$conn = mysqli_connect($host, $user, $pass, $db);

// Checkear la conexion
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL" . PHP_EQL;
    echo "Error de depuración: " . mysqli_connect_erno() . PHP_EQL;
    exit;
} else {
    mysqli_set_charset($conn, "utf8");
}

?>
