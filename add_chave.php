<?php
include_once("seguranca.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style_add_chave.css">
    <title>Formulário de adição</title>
</head>
<body>
    <header>
        <img src="imagens/logo_campus_canoas500.png"/>
    </header>
    <form method="post" action="processa_chave.php">
        <h1>Cadastrar Nova Chave</h1>
        <h2>Dados da Chave</h2>
        <label for="nome">Nome da Chave</label>
        <input type="text" name="nome" id="nome"> 
        <input type="submit" value="Cadastrar" class="enviar">
    </form>
</body>
</html>
