<?php
$nome = $_POST['NOME'];
$peso = $_POST['PESO'];
$altura = $_POST['ALTURA'];
$imc = $peso/($altura * $altura);

if($imc < 18.4){
   $categoria = "Você está abaixo do peso";
} elseif( $imc > 18.4 and $imc < 24.9){
    $categoria = "Você está com o peso normal";
} elseif( $imc > 24.9 and $imc < 29.9){
    $categoria = "Você está com sobrepeso";
} elseif ($imc > 29.9 and $imc < 34.9){
    $categoria = "Você está com obesidade grau I";
} elseif ( $imc > 34.9 and $imc < 39.9){
    $categoria = "Você está com obesidade grau II";
} else {
    $categoria = "Você está com obesidade grau III";
}

echo "<br>" .$nome. "<br>";
echo "<br>" .$peso. "<br>";
echo "<br>" .$altura. "<br>";
echo "<br>" .$imc. "<br>";
echo "<br>" .$categoria. "<br>";
?>