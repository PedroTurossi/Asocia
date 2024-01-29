<?php
include "../configsrv.php";


if(isset($_POST['excluir']) && isset($_POST['meta_id'])) {
    $meta_id = $_POST['meta_id'];
    $usuarioid = $_SESSION["idUser"];

    // Query para excluir a meta específica do banco de dados
    $sql = "DELETE FROM metas WHERE idMeta = '$meta_id' AND MetaUser = '$usuarioid'";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../metas/");
        exit();
    } else {
        echo "Erro ao excluir a meta: " . $conn->error;
    }
}

?>