<?php

session_start();
class Auth {

    static function login($email, $senha) {
        try {
            $conn = Conexao::conectar();
            $sql = 'SELECT * FROM usuario WHERE email = :email';
    
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $email);
    
            $stmt->execute();
    
            $resultado = $stmt->fetch();

            if(!empty($resultado) && password_verify($senha, $resultado['senha'])) {
                $_SESSION['id_doador'] = $resultado['id_usuario'];

                header('Location: index.php');
                exit();
            }
            
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    static function logout() {
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit();
    }

    static function estarLogado() {
        if(isset($_SESSION['nome_usuario'])) {
            return true;
        } else {
            return false;
        }
    }
}

?>