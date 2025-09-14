<?php
//formulario: dd/mm/aaaa
// mysql: aaaa/mm/dd

//criar regex para data e fazer a validação para verificar se
// digitou a data no formato correto

$data_nasc = $_POST['DATE']; // 25/12/2025
$result = explode('/', $data_nasc);

$dia = $result[0];
$mes = $result[1];
$ano = $result[2];
$data_nasc = $ano. '-'. $mes. '-'. $dia; // 2025-12-25
echo $data_nasc;
?>