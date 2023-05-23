<?php

$server = "teste";
$username = "teste";
$password = "teste";
$database = "teste";

try {
    $conn = new PDO("sqlsrv:server=$server;database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}

?>
