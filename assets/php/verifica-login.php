<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!$_SESSION['usuario']) {
    header('location: login.php');
    exit();
} else {
    header('location painel.php');
}
