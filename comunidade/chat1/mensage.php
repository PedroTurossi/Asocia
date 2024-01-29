<?php
include "../../configsrv.php";

$userid = $_SESSION['idUser'];
// Se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mensagem'])) {
    // Recebe a mensagem do formulário
    $mensagem = $_POST['mensagem'];

    // Query para inserir a mensagem no banco de dados
    $sql = "INSERT INTO mensagem (msg_conteudo, msg_data, msg_hora, Msg_idUsSen) VALUES ('$mensagem', NOW(), NOW(), '$userid')";   //mudar nome da tabela
    //depois precisa muda o usuario que mando

    if ($conn->query($sql) === TRUE) {
        echo "Mensagem inserida com sucesso!";
    } else {
        echo "Erro ao inserir mensagem: " . $conn->error;
    }
}


$usera = "anonimo"; // aqui é só por enquanto, dps matamo essa linha

// Query para selecionar as mensagens do banco de dados
$sql = "SELECT * FROM mensagem ORDER BY idMensagem";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // Mostra as mensagens na tela
    while ($row = $result->fetch_assoc()) {
        $msgUserId = $row['Msg_idUsSen'];
    
        // Query para buscar o nome do usuário correspondente ao ID da mensagem
        $userQuery = "SELECT Nome FROM users WHERE idUser = '$msgUserId'";
        $userResult = $conn->query($userQuery);
    
        if ($userResult->num_rows > 0) {
            $userRow = $userResult->fetch_assoc();
            $userName = $userRow['Nome'];
        } else {
            $userName = "Usuário Desconhecido"; // Nome genérico caso não encontre o usuário
        }

        echo '<div class="a-post">';
        if($row['Msg_data'] == date('Y-m-d')){
            echo '<p class="message-date flodir subtitl">' . 'Hoje' . ' </p>';
        }
        else{
            echo '<p class="message-date flodir subtitl">' . $row['Msg_data'] . ' </p>';
        }
        echo '<p class="message-content msgcon">' . $row['Msg_conteudo'] . '</p>';
        echo '<p class="message-date flodir subtitl">' . $row['Msg_hora'] . ' </p>';
        echo '<p class="subtitl">- ' .  $userName . '</p>';
        echo '</div>';
    }
} else {
    echo "Nenhuma mensagem encontrada.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>