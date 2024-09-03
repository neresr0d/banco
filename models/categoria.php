<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';



class Categoria
{

    public $id_categoria;
    public $nome_categoria;

    public function __construction($id_categoria = false)
    {
        if ($id_categoria); {
            $this->id_categoria = $id_categoria;
            $this->carregarCategoria();
        }
    }


    public function cadastrarCategoria()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO categoria (nome_categoria) VALUES (:nome_categoria)';

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_categoria', $this->nome_categoria);


            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function carregarCategoria()
    {
        $conn = Conexao::conectar();
        $sql = "SELECT * FROM categoria WHERE id_categoria = :id_categoria";
        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id_categoria', $this->id_categoria);

        $stmt->execute();
        $resultado = $stmt->fetch();


        $this->nome_categoria = $resultado['nome_categoria'];
    }
    
    
    
    
    public function atualizarCategoria()
    {
        try {
            $conn = Conexao::conectar();
            $sql = "UPDATE categoria SET nome_categoria = :nome_categoria WHERE id_categoria = :id_categoria";
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_categoria', $this->nome_categoria);

            $stmt->bindValue(':id_categoria', $this->id_categoria);

            

            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public static function listar()
    {
        try {
            $conn = Conexao::conectar();
            $sql = "SELECT * FROM categoria";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $lista = $stmt->fetchAll();
            return $lista;
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    

    public function deletarCategoria()
    {
        try {
            $conn = Conexao::conectar();
            $sql = "DELETE FROM categoria WHERE id_categoria = :id_categoria";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id_categoria', $this->id_categoria);
            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}
