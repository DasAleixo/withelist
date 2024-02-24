<?php 
    include_once('protect.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/form/prodct.css" rel="stylesheet">
    <script src="js/product.js" defer></script> 
    <title>withelist</title>
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
            <div class="background">
                <div class="title"><h2>Seja bem vindo, <?php echo $_SESSION['nome'];?> </h2></div>
                <form action="criar.php" method="post">
                    <div class="mb">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text"  class="title" name="title" required>
                    </div>
                    <div class="mb">
                        <label for="clas" class="form-label">Options:</label>
                        <div class="classes">
                            <input type="button" class="games options" value="Games">
                            <input type="button" class="consoles options" value="Consoles">
                            <input type="button" class="hardwares options" value="Hardwares">
                        </div>
                    </div>
                    <div class="mb">
                        <label for="produto"  class="form-label">Product:</label>
                        <select class="produtos" name="produtos">
                            <option class="games" id="games" value="cs2">CS2</option>
                            <option class="games" id="games" value="roblox">Roblox</option>
                            <option class="games" id="games" value="minecraft">Minecraft</option>
                            <option class="consoles" id="consoles" value="ps5">PS5</option>
                            <option class="consoles" id="consoles" value="xboxone">Xbox One</option>
                            <option class="consoles" id="consoles" value="nintendo">Nintendo Switch</option>
                            <option class="hardwares" id="hardwares" value="nvidia">Nvidia</option>
                            <option class="hardwares" id="hardwares" value="amd">AMD</option>
                            <option class="hardwares" id="hardwares" value="intel">Intel</option>
                        </select>
                    </div>
                    <div class="mb desc">
                        <label for="desc"   class="form-label">Description:</label>
                        <textarea type="text" class="desc" name="desc" required></textarea>
                    </div>
                    <button type="submit" name="cadastrar" class="btn-1">Submit</button>
                </form>  
            </div> 
        </section>
    </main>
    <footer>
        ©2023 WantIt
    </footer>
</body>
</html>
