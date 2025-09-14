<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #555;
        }
        p {
            font-size: 18px;
            color: #666;
        }
        button {
            background-color: #4CAF50; /* Verde */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049; /* Verde mais escuro */
        }
        a {
            text-decoration: none;
            color: white;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Resultado Final</h1>
    <?php 
        $numero = $_GET["numero"];
        $antecessor = $numero - 1; // O antecessor é o número menos 1.
        $sucessor = $numero + 1; // O sucessor é o número mais 1.

        echo "<h2>O número escolhido foi <strong>$numero</strong></h2>"; // Exibe o número escolhido.
        echo "<p>O <em>antecessor<em> de <strong>$numero</strong> é <strong>$antecessor</strong></p>"; // Exibe o antecessor.
        echo "<p>O <em>sucessor<em> de <strong>$numero</strong> é <strong>$sucessor</strong></p>"; // Exibe o sucessor.
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>