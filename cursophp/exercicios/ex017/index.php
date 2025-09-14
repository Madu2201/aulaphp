<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
        // function Soma() {
        //     $p = func_get_args();
        //     $tot = func_num_args();
        //     $S = 0;
        //     for ($i = 0; $i < $tot; $i++){
        //         $S += $p[$i];
        //     }
        //     return $S;
        // }
        // $Res = Soma(3,5,2,4);
        // echo "A soma dos valores é $Res<br>";

        function Soma() {
         return array_sum(func_get_args());// Utilizando a função array_sum para simplificar    
          
         // func_get_args() retorna um array com os argumentos passados
         // array_sum() calcula a soma dos valores do array 
        }
        $Res = Soma(3, 5, 2, 4);
        echo "A soma dos valores é $Res<br>";
    ?>
</body>
</html>