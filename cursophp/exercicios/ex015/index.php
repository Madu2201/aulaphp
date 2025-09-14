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
            echo "A soma de $a + $b é $S<br>";
        }
        Soma(3,4);
        Soma(8,2);
        $X = 15;
        $Y = 15;
        Soma($X , $Y);
    ?>
</body>
</html>