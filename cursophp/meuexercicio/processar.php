<?php
    if($_REQUEST["action"] == "save"){
        $FormValid = true;

        $tamanho_nome = strlen($_POST["CAMPO_NOME"]);
        if($tamanho_nome < 5 || $tamanho_nome > 64){
            echo("O campo'Nome' deve ter entre 5 a 64 caracteres." .$tamanho_nome);
            $FormValid= false;
        }

        $idade = (int)$_POST["CAMPO_IDADE"];
        if(is_nan($idade) || $idade < 4 || $idade > 120) {
            echo("o campo 'Idade' deve ser preenchido corretamente.");
            $FormValid = False; 
        }

        $email = $_POST["CAMPO_EMAIL"];
        $regex = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)[@][A-z0-9_]+([.][A-z0-9_]+)[.][A-z]{2,4}$/";
        if(preg_match($regex, $email)){
            echo("O campo 'Email' deve ser preenchido corretamente");
            $FormValid = false;
        }

        $sexo = $_POST["CAMPO_SEXO"];
        if($sexo != "M" && $sexo != "F"){
            echo("O campo 'Sexo' deve ser preenchido.");
            $FormValid = false;
        }

        $curso = $_POST["CAMPO_CURSO"];
        if($curso == "" || $curso  == "Selecione..."){
            echo("O campo 'Curso' deve ser preeenchido.");
            $FormValid = false;
        }

        $conhecimento = $_POST["CAMPO_CONHECIMENTOS"];
        if(sizeof($conhecimento) != 2){
            echo("necessario marcar 2 conhecimentos.");
            $FormValid = false;
        }

        if($FormValid)
            echo"Formulario Valido com Sucesso";
            exit();
        }
?>