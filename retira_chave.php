<?php
    include_once("seguranca.php");
    include_once("funcoes.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style_retira_chave.css" />
    <title>Formulário de Retirada</title>
</head>
<body>
    <header>
        <img src="imagens/logo_campus_canoas500.png"/>
    </header>
    <form method="post" action="processa_retira.php">
        <h1>Dados da Retirada</h1>
        <h2>Dados da Chave</h2>
        <label for="nome">Nome da Chave</label>
        <input type="text" name="nome" id="nome">
        <h2>Retirada por</h2>
        <label for="pessoa">Nome Completo</label>
        <input type="text" name="pessoa" id="pessoa">
        <input type="submit" value="Retirar" class="enviar">
    </form>
</body>
</html>