<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRINGS</title>
</head>
<body>
    <H1>Formatos de Strings</H1>
    <?php 
        //interpolação: substituição de variáveis dentro de uma string

        //double quoted string = "Lucas";
        //single quoted string ='Lucas';  
        
        // A diferença entre aspas simples e duplas é que as aspas duplas interpretam variáveis dentro da string, enquanto as aspas simples não.

        // Exemplo em variáveis:
        $nome = "Lucas";
        echo "Meu nome é $nome";
        echo '<br><br>Meu nome é $nome';

        //Exemplos aspas simples e duplas juntas:
        $nome = "Lucas";
        $sobrenome = "Silva";
        echo "<br><br>$nome \"Minotauro\" $sobrenome";
        
        // A contrabarra (\) ou sequência de escape é usada para escapar caracteres especiais, como aspas duplas dentro de uma string entre aspas duplas. Isso permite que você inclua aspas duplas dentro da string sem que elas sejam interpretadas como o final da string.
        //Escape sequences: \n (nova linha), \t (tabulação horizontal), \\ (barra invertida), \$ (sinal de cifrão) e \u{} (Codepoint Unicode).

        //Exempo em constantes:

        const NOME = "Lucas";
        echo "<br><br>Meu nome é NOME";
        echo '<br><br>Meu nome é NOME';

        echo "<br><br>Meu nome é " . NOME; // concatenação de strings com o operador ponto (.)

        // Para constantes ou reseultado de funçôes, o PHP não faz interpolação de variáveis, então é necessário usar a concatenação com o operador ponto (.) para exibir o valor da constante ou do resultado da função.


    ?>
</body>
</html>