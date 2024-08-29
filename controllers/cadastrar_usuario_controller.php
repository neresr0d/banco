<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/usuario.php';

$nome = $_POST ['nome'];
$telefone = $_POST ['telefone'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
$senha = password_hash($senha, PASSWORD_DEFAULT);

$usuario = new Usuario();
$usuario->nome_usuario = $nome;
$usuario->telefone = $telefone;
$usuario->email = $email;
$usuario->senha = $senha;

$id_usuario = $usuario->cadastrarUsuario();

header('Location: /estante_web/banco/views/login.php');
exit();
