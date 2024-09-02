<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';

class Usuario
{
    public $id_usuario;
    public $nome_usuario;
    //public $telefone;
    public $email;
    public $senha;
    public $foto_perfil;


    /* public function __construction($id = false){
        if($id);{
           $this->id_usuario = $id;
          $this->carregarUsuario();
        }
    }

    public function getEmail(){
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

    public function cadastrarUsuario()
    {
        
        try {
            $conn = Conexao::conectar();
           
            $sql = 'INSERT INTO usuarios (nome_usuario, telefone, email, senha, foto_perfil) VALUES (:nome_usuario, :telefone, :email, :senha, :foto_perfil)';
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_usuario', $this->nome_usuario);
            //$stmt->bindValue(':telefone', $this->telefone);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->bindValue(':foto_perfil', $this->foto_perfil);

            $stmt->execute();

            return $conn->lastInsertId();
        } catch (PDOException $erro) { 
            // echo "<pre>";
            // var_dump($erro);
            // echo "</pre>";
            // exit();
            echo $erro->getMessage();
        }
    }

        /* public function carregarUsuario(){ 
           $conn = Conexao::conectar();
           $sql = "SELECT * FROM usuarioS WHERE id_usuario = :id";
           $stmt = $conn->prepare($sql);

           $stmt->bindValue(':id', $this->id_usuario);

           $stmt->execute();
           $resultado = $stmt->fetch();
           

          $this->setEmail($resultado['email']);
          $this->setSenha($resultado['senha']);
        }  */

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
    //public static function atualizar(){
        //try{
            //$conn = Conexao::conectar();
            //$sql = "UPDATE usuarios SET email = :email, senha = :senha WHERE id_usuario = :id";
            //$stmt = $conn->prepare($sql);
            //$stmt->bindValue(':email', $this->getEmail());
            //$stmt->bindValue(':senha', $this->getSenha());
            //$stmt->bindValue(':id', $this->getId());
            //$stmt->execute();


        //}catch(PDOException $erro){
            //echo $erro->getMessage();
        //}
    }

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
        
    
//}
