<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatório</title>
    <style>
        body {
            text-align: center;
            margin-top: 50px;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Gere números aleatórios!</h1>
    <?php 
        $numero = mt_rand(0, 100); // Gera um número aleatório entre 1 e 100

        echo "Gerando número aleatório entre <strong>0</strong> e <strong>100</strong><br>";

        echo "O número gerado foi: <strong>$numero</strong><br>";
    ?>
    <button onclick="javascript:document.location.reload()">Gerar outro</button>
</body>
</html>