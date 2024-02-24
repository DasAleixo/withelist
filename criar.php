<?php 
require_once 'rconexao.php';
require_once 'conexao.php';
include('index.php');

session_start();
$user_id = $_SESSION['id'];

    if(isset($_POST['cadastrar'])){
        $title = mysqli_escape_string($mysqli2, $_POST['title']);
        $detalhes = mysqli_escape_string($mysqli2, $_POST['desc']);
        $class = mysqli_escape_string($mysqli2, $_POST['produtos']);
    }
    $sql = "INSERT INTO itens (title, classe, detalhes, id_user) VALUES ('$title', '$class', '$detalhes', '$user_id')";

    if(mysqli_query($mysqli2, $sql)){
        $_SESSION['status'] = 'Cadastro feito com sucesso!'; 
        header('Location: painel.php');
    }else {
        $_SESSION['status'] = "Falha ao cadastrar!";
        header("Location: form.php");
    }
?>
