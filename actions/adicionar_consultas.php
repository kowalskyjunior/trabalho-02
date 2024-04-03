<?php

require_once 'config_consultas.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $data = $_POST["data"];
        $horario = $_POST["horario"];

        $sql = "INSERT INTO clientes (nome, cpf, email, telefone, data, horario) 
                VALUES (:nome, :cpf, :email, :telefone, :data, :horario)";
        $stmt = $conn->prepare($sql);

        $stmt->execute(array(
            ':nome' => $nome,
            ':cpf' => $cpf,
            ':email' => $email,
            ':telefone' => $telefone,
            ':data' => $data,
            ':horario' => $horario
        ));

        header('Location: ../listarConsultas.php');
    } catch(PDOException $e) {
        echo "Erro ao inserir os dados: " . $e->getMessage();
    }
}
?>
