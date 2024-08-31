<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';

class Categoria {
    
    public $id_categoria;
    public $nome;
 

    public function cadastrarCategoria() {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO categoria (id_categoria, nome) VALUES (:id_categoria, :nome)';
            
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':id_categoria',$this->id_categoria);
            $stmt->bindValue(':nome', $this->nome);
          

            $stmt->execute();

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    } 


}