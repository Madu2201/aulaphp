<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP RETROALIMENTADO</title>
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
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #444;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #resultado h2 {
            color: #007BFF;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        #resultado p {
            font-size: 1.2em;
            color: #333;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        #resultado {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #e9ecef;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        //Capturando os dados do formulário retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_GET">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?php echo $valor1; ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?php echo $valor2; ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma dos valores $valor1 e $valor2 <strong>é igual a: $soma</strong> </p>";
        ?>
    </section>
</body>
</html>