<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro script em PHP</title>
</head>
<body>
    <?php
        echo "<h3 align='center'>PRIMEIRO SCRIPT EM PHP</h3>";
        $linguagem= "PHP"; // String
        $tipo="Dinâmica"; // String
        $ano= 2023; // int
        $versao= 8; // double

        echo "<strong> linguagem </strong>" . $linguagem;
        echo "<br><strong> tipo </strong>" . $tipo;
        echo "<br><strong> ano </strong>" . $ano;
        echo "<br><strong> versão </strong>" . $versao;
    ?>
</body>
</html>