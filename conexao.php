<?php 
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $db = 'login';

    $mysqli = new mysqli($host, $usuario, $senha, $db);

    if($mysqli->error) {
        die('Erro ao conectar no banco de dados' ($mysqli->error));
    }
?>