<?php
include "configsrv.php";

// Verifique se o usuário NÃO está logado, redirecione para a página de login se não estiver
if (!isset($_SESSION['idUser'])) {
    header("Location: ../login/"); // Redirecione para a página de login se o usuário não estiver logado
    exit();
}

$sql = "SELECT MAX(idMensagem) AS ultimo_id, Msg_data, Msg_hora FROM mensagem";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row["Msg_data"] == date("Y-m-d")) { $ultimaData = "Hoje";}
    else{
    
    $ultimaData = $row['Msg_data'];}
    $ultimaHora = $row['Msg_hora'];
}
else{
    $ultimaData = '';
    $ultimaHora = '';
}

$username = $_SESSION['Nome']; // Obtém o nome de usuário se o usuário estiver logado
?>
