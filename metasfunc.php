<?php

$usuarioid = $_SESSION["idUser"];

$sql = "SELECT * FROM metas WHERE MetaUser = '$usuarioid' ORDER BY idMeta";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo '<li style="font-size: 15px;"> '. $row['Meta'] .' </li>';
    }
} else {
    echo "<h5>Nenhuma meta encontrada, crie-as <a href='../metas/'>aqui</a>!</h5>";
}

$conn->close();
?>