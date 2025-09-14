<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <form action="processar.php" method="post">
        <label for="ini">Início:</label>
        <input type="number" name="ini" id="ini" required><br>
        <label for="fim">Fim:</label>
        <input type="number" name="fim" id="fim" required><br>
        <label for="passo">Passo:</label>
        <input type="number" name="passo" id="passo" required><br>
        <input type="submit" value="Contar">
    </form>
</body>
</html>