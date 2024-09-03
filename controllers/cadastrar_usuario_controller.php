<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/usuario.php';

$nome = $_POST ['nome'];
$telefone = $_POST ['telefone'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
//$foto_perfil = $_POST['foto_perfil'];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$usuario = new Usuario();
$usuario->nome_usuario = $nome;
$usuario->telefone = $telefone;
//$usuario->setEmail($email);
$usuario->email = $email;
$usuario->senha = $senha;
$usuario->foto_perfil = $foto_perfil;

$id_usuario = $usuario->cadastrarUsuario();
//$id_usuario = $usuario->atualizar();

header('Location: /estante_web/banco/views/login.php');
exit();
