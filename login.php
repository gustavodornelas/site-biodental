<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['usuario']) != null) {
    header("location: painel.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./assets/img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodental - Login</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <html>

    <head>
        <title> Login de Usuário </title>
    </head>

    <body>
        <div class="content">
            <div class="apresentacao-conteiner">

            </div>
            <div class="login-conteiner">
                <form method="POST" action="./assets/php/login-script.php">
                    <a href="index.html">
                        <div class="login-head">
                            <img src="./assets/img/logo.png" alt="" srcset="">
                            <div class="logo-text">BIO</div>
                            <div class="logo-text logo-text-blue">DENTAL</div>
                        </div>
                    </a>

                    <div class="login-item">
                        <?php
                        if (isset($_SESSION['nao_autenticado'])) :
                        ?>
                            <div class="notificacao border-botton">
                                <h2>ERRO: Usuário ou senha inválidos.</h2>
                            </div>
                        <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>
                    </div>

                    <div class="login-item">
                        <input type="text" name="usuario" id="usuario" required>
                        <span>Usuário</span>
                        <i></i>
                    </div>
                    <div class="login-item">
                        <input type="password" name="senha" id="senha" required>
                        <span>Senha</span>
                        <i></i>
                    </div>
                    <div class="login-item">
                        <button type="submit" id="entrar" name="entrar">ENTRAR</button>
                    </div>

                </form>
            </div>
        </div>
    </body>

    </html>
</body>

</html>