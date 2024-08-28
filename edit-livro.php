<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante Web</title>

    <link rel="stylesheet" href="/estante_web/banco/css/style.css">

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
        <a href="quem_somos.html">Quem Somos</a>
        <a href="contatos.html">Contatos</a>
        <a href="" class="alinhar">
            <img src="../imgs/star.png.png" alt="" width="30px" height="30px">
            Favoritos
        </a>
        <a href="login.html">Login</a>

    </nav>

    <main>
        <div class="editar">
            <div class="editar1">
                <div>
                    <h1>Editar livro</h1>
                </div>
                <div><button><a href=""><img src="/estante_web/banco/imgs/bnt-voltar.png" alt=""></a> </button>
                </div>
            </div>
            <div class="editar-imgs">
                <div class="img-livro">
                <p>Adicionar imagem</p><input type="file" id="fileimg" name="fileimg"> 
                </div>
                <div class="inputs-imgs">
                    <input type="text" placeholder="Digite Título" class="iii">
                <input type="text" placeholder="Digite Autor" class="iii">
                <input type="text" placeholder="Digite Categoria" class="iii">
                </div>
            </div>

            <div>
            <input type="text" placeholder="Digite Sinopse">
            </div>
            <div class="save-delete">
                <button>Salvar</button>
            </div>
            <div class="save-delete">
            <button>Deletar</button>
            </div>
        </div>
    </main>

    <footer>
        <div id="copy">
            &copy; Estante Web
        </div>

        <div>
            Todos os direitos reservados
        </div>

        <div class="img-fim">
            <img src="../imgs/facebook.svg" alt="" width="30px" height="30px">
            <img src="..//imgs/instagram.svg" alt="" width="30px" height="30px">
        </div>

    </footer>

</body>

</html>