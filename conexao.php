<?php
define('HOST', 'localhost');
define('USER', 'gustavo');
define('PASSWORD', 'P@ssw0rd');
define('DATABASE', 'biodental');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die ('Não foi possivel conectar!');