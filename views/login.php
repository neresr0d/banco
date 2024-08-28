<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante Web</title>

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
        <a href="">Inicio</a>
        <a href="quem_somos.html">Quem Somos</a>
        <a href="contatos.html">Contatos</a>
        <a href="" class="alinhar">
            <img src="../imgs/star.png.png" alt="" width="30px" height="30px">
        Favoritos
    </a>
        <a href="views/login.html">Login</a>

    </nav>
<nav>
    <div class="elemento">
        
    </div>
</nav>
   

    <main id="main">
        <div class="borda_login">
            <div>
                <h1>Acesse sua conta</h1>
                <br> <br>
            </div>
            
            <div>
                
                <form action="">
                    <div class="email">
                        <label for="email" class="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
            </div>
            <br> <br>
            <div class="senha">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <div>
                <button>ENTRA</button>
                
            </div>
            
            <div class="Esqueceu_senha">
                <a href="">Esqueceu sua senha?</a>
               <div class="cadastrado">
                <div>
                    

                </div>
         <h4>Ainda não é cadastrado ?<br>
            <a href="/estante_web/banco/views/cadastro.php">Crie sua conta</a>

         </h4>

         
       
      

        </main>

   
    
</body>
</html>