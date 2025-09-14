<?php
//Validação de nome
$nomeUsuario = '';
$mensagem = '';
function alfabetico($texto){
    if (preg_match('/[A-Z]/', $texto) or preg_match('/[a-z]/', $texto)){
        return true;
    }else{
        return false;
    }
}
function texto($texto, int $min = 0, int $max = 80): bool
{
    $comprimento = strlen($texto);
    return ($comprimento >= $min and $comprimento <= $max and alfabetico($texto));
}
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nomeUsuario = $_POST['NOME'];
        $valido = texto($nomeUsuario, 3, 80);
        if($valido){
            $mensagem = "O nome é válido";
            echo $mensagem;
        }else{
            $mensagem = "O nome precisa ser entre 3-80 caracteres alfabéticos";
            echo $mensagem;
        }
    }
?>