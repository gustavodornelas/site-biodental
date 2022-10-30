<?php
if (!isset($_SESSION)) {
    session_start();
}

include('verifica-login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="./assets/img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav-bar.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Biodental - Painel Administrativo</title>
</head>
<body>
    <header>
        <nav class="border-botton">
            <a href="#">
                <div class="menu-logo">
                        <div class="logo"><img src="./assets/img/logo.png" class="logo"></div>
                        <div class="logo-text">BIO</div>
                        <div class="logo-text logo-text-blue">DENTAL</div>
                </div>
            </a>
            <ul class="nav-list">
                <li><a href="#">PÁGINA INICIAL</a></li>
                <li><a href="#">PACIENTES</a></li>
                <li><a href="#">CONSULTAS</a></li>
                <li><a href="#"><?php echo strtoupper($_SESSION['usuario']) ?></a></li>
                <li><a href="./assets/php/logout-script.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        
    </main>
    <footer class="border-top">
        ©2022, Biodental – Todos os direitos reservados. Desenvolvido por Gustavo Dornelas®
    </footer>

    <!--Scripts-->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/nav-bar.js"></script>
</body>
</html>