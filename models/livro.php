<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';

class Livro {
    public $id_livro;
    public $nome_livro;
    public $autor; 
    public $sinopse;
    public $foto_livro;
    public $id_categoria;

    public function cadastrarLivro()
    {
        try{
          $conn = Conexao::conectar(); 

          $sql = 'INSERT INTO livro (nome_livro, autor, sinopse, foto_livro, id_categoria) VALUES (:nome_livro, :autor, :sinopse, :foto_livro, :id_categoria)';

          $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_livro', $this->nome_livro);
            $stmt->bindValue(':autor', $this->autor);
            $stmt->bindValue(':sinopse', $this->sinopse);
            $stmt->bindValue(':foto_livro', $this->foto_livro);
            $stmt->bindValue(':id_categoria', $this->id_categoria);

            $stmt->execute();
        } catch(PDOException $erro) {
            echo $erro->getMessage();
        }

    }
};