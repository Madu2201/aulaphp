<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aluno</title>
</head>
<body>
    <h1>Resultado da Avaliação</h1>
    <?php 
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $media = ($nota1 + $nota2) / 2;
        $resultado = ($media >= 5) ? 'Aprovado' : 'Reprovado';

     echo "<strong>$nome</strong>, sua média é <strong>$media</strong> e você está <strong>$resultado</strong>.";
    ?>
</body>
</html>