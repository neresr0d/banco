<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/categoria.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';


$id_categoria = $_POST['id_categoria'];
$nome_categoria = $_POST['input-categorias'];


$categoria = new Categoria();
$categoria->nome_categoria = $nome_categoria;


$id_categoria = $categoria->cadastrarCategoria();

header('Location: /estante_web/banco/views/categoria.php');
exit();
