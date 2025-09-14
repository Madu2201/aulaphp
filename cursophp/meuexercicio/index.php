<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="processa.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Nome Materno:</label>
        <input type="text" id="nome_materno" name="nome_materno" required><br><br>

        <label for="data_nascimento">Data de Nascimento: </label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <label for="sexo">Sexo: </label>
        <select id="sexo" name="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>

        <br><br>
        <label for="cpf">CPF: </label>
        <input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" required><br><br>

        <label for="login">Login: </label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>