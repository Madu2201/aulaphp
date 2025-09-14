<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
        function Soma( $a, $b ) {
            $S = $a + $b;
            return $S;
        }

        $x = 11;
        $y = 15;
        $Resposta = Soma($X , $Y);

        echo "A soma é $Resposta<br>";
    ?>
</body>
</html>