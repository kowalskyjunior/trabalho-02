<?php

$servername = "localhost"; 
$username = "root";
$password = "";
$database = "consultas";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Erro de conexão " . $e->getMessage();
}
