<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';

class Usuario
{
    public $id_usuario;
    public $nome_usuario;
    public $email;
    public $senha;
    public $foto_perfil;


    public function __construction($id = false)
    {
        if ($id); {
            $this->id_usuario = $id;
            $this->carregarUsuario();
        }
    }


    public function cadastrarUsuario()
    {

        try {
            $conn = Conexao::conectar();

            $sql = "INSERT INTO usuario (nome_usuario, email, senha, foto_perfil) VALUES (:nome_usuario, :email, :senha, :foto_perfil)";
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_usuario', $this->nome_usuario);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->bindValue(':foto_perfil', $this->foto_perfil);

            $stmt->execute();

            return $conn->lastInsertId();
        } catch (PDOException $erro) {
             /* echo "<pre>";
             var_dump($erro);
             echo "</pre>";
             exit(); */
            echo $erro->getMessage();
        }
    }

    public function carregarUsuario()
    {
        try {

            $conn = Conexao::conectar();
            $sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':id', $this->id_usuario);

            $stmt->execute();
            $resultado = $stmt->fetch();


            $this->nome_usuario = $resultado['nome'];
            $this->email = $resultado['email'];
            $this->senha = $resultado['senha'];
            $this->foto_perfil = $resultado['foto_perfil'];
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function atualizarUsuario(){
        try{
            $conn = Conexao::conectar();
            $sql = "UPDATE usuario SET email = :email, senha = :senha, foto_perfil = :foto_perfil WHERE id_usuario = :id_usuario";
            $stmt = $conn->prepare($sql);

           
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->bindValue(':foto_perfil', $this->foto_perfil);
            $stmt->bindValue(':id_usuario', $this->id_usuario);
            $stmt->execute();


        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
}
}



/*public function getEmail(){
    return $this->email;
}

public function setEmail($email){
    $this->email = $email;

}

public function getSenha(){
    return $this->senha;
}

public function setSenha($senha){
    $this->email = $senha;

}

public function getId(){
    return $this->id_usuario;
} */
         /* public static function listar(){
            try{
                $conn = Conexao::conectar();
                $sql = "SELECT * FROM usuarios";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $lista = $stmt->fetchAll();
                return $lista;

            }
            catch(PDOException $erro){
                echo $erro->getMessage();
            }

            } 
 */
    
    //}

    //public static function deletar(){
        //try{
            //$conn = Conexao::conectar();
            //$sql = "DELETE FROM usuarios WHERE id_usuario = :id";
            //$stmt = $conn->prepare($sql);
            //$stmt->bindValue(':id', $this->getId());
            //$stmt->execute();

        //}catch(PDOException $erro){
           // echo $erro->getMessage();
        //}
    //}
        
    
//