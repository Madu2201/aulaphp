<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");// Timezone do Brasil que é GMT-3

        echo "hoje é dia " .date("d/m/Y"). "<br><br>";// Formata a data atual

        echo "E a hora atual é " .date("H:i:s");// Formata a hora atual do seu servidor que é Timezone CEST
    ?>
</body>
</html>