<?php
session_start();
include_once("conexao.php");

date_default_timezone_set('America/Sao_Paulo');
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data_devolucao = date('Y/m/d');
$hora_devolucao = date('H:i:s');

//* Consulta SQL para saber se a chave digitada já está cadastrada. *//
$consulta_sql = "SELECT nome FROM chaves WHERE nome = '$nome'";
$resultado_consulta = mysqli_query($conexao, $consulta_sql);

/* Consulta SQL para saber se a chave está sendo utilizada. */
$consulta2_sql = "SELECT estado FROM chaves WHERE nome = '$nome' AND estado LIKE 'Em uso'";
$resultado_consulta2 = mysqli_query($conexao, $consulta2_sql);

// 1º "if" verifica se a chave existe.
// 2º "if" verifica se a chave está sendo utilizada.
if ($resultado_consulta->num_rows > 0) {
    if ($resultado_consulta2->num_rows > 0) {
        $sql = "UPDATE chaves SET data_devolucao = '$data_devolucao', hora_devolucao = '$hora_devolucao', estado = 'Disponível' WHERE nome = '$nome'";
        $resultado_sql = mysqli_query($conexao, $sql);
        // Manda todas as informações sobre a chave para a tabela onde serão armazenados os históricos.
        $sql2 = "INSERT INTO historico_chaves (nome, pessoa, data_retirada, hora_retirada, data_devolucao, 
        hora_devolucao) SELECT nome, pessoa, data_retirada, hora_retirada, data_devolucao, 
        hora_devolucao FROM chaves WHERE nome = '$nome'";
        $resultado_sql2 = mysqli_query($conexao, $sql2);
        $msg = "Operação realizada com sucesso!";
        } else {
            $msg = "A chave requisitada não está sendo utilizada!";
        }
} else {
    $msg = "Chave não cadastrada!";
}   
echo "$msg";
?>
<meta http-equiv="refresh" content="2; URL='devolve_chave.php'"/>