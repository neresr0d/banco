
<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/auth/auth.php';

if(Auth::estarLogado()){
    Auth::logout();

}else{
    header('Location: /estante_web/banco/views/login.php');
}





/* <!-- ?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/auth/auth.php';

Auth::logout();

? --> */