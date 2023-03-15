<?php
$servername = "localhost";
$username = "matheus";
$password = "123";
$database = "kabum";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica a conexão
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conexão bem sucedida!";
?>
