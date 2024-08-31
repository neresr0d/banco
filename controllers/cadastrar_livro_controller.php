<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/livro.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/livro_categoria.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/livro_categoria.php';

$nome_livro = $_POST ['nome_livro'];
$autor = $_POST ['autor'];
$id_categoria = $_POST['id_categoria'];
$sinopse = $_POST ['sinopse'];
$foto_livro = $_POST['foto_livro'];


$livro = new Livro();
$livro->nome_livro = $nome_livro;
$livro->autor = $autor;
$id_categoria->id_categoria = $id_categoria;
$livro->sinopse = $sinopse;
$foto_livro->foto_livro = $foto_livro;

$id_usuario = $usuario->cadastrarLivro();




header('Location: /estante_web/banco/views/favoritos.php');
exit();