<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    die("Você precisa estar logado para acessar esta página! <p><a href='http://localhost/sistema-de-chaves-ifrs/login.php'>Tela de login</a></p>");
}

// Encerra a sessão após 2 horas de inatividade.
if (isset($_SESSION['tempo']) && (time() - $_SESSION['tempo']) > 7200) {
    session_unset();
    session_destroy();
}