<?php

    Require "cadastro.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmaSenha = $_POST["confirmaSenha"];
    $sexo = $_POST["sexo"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $CPF = $_POST["CPF"];
    session_start();
    
    if ($senha != $confirmaSenha) {    
      $erro = "As senhas não são as mesmas";        
      $_SESSION["erro"] = $erro;
      header("Location: formulario-cadastro.html");
     exit();
    }

    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: formulario-cadastro.html");
        exit();
    }else{
        die("Erro $sql. " . mysqli_error($connection));
    }
    $sql = "SELECT cpf_cliente FROM cliente";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    $sql = "INSERT INTO cliente (CPF_cliente, nome, email, senha, sexo, telefone, cidade, endereco,bairro)
    VALUES ($CPF_cliente,'$nome', '$email','$sexo','$telefone','$cidade', '$endereco','$bairro')";
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: formulario-login.html");
        exit();
    }else{
        die("Erro $sql. " . mysqli_error($connection));
    }
     
   
?>


?>
