<?php
if (!isset($_SESSION)) {
  session_start();
}
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
  header('Location: ../../login.php');
  exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuario WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row >= 1) {
  $_SESSION['usuario'] = $usuario;
  header('location: ../../painel.php');
  exit();
} else {
  $_SESSION['nao_autenticado'] = true;
  header('Location: ../../login.php');
  exit();
}
