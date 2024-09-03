
 


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante Web</title>
    <link rel="shortcut icon" href="/estante_web/banco/imgs/WhatsApp Image 2024-06-27 at 19.48.04.jpg" type="image/x-icon">

    <link rel="stylesheet" href="/estante_web/banco/css/style.css">
</head>
<body>
    <header>
    
        <div class="logo-busca">
            
            <h1>Estante Web</h1>

            <form action="">
                <input type="search" name="busca" id="busca">
            </form>
        </div>
        
       
    </header>

    <nav>
        <a href="/estante_web/banco/index.php">Inicio</a>
        <a href="/estante_web/banco/views/quem_somos.php">Quem Somos</a>
        <a href="/estante_web/banco/views/contatos.php">Contatos</a>
        <!-- ?php if(Auth::estarLogado()):?>-->
        <a href="/estante_web/banco/views/favoritos.php" class="alinhar">
            <img src="/estante_web/banco/imgs/star.png.png" alt="" width="30px" height="30px">
        Favoritos
    </a>
        <a href="/estante_web/banco/views/login.php" class="alinhar"><img src="/estante_web/banco/imgs/user-solid.svg" alt="" height="30px" width="30px">Olá, <!--<span>?=$_SESSION['nome_usuario']?--></span></a>
        <!--?php else : ?>-->
        <a href="/estante_web/banco/views/login.php">Login</a>
      <!--?php endif; ?>-->

    </nav>