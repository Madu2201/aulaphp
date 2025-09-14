<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        header {
            background-color: #28a745;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        p {
            font-size: 18px;
        }
        li {
            font-size: 18px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button a {
            color: white;
            text-decoration: none;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <?php  
        $real = $_POST["num"] ?? 0;

        echo "<p>Analisando o número ". number_format($real, 3, ",", ".")." informado pelo usuário:<p>";
        
        $parte_inteira = (int)$real;
        $parte_decimal = $real - $parte_inteira;
        
        echo "<ul><li>a parte inteira é: ".number_format($parte_inteira, 0, ",", ".")."</li>";
        echo "<li>a parte decimal é: ".number_format($parte_decimal, 3, ",", ".") ."</li></ul>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>