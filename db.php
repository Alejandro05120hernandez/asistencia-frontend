<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "zongolica";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Habilitar soporte para acentos y Ñ
$conn->set_charset("utf8mb4");
?>