<<?php
    include('conexao.php');
    include('rconexao.php');
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>withelist</title>
    <link href="style/painel/panel.css" rel="stylesheet">
    <script src="js/painel.js" defer></script>
</head>
<body>
    <div class="cabecalho">
        <header>
            <img src="img/wantit.png" alt="">
        </header>
        <nav>
            <ul>
                <li><a href="topainel.php" class="painel">Painel</a></li>
                <li><a href='logout.php' class="logout">Logout</a></li>
            </ul>
    </div>
    </nav>
    <div class="spacing"></div>
    <main>
        <section class="container">
            <div class="grid"> 
                <?php 
                    $query = "SELECT * FROM itens";
                    $resultado = mysqli_query($mysqli2, $query);
                while($row = mysqli_fetch_array($resultado)) {
                ?>  
                <div class="card">
                    <a class="excluir" href="delete.php">-</a>
                    <h3 class="title"><?=$row['title'];?></h3>
                    <figure class="cardimg"><img class="imgproduto" src="img/options/<?=$row['classe'];?>.jpg" alt=""></figure>
                    <p><?=$row['detalhes'];?></p>
                </div>
                    <?php } ?>
                <div class="card adicionar">
                    <figure><a href="adicionar.php"><img class="adc" src="img/+.png" alt=""></a></figure>
                </div> 
            </div>
        </section>
    </main>
    <footer>
        ©2023 WantIt
    </footer>
</body>
</html>