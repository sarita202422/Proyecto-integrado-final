<?php
// Permitir llamadas desde cualquier origen (por ejemplo, desde index.html con fetch)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PATCH, DELETE");

// Conexión a la base de datos
$host = "localhost";
$db = "portafolio_db";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["error" => "Conexión fallida"]));
}
?>
