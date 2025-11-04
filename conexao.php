<?php
// Dados de conexão
$host = "localhost";
$port = "5432";
$dbname = "bdaula1";
$user = "postgres";
$password = "1a5e9i"; // Put your own password

// String de conexão
$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Tentando conectar
$conn = pg_connect($conn_string);

// Verificação
if (!$conn) {
    die("❌ Erro ao conectar ao banco de dados.");
}
?>

