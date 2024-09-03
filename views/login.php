<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__cabecalho.php';
?>
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

                <form action="/estante_web/banco/controllers/login_controller.php" method="post">
                    <div class="email">
                        <label for="email_login" class="email">E-mail:</label>
                        <input type="email" id="email" name="email_login" required>
                    </div>
                    <br> <br>
                    <div class="senha">
                        <label for="senha_login">Senha:</label>
                        <input type="password" id="senha" name="senha_login" required>
                    </div>

                    <div>
                        <button type="submit">ENTRAR</button>

                    </div>

                    <div class="Esqueceu_senha">
                        <a href="senha.php">Esqueceu sua senha?</a>
                        <div class="cadastrado">
                            <div>


                            </div>
                            <h4>Ainda não é cadastrado ?<br>
                                <a href="/estante_web/banco/views/cadastro.php">Crie sua conta</a>

                            </h4>

                           






    </main>



</body>

</html>