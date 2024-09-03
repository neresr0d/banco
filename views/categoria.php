<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/categoria.php';

$listagem_categoria = Categoria::listar();
?>

<main id="conteudo-categoria">
    <div id="modal-categorias">
        <div id="btn-categorias">
            <h1>Getenciar Categorias</h1>
            <a id="add-categoria" href="/estante_web/banco/views/adicionar_categoria.php">Adicionar</a>
            <a class="btn-back" href="/estante_web/views/perfil.php"><img src="/estante_web/imgs/back-icon.svg" alt="" /></a>
        </div>

        <div id="tabela-categorias">
        <?php foreach ($listagem_categoria as $categoria): ?>  
                <div class="linhas-categoria">
                    <p><?= $categoria['nome'] ?></p>
                    <div class="acoes-categoria">
                        <a href="/estante_web/views/edit-categorias.php?id_categoria=<?= $categoria['id_categoria'] ?>" class="btn-edit">
                            <img src="/estante_web/imgs/edit-icon.svg" alt=""></img>
                        </a>
                        <form action="/estante_web/banco/controllers/del_categoria_controller.php" method="post" onsubmit="return confirm('Você tem certeza que quer deletar esta Categoria ??')">
                            <input type="hidden" name="id_categoria" value="<?= $categoria['id_categoria'] ?>">
                            <button type="submit" class="btn-delet">
                                <img src="../imgs/delete-icon.svg" alt="">
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__rodape.php';
?>
</body>

</html>