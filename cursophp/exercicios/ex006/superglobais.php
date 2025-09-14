<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007BFF;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 5px;
        }
        pre {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <main>
        <pre>
            <?php 
                // Exibe dados enviados via URL (método GET)
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                // Exibe dados enviados via formulário (método POST)
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                // Combina dados de GET e POST em um único array
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                // Exibe cookies armazenados no navegador do cliente
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                // Exibe dados de sessão armazenados no servidor
                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";
                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                // Exibe variáveis de ambiente do servidor ou sistema operacional
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);

                // Exibe informações sobre o servidor e a requisição atual
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                // Exibe todas as variáveis globais disponíveis no script
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);  
            ?>
        </pre>
    </main>
</body>
</html>