<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        h2 {
            color: #2980b9;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        button a {
            color: white;
            text-decoration: none;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Conversor de Moedas V1.0</h1>
    <?php 

    $real = $_GET["real"];
    $cotacao = 5.87; // Cotação do dólar
    $dolar = $real / $cotacao;

    //numfmt_create() cria um formatador de número para o padrão brasileiro
    //Internacionalização de números e moedas
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "<h2>Seus " .numfmt_format_currency($padrao , $real , "BRL"). " equivalem a " .numfmt_format_currency($padrao , $dolar , "USD"). "</h2>";

    echo "<p><strong>*Cotação fixa de $cotacao</strong> informada diretamente no código.</p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>