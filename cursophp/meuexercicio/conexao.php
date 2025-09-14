<?php 
    //Conexão com o banco de dados
    $host = 'Localhost';
    $user = 'root';
    $password = '';
    $database = 'cadastro';
    $conn = mysqli_connect($host, $user, $password, $database);
    // Verifica se a conexão foi bem-sucedida
    if($conn){
        //echo "Conexão bem-sucedida!";
    } else {
        die("Erro na conexão: " . mysqli_connect_error());
    }
?>