<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
    <form action="ParouImpar.php" method="get">
        <label for="num">Número:</label>
        <select name="num">
            <?php 
                for($c = 1; $c <= 10; $c++){
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>