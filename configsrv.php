<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

//conexão com banco, aqui tu muda os valores 👍
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}


/*
create table users(
	idUser int PRIMARY key AUTO_INCREMENT not null,
    Nome varchar(100) not null,
    Email varchar(100) not null,
    senha varchar(255) not null
);
Create table mensagem(
	IdMensagem int PRIMARY key not null AUTO_INCREMENT,
	Msg_conteudo varchar(500) not null,
	Msg_hora time not null,
	Msg_data date not null,
	Msg_idUsSen int not null,
    foreign key (Msg_idUsSen) REFERENCES users(idUser)
);
create table metas(
	idMeta int PRIMARY KEY AUTO_INCREMENT not null,
	Meta varchar(500) not null,
    MetaUser int not null,
    FOREIGN KEY(MetaUser) REFERENCES users(idUser)
);
create table conteudos(
	idCont int PRIMARY KEY AUTO_INCREMENT,
    titulo varchar(100) not null,
    conteudo varchar(1000) not null,
    conData date not null,
    conHora time not null,
    con_idUser int not null,
	FOREIGN KEY(con_idUser) REFERENCES users(idUser)
);

*/
?>