<?php
include_once("conexao.php");

$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$consultasql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
$resultado_consulta = mysqli_query($conexao, $consultasql);

if ($resultado_consulta->num_rows == 1) {
    if (!isset($_SESSION)) {
        session_start();
    }
    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['tempo'] = time();
    header("Location: index.php");
}
