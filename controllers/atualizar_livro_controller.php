<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/livro.php';


 $nome_livro = $_POST['nome_livro'];
 $autor = $_POST['autor'];
 $sinopse = $_POST['sinopse'];
 $foto_livro = $_POST['foto_livro'];
 $id_categoria = $_POST['id_categorias'];


 $livro = new Livro($id_livro);
 $livro->nome_livro = $nome_livro;
 $livro->autor = $autor;
 $sinopse->sinopse = $sinopse;
 $foto_livro->foto_livro = $foto_livro;
 $id_categoria->id_categoria = $id_categoria;
 
 $livro->atualizarLivro();

 header('Location: /estante_web/views/livros.php');
exit();