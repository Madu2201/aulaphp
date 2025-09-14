<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php 
        $numero = isset($_GET["num"]) ? $_GET["num"] : 1;
        echo "<h1>Tabuada do $numero</h1>";
        for ($c = 1; $c <= 10 ; $c++){
            $resultado = $numero * $c;
            echo "$numero X $c = $resultado <br>";
        }
    ?>
    <button onclick="window.history.back()">Voltar</button>
</body>
</html>