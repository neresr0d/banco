<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/auth/auth.php';

$email_login = $_POST['email_login'];
$senha_login = $_POST['senha_login'];

Auth::login($email_login, $senha_login);




header('Location: /estante_web/banco/index.php');
exit();?>

<?php 
if(isset($_COOKIE['aviso'])):?>
    <h1><?= $_COOKIE['aviso']?></h1>
    <?php
        setcookie('aviso', '', time() + 3600, '/estante_web/');
    ?>
<?php endif;?>
?>