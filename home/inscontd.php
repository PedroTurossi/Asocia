<?php
include "../configsrv.php";

$iduser45 = $_SESSION["idUser"];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['botaoSubmit']) && $_POST['botaoSubmit'] === 'Salvar') {
        $contdpost = $_POST["contd"];
        $titlpost = $_POST["titulo"];
        
            // Evite vulnerabilidades de segurança usando prepared statements
            $stmt = $conn->prepare("INSERT INTO conteudos (conteudo, titulo, conData, conHora, con_idUser) VALUES (?, ?, NOW(), NOW(), '". $iduser45 ."')");
            $stmt->bind_param("ss", $contdpost, $titlpost);
            $stmt->execute();
            header("Location: ../home/");
        } elseif (isset($_POST['botaoFechar']) && $_POST['botaoFechar'] === 'Fechar') {
            header("Location: ../home/");
        }
    }    
?>