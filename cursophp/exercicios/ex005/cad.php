<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        // var_dump($_REQUEST) Exibe tanto os dados do $_GET quanto do $_POST quanto dos $_COOKIE.

        $nome = $_GET["nome"] ?? "sem nome"; // Se não existir o valor, atribui "sem nome"
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; // Se não existir o valor, atribui "sem sobrenome"

        echo "<p>Olá <strong>$nome $sobrenome</strong>, seja bem-vindo!</p>";

        ?>

        <a href="index.html">Voltar para página anterior</a>
    </main>
</body>
</html>