<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorar</title>
</head>
<body>
    <?php 
    // Verifica se o número foi enviado
    $valor = isset($_GET['num']) ? $_GET['num'] : 1;
    echo "<h1>Calculando o Fatorial de $valor</h1>";

    // Calcula o fatorial
    $contador = $valor;
    $fatorial = 1;
    do {
        $fatorial *= $contador;
        $contador--;
    } while ($contador >= 1);

    echo "<h2>O fatorial de $valor é $fatorial</h2>";
    // Exibe o resultado
    ?>
    
    <button onclick="window.history.back()">Voltar</button>
</body>
</html>