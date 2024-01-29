<?php

$usuarioid = $_SESSION["idUser"];
$sql = "SELECT * FROM metas WHERE MetaUser = '$usuarioid' ORDER BY idMeta";
$result = $conn->query($sql);

if (!$result) {
    die('Erro na consulta SQL: ' . $conn->error);
}

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo '<div class="ameta">'. $row['Meta'] .' 
            <form method="post" action="delmeta.php">
                <input type="hidden" name="meta_id" value="'. $row['idMeta'] .'">

                <div style="display: flex; align-self: flex-end;">
                <button class="excbtn" type="submit" name="excluir">Excluir</button>
                </div>
            
            </form>
        </div>';
    }
} else {
    echo "<h3>Nenhuma meta encontrada</h3>";
}
?>