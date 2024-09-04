<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__cabecalho.php';
?>
<main>

    <form action="/estante_web/banco/controllers/cadastrar_livro_controller" method="post" enctype="multipart/form-data">
        <div class="editar">
            <div class="editar1">
                <div>
                    <h1>Adicionar Livro</h1>
                </div>
                <div><button><a href="/estante_web/banco/views/index.php"><img src="/estante_web/banco/imgs/bnt-voltar.png" alt=""></a> </button>
                </div>
            </div>
            <div class="editar-imgs">
                <div class="img-livro">
                    <p>Adicionar imagem</p><input type="file" id="fileimg" name="foto_livro">
                </div>
                <div class="inputs-imgs">
                    <input type="text" placeholder="Digite Título" class="iii" name="nome_livro">
                    <input type="text" placeholder="Digite Autor" class="iii" name="autor">
                    <input type="text" placeholder="Digite Categoria" class="iii" name="id_categorias">

                   <!--  <select name="categoria-livro" id="categoria-livro" class="input-descricaoLivro">
                <option value="" disabled selected>Selecione uma categoria</option>
                ?php foreach ($listagem_categoria as $categoria): ?>
                  <option value="?= $categoria['id_categoria'] ?>">
                    ?= $categoria['nome'] ?>
                  </option>
                ?php endforeach; ?> -->
                </div>
            </div>

            <div>
                <input type="text" placeholder="Digite Sinopse" name="sinopse">
            </div>
            <div>
                <button type="submit">Salvar</button>
            </div>
            <div>
                <button type="delete">Apagar</button>
            </div>
            <div>
                <button type="edit">Editar</button>
            </div>
        </div>


    </form>

</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__rodape.php';
?>

</body>

</html>