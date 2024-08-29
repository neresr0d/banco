<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/usuario.php';


class Usuario{
    public $id_usuario;
    public $nome_usuario;
    public $telefone;
    public $email;
    public $senha; 
    
    
    //public function __construction($id = false){
    //    if($id);{
     //       $this->id_usuario = $id;
    //      $this->carregarUsuario();
    //    }
    //}

    public function cadastrarUsuario(){
        try{$conn = Conexao::conectar();
            $sql = 'INSERT INTO usuario (nome_usuario, telefone, email, senha) VALUES (:nome_usuario, :telefone, :email, :senha)';

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_usuario', $this->nome_usuario);
            $stmt->bindValue(':telefone', $this->telefone);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);

            $stmt->Execute();

            return $conn->lastInsertId();


    } catch (PDOException $erro){
        echo $erro->getMessage();

    }

    //public function carregarUsuario(){ --
     //   $conn = Conexao::conectar();
     //   $sql = "SELECT * FROM usuario WHERE id_usuario = :id";
     //   $stmt = $conn->prepare($sql);

      //  $stmt = 
    //} 
}

}