<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Verifica se o número foi enviado
    $valor = isset($_GET['valor']) ? $_GET['valor'] : 1;
    echo "<h1>Tabuada de $valor</h1>";

    // Calcula a tabuada
    $contador = 1;
    do{
        echo "$valor x $contador = " . ($valor * $contador) . "<br>";
        $contador++;
    } while($contador <= 10);
    ?>
    <button onclick="window.history.back()">Voltar</button>
</body>
</html>