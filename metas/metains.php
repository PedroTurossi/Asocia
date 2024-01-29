<?php
include "../configsrv.php";
$usuarioid = $_SESSION["idUser"];


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $metaphp = $_POST['ameta'];

        // Evite vulnerabilidades de segurança usando prepared statements
        $stmt = $conn->prepare("INSERT INTO metas (Meta, MetaUser) VALUES (?, ?)");
        $stmt->bind_param("si", $metaphp, $usuarioid);
        $stmt->execute();
        header("Location: ../metas/");
}
$conn->close();


?>