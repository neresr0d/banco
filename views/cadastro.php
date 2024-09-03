<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/views/__cabecalho.php';
?>

    <main id="main">
        <div class="borda_cadastro">

            <h1>Crie sua conta</h1>


            <form action="/estante_web/banco/controllers/cadastrar_usuario_controller.php" method="POST" enctype="multipart/form-data">

                <div class="perfil">
                    <label for="file" class="file">Foto do perfil</label>
                    <img src="/estante_web/banco/imgs/upload.png" alt="Imagem" class="img-perfil">
                    <input type="file" id="fileInput" name="foto_perfil">

                </div>

                <div class="cad">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                </div>
                <br>
                <!--<div class="cad">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>

                </div>-->
                

                <div class="cad">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <br>

                <div class="cad">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div>
                    <button type="submit" value="CADASTRAR">Criar Conta</button>
                </div>
                <br>
                <br>
                <br>

                <div class="cad-rodape">
                    <h4>Já é cadastrado?</h4>
                    <a href="/estante_web/banco/views/login.php">
                        <h4>Acesse sua conta</h4>
                    </a>
                   
                </div>

                <p class="h55">
                    Ao seguir com o cadastro, concordo com os <br>Termos de uso e Politicas de privacidade </p>
                

            </form>
        </div>
    </main>


</body>

</html>