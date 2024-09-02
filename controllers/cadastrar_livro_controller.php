<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/livro.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/categoria.php';

$foto_livro = $_POST['foto_livro'];
$nome_livro = $_POST ['nome_livro'];
$autor = $_POST ['autor'];
$id_categoria = $_POST['id_categoria'];
$sinopse = $_POST ['sinopse'];



$livro = new Livro();
$livro->foto_livro = $foto_livro;
$livro->nome_livro = $nome_livro;
$livro->autor = $autor;
$livro->id_categoria = $id_categoria;
$livro->sinopse = $sinopse;


$id_livro = $livro->cadastrarLivro();


$nome = $_POST['id_categoria'];

$categoria = new Categoria();
$categoria->nome_categoria = $nome;


$id_categoria = $categoria->cadastrarCategoria();




header('Location: /estante_web/banco/views/favoritos.php');
exit();