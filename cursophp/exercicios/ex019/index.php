<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include em arquivos</title>
</head>
<body>
    <?php
        include "funcoes.php";
        echo "<h1>Testando funções</h1>";
        ola();
        mostraNome("João");
    ?>
</body>
</html>