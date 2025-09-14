<pre><!-- Para ver a estrutura em forma de código, um embaxo do outro.-->
    <?php

        $inicio = date("m-d-Y", strtotime("-7 days"));// Data de 7 dias atrás
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';// URL da API do Banco Central do Brasil
    
    
        $dados = json_decode(file_get_contents($url), true);// Converte o JSON em um array associativo
    
        //var_dump($dados);// Exibe o conteúdo do array associativo

        $cotacao = $dados["value"][0]["cotacaoCompra"];// Acessa o valor da cotação do dólar

        echo "A cotação do dólar é: R$ " . $cotacao . "<br>";// Exibe a cotação do dólar com formatação em reais
    ?>
</pre>
