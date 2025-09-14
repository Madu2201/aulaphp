<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <?php 
    $inicio = $_POST['ini'];
    $fim = $_POST['fim'];
    $passo = $_POST['passo'];
    
    // if ($inicio < $fim) {
    //     for ($i = $inicio; $i <= $fim; $i += $passo) {
    //         echo "$i ";
    //     }
    // } else {
    //     for ($i = $inicio; $i >= $fim; $i -= $passo) {
    //         echo "$i ";
    //     }
    // }
    // 
    
    if ($inicio < $fim) {
        while ($inicio <= $fim) {
            echo "$inicio ";
            $inicio += $passo;
        }
    } else {
        while ($inicio >= $fim) {
            echo "$inicio ";
            $inicio -= $passo;
        }
    }
    ?>
</body>
</html>