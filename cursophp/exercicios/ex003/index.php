<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Testes de Tipos Primitivos</h1>
    <?php 
        //0x = Hexadecimal 0b = Binário 0o = Octal
        // Tipos primitivos em PHP
        $nome = "Lucas"; // string
        $idade = 20; // int ou integer
        $altura = 1.75; // float ou double
        $casado = false; // bool ou boolean (True = 1 e False = 0)

        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        echo "Altura: $altura <br>";
        echo "Casado: $casado <br>";

        var_dump($idade); // Mostra o tipo da variável e o valor dela

        $num = (integer) 3e2; // 3 * 10^2 = 300 é uma conversão de float para int que se chamar coercão

        echo "<br>O número é: $num <br>"; // Mostra o valor da variável
    ?>
</body>
</html>