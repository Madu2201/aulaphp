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
    <h1>Conversor de Moedas V2.0</h1>
    <?php 

    // Cotação do dólar em tempo real por meio da API do Banco Central do Brasil
    $inicio = date("m-d-Y", strtotime("-7 days"));// Data de 7 dias atrás
    $fim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';// URL da API do Banco Central do Brasil


    $dados = json_decode(file_get_contents($url), true);// Converte o JSON em um array associativo

    $cotacao = $dados["value"][0]["cotacaoCompra"];// Acessa o valor da cotação do dólar

    $real = $_GET["real"];
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