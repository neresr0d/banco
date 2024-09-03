<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/categoria.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';


$nome_categoria = $_POST['id_categoria'];

$categoria = new Categoria();
$categoria->nome_categoria = $nome_categoria;


$id_categoria = $categoria->cadastrarCategoria();

header('Location: /estante_web/banco/views/adicionar_categoria.php');
exit();
