<?php 
require_once 'rconexao.php';
require_once 'conexao.php';
include('criar.php');

session_start();

$sql = "DELETE FROM itens WHERE title = '$title'";

if(isset($_POST['cadastrar'])){
    $title = mysqli_escape_string($mysqli2, $_POST['title']);
    $detalhes = mysqli_escape_string($mysqli2, $_POST['desc']);
    $class = mysqli_escape_string($mysqli2, $_POST['produtos']);
}
$sql = "DELETE FROM itens title = '$title'";

if(mysqli_query($mysqli2, $sql)){
    $_SESSION['status'] = 'Cadastro feito com sucesso!'; 
    header('Location: painel.php');
}else {
    $_SESSION['status'] = "Falha ao cadastrar!";
    header("Location: form.php");
}
?>