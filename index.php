<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__cabecalho.php';



?>

<?php if(isset($_COOKIE['aviso'])):?>
        <h1><?= $_COOKIE['aviso']?></h1>
        <?php
            setcookie('aviso', '', time() - 3600, '/estante_web/');
        ?>
    <?php endif;?>
    
   

    <main id="index">

    </main>

    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__rodape.php';
    ?>

    