<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/categoria.php';

$id_categoria = $_POST['id_categorias'];

$categoria = new Categoria($id_categoria);
$categoria->id_categoria = $id_categoria;
?>

<main id="conteudo-categoria">
  <div id="modal-categorias">
    <div id="btn-categorias">
      <h1>Deletar Categorias</h1>
      <a class="btn-back" href="/estante_web/banco/views/categoria.php"><img src="/estante_web/imgs/back-icon.svg" alt="" /></a>
    </div>

    <form action="/estante_web/banco/controllers/del_categoria_controller.php" method="post" id="form-editCategoria    ">
      <input type="hidden" name="id_categoria" value="<?= $categoria->id_categoria ?>">
      <div id="input-add">
        <input
          type="text"
          name="input-edit-categorias"
          id="input-edit-categorias"
          value="<?= $categoria->nome_categoria ?>" />
        <button id="btn-edit-categoria" type="submit">Deletar</button>
      </div>
    </form>
  </div>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__rodape.php';
?>
</body>

</html>