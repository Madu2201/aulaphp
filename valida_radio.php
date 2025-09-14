<?php
//a função isset do PHP é usada para verificar se

if(isset($_POST['CAMPO_SEXO'])){
    $genero = $_POST['CAMPO_SEXO'];
    if (($genero == "M") or ($genero == "F") or ($genero == "O")){
        echo "O genero é válido";
    } else{
        echo "Escolha um genero";
    }
}

?>