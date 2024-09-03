<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/livro.php';

class Livro {
    public $id_livro;
    public $nome_livro;
    public $autor; 
    public $sinopse;
    public $foto_livro;
    public $id_categoria;

    public function __construction($id_livro = false)
    {
        if ($id_livro); {
            $this->id_categoria = $id_livro;
            $this->carregarLivro();
        }
    }

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

    public function carregarLivro()
    {
        $conn = Conexao::conectar();
        $sql = "SELECT * FROM livro WHERE id_livro = :id_livro";
        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id_livro', $this->id_livro);
        $stmt->bindValue(':nome_livro', $this->nome_livro);
        $stmt->bindValue(':autor', $this->autor);
        $stmt->bindValue(':sinopse', $this->sinopse);
        $stmt->bindValue(':foto_livro', $this->foto_livro);
        $stmt->bindValue(':id_categoria', $this->id_categoria);

        $stmt->execute();
        $resultado = $stmt->fetch();


        $this->nome_livro = $resultado['nome_livro'];
        $this->autor = $resultado['autor'];
        $this->sinopse = $resultado['sinopse'];
        $this->foto_livro = $resultado['foto_livro'];
    }

    public function atualizarLivro()
    {
        try {
            $conn = Conexao::conectar();
            $sql = "UPDATE livro SET nome_livro = :nome_livro, autor = :autor, foto_livro = :foto_livro, id_categoria = :id_categoria WHERE id_categoria = :id_categoria";
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_livro', $this->nome_livro);
            $stmt->bindValue(':autor', $this->autor);
            $stmt->bindValue(':sinopse', $this->sinopse);
            $stmt->bindValue(':foto_livro', $this->foto_livro);

            $stmt->bindValue(':id_livro', $this->id_livro);
            $stmt->bindValue(':id_categoria', $this->id_categoria);

            

            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public static function listarLivro()
    {
        try {
            $conn = Conexao::conectar();
            $sql = "SELECT * FROM livro";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $lista = $stmt->fetchAll();
            return $lista;
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function deletarLivro()
    {
        try {
            $conn = Conexao::conectar();
            $sql = "DELETE FROM livro WHERE id_livro = :id_livro";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id_livro', $this->id_livro);
            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }


};