<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/categoria.php';
$id_categoria = $_POST['id_categoria'];

$categoria = new Categoria($id_categoria);
$categoria->deletarCategoria();

header('location: /estante_web/banco/views/categorias.php');
exit();