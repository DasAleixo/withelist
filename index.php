<?php
    include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            echo "Insira um email";
        }
        else if(strlen($_POST['senha']) == 0){
            echo "Insira uma senha";
        }

        else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "select * from usuario where email = '$email' and senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die('erro ao logar' ($mysqli->error));

            $qntd = $sql_query->num_rows;

            if ($qntd == 1){
                $usuario = $sql_query->fetch_assoc();

                session_start();
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: form.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/index.css" rel="stylesheet">
    <script src="js/index.js" defer></script> 
    <title>withelist</title>
</head>
<body>
    <div class="cabecalho">
        <header>
            <img class='img' src="img/wantit.png" alt="">
        </header>
        <nav>
            <ul>
                <li><a href="#" class="login">Login</a></li>
            </ul>
    </div>
    </nav>
    <div class="spacing"></div>
    <main>
        <section class="container">
            <div class="background">
                <div class="imagem"><img src="img/login.png" alt=""></div>
                <form action="" method="post">
                    <div class="mb">
                        <label for="email" class="form-label">Email address:</label>
                        <input type="text"  class="email" name="email" required>
                    </div>
                    <div class="mb">
                        <label for="password"   class="form-label">Password:</label>
                        <input type="password" class="pwd" name="senha" required>
                    </div>
                    <button type="submit" class="btn-1">Submit</button>
                </form>  
            </div> 
        </section>
    </main>
    <footer>
        ©2023 WantIt
    </footer>
</body>
</html>