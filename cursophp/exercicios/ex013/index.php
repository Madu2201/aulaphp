<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição FOR</title>
</head>
<body>
    <?php 
    // Estrutura de repetição FOR
    for ($c = 1; $c <=10; $c++) {
        echo "$c ";
    }
    echo "<br><br>";
    for ($c = 10; $c >= 1; $c--) {
        echo "$c ";
    }
    echo "<br><br>";
    for($c = 0; $c <= 10; $c += 2){
        echo"$c ";
    }
    ?>
</body>
</html>