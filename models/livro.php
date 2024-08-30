<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';

class Livro {
    public $id_livro;
    public $nome_livro;
    public $autor; 
    public $descricao_livro;
    public $ano_lancamento;
    public $foto_livro;

    public function cadastrarLivro()
    {
        try{
          $conn = Conexao::conectar(); 

          $sql = 'INSERT INTO livros (nome_livro, autor, descricao_livro, ano_lancamento, foto_livro) VALUES (:nome_livro, :autor, :descricao_livro, :ano_lancamento, :foto_livro)';

          $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_livro', $this->nome_livro);
            $stmt->bindValue(':autor', $this->autor);
            $stmt->bindValue(':descricao_livro', $this->descricao_livro);
            $stmt->bindValue(':ano_lancamento', $this->ano_lancamento);
            $stmt->bindValue(':foto_livro', $this->foto_livro);

            $stmt->execute();
        } catch(PDOException $erro) {
            echo $erro->getMessage();
        }

    }
};