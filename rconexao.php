<?php 
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $db2 = 'produtos';

    $mysqli2 = new mysqli($host, $usuario, $senha, $db2);

    if($mysqli2->error) {
        die('Erro ao conectar no banco de dados' ($mysqli2->error));
    }
?>