<?php

    Require "cadastro.php";
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirma_senha = $_POST["confirmaSenha"];
    $sexo = $_POST["sexo"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    session_start();
    
    if ($senha != $confirma_senha) {    
        $erro = "As senhas não são as mesmas";        
        $_SESSION["erro"] = $erro;
        header("Location:cadastroview.php");
        exit();
    } 

    else{

        if (fazercadastro($nome, $cpf, $email, $senha, $confirma_senha, $sexo, $telefone, $cidade, $endereco, $bairro)) {
            //session_unset();
            header("Location: ../login/loginview.php");
            exit();
        } else {
            $erro = "E-mail indisponível";        
            $_SESSION["erro"] = $erro;
            header("Location: cadastroview.php");
            exit();
        }

        
    }     
       
    
?>
