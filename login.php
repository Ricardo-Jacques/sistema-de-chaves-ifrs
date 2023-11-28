<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style_login.css">
    <title>Login Sistema de Chaves</title>
</head>
<body>
    <header>
        <img src="imagens/logo_campus_canoas500.png"/>
    </header>
    <form method= "post" action="processa_login.php">       
        <h1>Faça o login</h1>
        <input type="text" name="usuario" placeholder="Informe o seu usuário..." autofocus>
        <input type="password" name="senha" placeholder="Insira a senha...">
        <input type="submit" name="entrar" value="Entrar">
    </form>
</body>
</html> 