<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/usuario.php';

session_start();


class Auth {

    public static function login($email, $senha) {
        
            $conn = Conexao::conectar();
            $sql = 'SELECT * FROM usuario WHERE email = :email';
    
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $email);
    
            $stmt->execute();

    
            $usuario = $stmt->fetch();


            if($usuario && password_verify($senha, $usuario['senha'])) {
                
                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
                $_SESSION['email_usuario'] = $usuario['email_usuario'];


                header('Location: /estante_web/banco/index.php');
                exit();
            } else{
                header('Location: /estante_web/banco/views/login.php');
                exit();
            }
            
        } 
        
    
    public static function estarLogado() {
        return isset ($_SESSION['id_usuario']);
    }

    public static function logout() {
        session_unset();
        session_destroy();
        header('Location: /estante_web/banco/views/login.php');
        exit();
    }

    
}

?>