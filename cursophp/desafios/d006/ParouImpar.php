<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par ou Impar</title>
</head>
<body>
    <?php 
        $n = isset($_GET['num']) ? $_GET['num']: 0;
        if($n % 2 == 0){
            echo "<h1>O número $n é Par</h1>";
        } else {
            echo "<h1>O número $n é Impar</h1>";
        }
    ?>
</body>
</html>