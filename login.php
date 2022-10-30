<?php
if (!isset($_SESSION)) {
  session_start();
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
                    <div class="login-item"><img src="./assets/img/logo.png" alt="" srcset=""></div>
                    <div class="login-item">
                        <div class="logo-text">BIO</div>
                        <div class="logo-text logo-text-blue">DENTAL</div>
                    </div>

                    <div class="login-item">
                        <?php
                        if (isset($_SESSION['nao_autenticado'])) :
                        ?>
                            <div class="notificacao">
                                <p>ERRO: Usuário ou senha inválidos.</p>
                            </div>
                        <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>
                    </div>

                    <div class="login-item"><input type="text" name="usuario" id="usuario" placeholder="Login"></div>
                    <div class="login-item"><input type="password" name="senha" id="senha" placeholder="Senha"></div>
                    <div class="login-item"><input type="submit" value="entrar" id="entrar" name="entrar"></div>
                    
                </form>
            </div>
        </div>
    </body>

    </html>
</body>

</html>