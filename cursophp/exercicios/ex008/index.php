<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação Aluno</title>
</head>
<body>
    <form action="processar.php" method="post">
        <label for="nome">Nome Completo (ALUNO):</label><br>
        <input type="text" id="idnome" name="nome"><br><br>
        
        <label for="nota1">Nota 1:</label><br>
        <input type="number" id="idnota1" name="nota1"><br><br>
        
        <label for="nota2">Nota 2:</label><br>
        <input type="number" id="idnota2" name="nota2"><br><br>
        
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>