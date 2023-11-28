<?php
session_start();
include_once("conexao.php");
include_once("funcoes.php");

date_default_timezone_set('America/Sao_Paulo');
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$pessoa = filter_input(INPUT_POST, 'pessoa', FILTER_SANITIZE_STRING);
$data_retirada = date('Y/m/d');
$hora_retirada = date('H:i:s');

//* Consulta SQL para saber se a chave digitada já está cadastrada. *//
$consulta_sql = "SELECT nome FROM chaves WHERE nome = '$nome'";
$resultado_consulta = mysqli_query($conexao, $consulta_sql);

//* Consulta SQL para saber se a chave está disponível. *//
$consulta2_sql = "SELECT estado FROM chaves WHERE nome= '$nome' AND estado LIKE 'Disponível'";
$resultado_consulta2 = mysqli_query($conexao, $consulta2_sql);

// 1º "if" verifica se a chave existe.
// 2º "if" verifica se a chave está em uso.
// 3º "if" verifica se o nome da pessoa é válido.
if ($resultado_consulta->num_rows > 0) {        
    if ($resultado_consulta2->num_rows > 0) {
        if (ValidarPessoa($pessoa)) {
        $sql = "UPDATE chaves SET pessoa = '$pessoa', data_retirada = '$data_retirada', hora_retirada = '$hora_retirada', 
        estado = 'Em uso' WHERE nome = '$nome'"; 
        $resultado_sql = mysqli_query($conexao, $sql);
        $msg = "Operação realizada com sucesso!";
        } else {
            $msg = "Nome da pessoa inválido!";
        }
    } else {
        $msg = "A chave requisitada está em uso no momento!";
    }
} else {
    $msg = "A chave informada não existe!";
}
echo "$msg";
?>
<meta http-equiv="refresh" content="2; URL='retira_chave.php'"/>