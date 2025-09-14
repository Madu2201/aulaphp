<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <?php
        $contador = 1;
        while ($contador <= 5) {
            echo "<label for='V1'>Valor $contador:</label>
            <input type='number' name='V1' id='V1' required><br>";
            $contador++;
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>