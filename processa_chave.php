<?php
session_start();
include_once("conexao.php");
include_once("funcoes.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

if (ValidarNome($nome)) {
    $sql = "INSERT INTO chaves (nome) VALUES ('$nome')";
    $resultado_sql = mysqli_query($conexao, $sql);
    $msg = "Operação realizada com sucesso!";
} else {
    $msg = "Nome inválido!";
}
echo "$msg";
?>
<meta http-equiv="refresh" content="2; URL='add_chave.php'"/>