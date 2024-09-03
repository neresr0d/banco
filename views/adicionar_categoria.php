<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__cabecalho.php';
?>

<main id="conteudo-categoria">
  <div id="modal-categorias">
    <div id="btn-categorias">
      <h1>Adicionar Categorias</h1>
      <a class="btn-back" href="/estante_web/banco/views/categorias.php"><img src="/estante_web/banco/imgs/back-icon.svg" alt="" /></a>
    </div>

    <form action="/estante_web/banco/controllers/cadastrar_categoria_controller.php" method="post" id="form-editCategoria">
      <div id="input-add">
        <input
          type="text"
          name="input-categorias"
          id="input-categorias"
          placeholder="Digite a Categoria" />
        <button id="btn-add-categoria" type="submit">Adicionar</button>
      </div>
    </form>
  </div>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__rodape.php';
?>
</body>

</html>