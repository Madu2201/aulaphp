<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores - Array</title>
</head>
<body>
    <pre>
        <table>
        <?php
            $n = array(3, 5, 8, 2);
            $n[] = 7; // Adiciona o valor 7 ao final do array
            $n[0] = 1; // Substitui o primeiro elemento por 1
            print_r($n);// Para testes

            echo"<br>";

            $c = range(5,20,5); // Cria um array com valores de 5 a 20, com passo de 5
            print_r($c);// Para testes

            echo"<br>";

            $d = range(5,20,2); // Cria um array com valores de 5 a 20, com passo de 2
            print_r($d);// Para testes

            echo"<br>";

            // Exibindo os valores do array $d
            foreach ($d as $valor) {
                echo "$valor ";
            }
        ?>
    </pre>
</body>
</html>