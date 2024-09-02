<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/categoria.php';

 $id_categoria = $_POST['id_categoria'];
 $nome_categoria = $_POST['nome_categoria'];

 $categoria = new Categoria($id_categoria);
 $categoria->nome_categoria = $nome_categoria;
 
 $categoria->atualizarCategoria();

 header('Location: /estante_web/views/categorias.php');
exit();