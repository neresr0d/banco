<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTANTE WEB</title>
    <link rel="stylesheet" href="/estante_web/banco/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo-busca">
            <h1>Estante Web</h1>
            <form action="">
                <input type="search" name="busca" id="busca">
            </form>
        </div>

    </header>
    <nav>
        <a href="/estante_web/banco/index.php">Inicio</a>
        <a href="/estante_web/banco/views/quem_somos.php"> Quem Somos</a>
        <a href="/estante_web/banco/views/contatos.php">Contato</a>
        <a href="/estante_web/banco/views/favoritos.php" class="alinhar"> <img src="/imgs/star.png.png" alt="" width="30px" height="30px">Favoritos</a>
        <a href="/estante_web/banco/views/login.php">Login</a>
    </nav>

    <main id="main">
        <div class="borda_cadastro">

            <h1>Crie sua conta</h1>


            <form action="/estante_web/banco/controllers/cadastrar_usuario_controller.php" method="POST">

                <!--<div class="perfil">
                    <label for="file" class="file">Foto do perfil</label>
                    <img src="/estante_web/banco/imgs/upload.png" alt="Imagem" class="img-perfil">
                    <input type="file" id="fileInput" name="file">

                </div>-->

                <div class="cad">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                </div>
                <br>
                <div class="cad">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>

                </div>
                <br>

                <div class="cad">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <br>

                <div class="cad">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div>
                    <button type="submit" value="CADASTRAR">Criar Conta</button>
                </div><br>

                <div><br>
                    <h4>Já é cadastrado?</h4><br>
                    <a href="">
                        <h4>Acesse sua conta</h4>
                    </a>
                </div>




                <p class="h3">
                    Ao seguir com o cadastro, concordo com os <br>Termos de uso e Politicas de privacidade </p>

            </form>
        </div>
    </main>


</body>

</html>