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
        <a href="/index.html">Inicio</a>
        <a href="/views/quem_somos.html"> Quem Somos</a>
        <a href="/views/contatos.html">Contato</a>
        <a href="/views/favoritos.html" class="alinhar"> <img src="/imgs/star.png.png" alt="" width="30px" height="30px">Favoritos</a>
        <a href="/views/login.html">Login</a>
    </nav>

    <main id="main">
        <div class="borda_login">
            <div>
                <h1>Crie sua conta</h1>


                <form action="">
                    <div class="perfil">
                        <label for="" class="email">Foto do perfil</label>
                        <img src="/estante_web/banco/imgs/upload.png" alt="Imagem" class="img-perfil">
                        <input type="file" id="fileInput">

                    </div>

                    <div class="nome">
                        <label for="name">Nome:</label>
                        <input type="text" id="nome" name="nome" required>
                        <div class="nome">
                        </div>
                        <br>

                        <label for="email">Email:</label>
                        <input type="email" name="email" required>
                        <br>
                        <br>
                        <div class="senha">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha">
                            <div>
                                <button>Criar Conta</button>
                            </div><br>

                            <div><br><h4>Já é cadastrado?</h4><br>
                             <a href="https://www.canva.com/design/DAGH3_Mzymw/QNPyFU1iTtvDz7E3N9cDog/edit"><h4>Acesse sua conta</h4></a></div>

                        </div>

                        <p class="h3">
                            Ao seguir com o cadastro, concordo com os <br>Termos de uso e Politicas de privacidade </p>








    </main>


</body>

</html>