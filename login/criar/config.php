<?php
include "../../configsrv.php";


// Dados a serem inseridos
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// Outros campos e valores aqui...


// Consulta SQL de inserção
$sql = "INSERT INTO users (Nome, Email, senha) VALUES ('$nome', '$email', '$senha')";   //lembra de trocar o nome da tabela aqui

if ($conn->query($sql) === TRUE) {
    header("Location: ../");
    exit();
} else {
    echo "Erro na inserção: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
