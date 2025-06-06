<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "loja_futebol";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erro na ligação à base de dados: " . $conn->connect_error);
}
?>
