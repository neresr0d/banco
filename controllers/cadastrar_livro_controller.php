<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/livro.php';


$nome_livro = $_POST ['nome_livro'];
$autor = $_POST ['autor'];
$id_categoria = $_POST['id_categoria'];
$sinopse = $_POST ['sinopse'];
$foto_livro = $_POST['foto_livro'];



$livro = new Livro();
$livro->nome_livro = $nome_livro;
$livro->autor = $autor;
$livro->id_categoria = $id_categoria;
$livro->sinopse = $sinopse;
$livro->foto_livro = $foto_livro;


$id_livro = $livro->cadastrarLivro();


$nome = $_POST['id_categoria'];

$categoria = new Categoria();
$categoria->nome_categoria = $nome;


$id_categoria = $categoria->cadastrarCategoria();




header('Location: /estante_web/banco/views/favoritos.php');
exit();