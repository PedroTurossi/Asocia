<?php
// Query pra pegar um conteúdo aleatório da tabela 'conteudos'
$sql = "SELECT * FROM conteudos ORDER BY RAND() LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $conUserId = $row['con_idUser'];
        $userQuery2 = "SELECT Nome FROM users WHERE idUser = '$conUserId'";
        $userResult = $conn->query($userQuery2);

        if ($userResult->num_rows > 0) {
            $userData = $userResult->fetch_assoc();
            $userName = $userData['Nome'];

            echo '<div class="a-post">';
            echo '<h6 class="subtitl flodir">' . $row["conData"] .' ás ' . $row["conHora"] . '</h6>';
            echo '<h4>' . $row["titulo"] . '</h4>';
            echo '<p>' . $row["conteudo"] . '</p>';
            echo '<h6 class="subtitl">Feito por: <span class="ausername">' . $userName . '</span></h6>';
            echo '</div>';
        } else {
            echo "";
        }
    }
} else {
    echo "Não há nenhuma postagem!";
}

?>
