<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__cabecalho.php';
?>

<main>
    <div class="editar">
        <div class="editar1">
            <div>
                <h1>Editar Livro</h1>
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

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__rodape.php';
?>

</body>

</html>