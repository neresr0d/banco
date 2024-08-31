<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';

class LivroCategoria {
    public $livro_categoria_id;
    public $id_livro;
    public $id_categoria;
 

    public function cadastrarLivroCategoria() {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO livro_categoria (id_livro, id_categoria) VALUES (:id_livro, :id_categoria)';
            
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':id_livro',$this->id_livro);
            $stmt->bindValue(':id_categoria', $this->id_categoria);
          

            $stmt->execute();

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    } 


}