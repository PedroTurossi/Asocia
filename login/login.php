<?php
include "../configsrv.php";

session_start();

$email_or_nome = $_POST['email_or_nome'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("SELECT idUser, Nome, Email, senha FROM users WHERE Email=? OR Nome=?");
$stmt->bind_param("ss", $email_or_nome, $email_or_nome);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        $_SESSION['idUser'] = $row['idUser'];
        $_SESSION['Nome'] = $row['Nome'];
        $_SESSION['Email'] = $row['Email'];
        // Redirecionar para página logada ou realizar alguma ação
        header("Location: ../home/");
        exit();
    } else {
        echo "Senha incorreta!";
    }
} else {
    echo "Email ou nome não encontrado!";
}


$stmt->close();
$conn->close();
?>
