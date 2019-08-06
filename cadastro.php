<?php
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
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
 
    if($connection === false){
        die("Erro" . mysqli_connect_error());
    }
    $sql = "SELECT id_usuario FROM cliente";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    $sql = "INSERT INTO usuario (CPF,nome,senha)
    VALUES ('$CPF', '$nome', '$senha')";
    if(mysqli_query($connection, $sql)){
    session_unset();
    header("Location: formulario-login.html");
    exit();
    } else{
    die("Erro $sql. " . mysqli_error($connection));
    } 
    
    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: formulario-cadastro.html");
        exit();
    }else{
        die("Erro $sql. " . mysqli_error($connection));
    }
    $sql = "SELECT id_cliente FROM cliente";
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
        $sql = "INSERT INTO administrador (CPF_admin, nome, senha) VALUES
            ('$CPF_admin','$nome','$senha')";
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: formulario-login.html");
        exit();
    } else{
        die("Erro $sql. " . mysqli_error($connection));
    }
    mysqli_close($connection);
?>


?>
