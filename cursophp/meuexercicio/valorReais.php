<?php
    $dolares = $_POST['DOLARES'];
    $cotacao = $_POST['COTACAO'];
    $valorreais = $dolares * $cotacao;

    echo "Quantidade de dolares: ". "R$".$dolares. '</br>';
    echo "Cotação dos dolares: ". "R$".$cotacao. '</br>';
    echo "Valores em Reais: ". "R$". $valorreais. '</br>';
?>