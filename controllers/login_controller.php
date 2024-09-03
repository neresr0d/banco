<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/auth/auth.php';

if(filter_var($_POST['email_login'], FILTER_VALIDATE_EMAIL)){
    $email = filter_var($_POST['email_login'], FILTER_SANITIZE_EMAIL);

}

$senha = $_POST['senha_login'];




Auth::login($email, $senha);


header('Location: /estante_web/banco/views/login.php');



















