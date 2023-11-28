<?php
    include_once("conexao.php");
    include_once("seguranca.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style_historico_operacoes.css">
    <title>Sistema de Chaves IFRS</title>
</head>
<body>
    <header>
        <img src="imagens/logo_campus_canoas500.png"/>
    </header>
    <div class='titulo'>
        <h1>Histórico de Operações</h1>
        <input type="search" placeholder="Digite para pesquisar" id="barra_pesquisa" onkeyup="filtrarTabela()">
    </div>
    <?php
        echo "<table id='tabela'>";
        echo "<tr><th>Nome</th><th class='pessoa'>Pessoa</th><th>Data de Retirada</th><th>Hora de Retirada</th>
        <th>Data de devolução</th><th>Hora de Devolução</th></tr>";

        $contador = 0;
        $consulta_sql = "SELECT nome, pessoa, data_retirada, hora_retirada, data_devolucao, 
        hora_devolucao FROM historico_chaves";
        $resultado_consulta = mysqli_query($conexao, $consulta_sql);
        while ($linha = mysqli_fetch_assoc($resultado_consulta)) {
            if ($contador % 2 == 0) {
                echo "<tr>";
                echo "<td class='nome cinza'>" . $linha['nome'] . "</td>";
                echo "<td class='pessoa cinza'>" . $linha['pessoa'] . "</td>";

                // Formata "data_retirada" para o padrão BR.
                $data_retirada_formatada = date('d/m/Y', strtotime($linha['data_retirada']));
        
                echo "<td class='cinza'>" . $data_retirada_formatada . "</td>";
                echo "<td class='cinza'>" . $linha['hora_retirada'] . "</td>";

                // Formata "data_devolucao" para o padrão BR.
                $data_devolucao_formatada = date('d/m/Y', strtotime($linha['data_devolucao']));

                echo "<td class='cinza'>" . $data_devolucao_formatada . "</td>";
                echo "<td class='cinza'>" . $linha['hora_devolucao'] . "</td>";
                echo "</tr>";
                $contador = $contador + 1;
            } else {
                echo "<tr>";
                echo "<td class='nome verde'>" . $linha['nome'] . "</td>";
                echo "<td class='pessoa verde'>" . $linha['pessoa'] . "</td>";

                // Formata "data_retirada" para o padrão BR.
                $data_retirada_formatada = date('d/m/Y', strtotime($linha['data_retirada']));

                echo "<td class='verde'>" . $data_retirada_formatada . "</td>";
                echo "<td class='verde'>" . $linha['hora_retirada'] . "</td>";

                // Formata "data_devolucao" para o padrão BR.
                $data_devolucao_formatada = date('d/m/Y', strtotime($linha['data_devolucao']));
                
                echo "<td class='verde'>" . $data_devolucao_formatada . "</td>";
                echo "<td class='verde'>" . $linha['hora_devolucao'] . "</td>";
                echo "</tr>";
                $contador = $contador + 1;
            }
        }

        echo "</table>";
        mysqli_close($conexao);
    ?>
    <script src="script.js"></script>
</body>
</html>