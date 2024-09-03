<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/usuario.php';

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

}

$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
$foto_perfil = $_POST['foto_perfil'];
$senha = password_hash($senha, PASSWORD_DEFAULT);

$usuario = new Usuario();
$usuario->nome_usuario = $nome;
$usuario->email = $email;
$usuario->senha = $senha;
$usuario->foto_perfil = $_FILES;
$usuario->cadastrarUsuario();

header('Location: /estante_web/banco/views/login.php');

/* $nome = $_POST ['nome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
$foto_perfil = $_POST['foto_perfil'];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$usuario = new Usuario();
$usuario->nome_usuario = $nome;
$usuario->email = $email;
$usuario->senha = $senha;
$usuario->foto_perfil = $foto_perfil;

$id_usuario = $usuario->cadastrarUsuario();
//$id_usuario = $usuario->atualizar();

header('Location: /estante_web/banco/views/login.php');
exit();
 */