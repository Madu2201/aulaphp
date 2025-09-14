<?php
function calculo_imc($peso,$altura){
  GLOBAL $categoria;
  $imc = $peso/($altura*$altura);
   if ($imc < 18.9){
    $categoria = "Abaixo do peso";
   }elseif($imc >= 18.5 and $imc < 24.9){
    $categoria = "Peso normal";
   }elseif($imc >= 25.0 and $imc < 29.9){
    $categoria =  "Sobrepeso";
   }elseif($imc >= 30.0 and $imc < 34.9){
    $categoria = "Obesidade Grau I";
   }elseif($imc >=35.0 and $imc < 39.9){
    $categoria = "Obesidade Grau II";
   }elseif($imc > 40){
    $categoria = "Obesidade GRau III";
   }
   return $imc;
}
$nome = $_POST['nome'];
$peso= $_POST['peso'];
$altura = $_POST['altura'];
$imc = calculo_imc($peso, $altura);
echo "Nome:". $nome."<br>";
echo "Peso:". $peso."kg". "<br>";
echo "Altura:". $altura. "cm". "<br>";
echo "IMC:". $categoria. "<br>";
?>