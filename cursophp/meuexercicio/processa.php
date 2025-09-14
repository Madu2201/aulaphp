<?php 
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $nome_materno = $_POST['nome_materno'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    md5($senha); // Criptografa a senha usando MD5

    // Prepara a consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO pessoas (nome, nome_materno, data_nascimento, sexo, cpf, login, senha) 
            VALUES ('$nome', '$nome_materno', '$data_nascimento', '$sexo', '$cpf', '$login', '$senha')";
    // Executa a consulta
    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }
    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
} else {
    echo "Método de requisição inválido.";
}
?>