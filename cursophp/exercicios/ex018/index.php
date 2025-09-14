<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem por Valor e Referência</title>
</head>
<body>
    <h1>Passagem por Valor</h1>
    <?php
        function teste ($x){
            $x += 2;
            echo "O valor de x é $x <br>";
        }
        $a = 3;
        teste($a);
        echo "O valor de a é $a <br>";// aqui o valor de a não é alterado
    ?>

    <h1>Passagem por Referência</h1>
    <?php 
        function teste2 (&$x){
            $x += 2;
            echo "O valor de x é $x <br>";
        }
        $a = 3;
        teste2($a);
        echo "O valor de a é $a <br>";// aqui o valor de a é alterado
    ?>
</body>
</html>