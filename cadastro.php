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

    $sql = "INSERT INTO usuario (id_usuario,nome,senha)
    VALUES ('$id_usuario', '$nome', '$senha')";//possui id_usuario
    if(mysqli_query($connection, $sql)){
    session_unset();
    header("Location: formulario-login.html");
    exit();
    } else{
    die("Erro $sql. " . mysqli_error($connection));
    } 
    $sql = "SELECT id_usuario FROM cliente WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: formulario-cadastro.html");
        exit();
    }else{
        die("Erro $sql. " . mysqli_error($connection));
    }
    $sql = "INSERT INTO cliente (id_cliente, nome, email, senha, sexo, telefone, cidade, endereco,bairro)
    VALUES ('$id_cliente','$nome', '$email', '$senha','$sexo','$telefone','$cidade', '$endereco','$bairro')";
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: formulario-login.html");
        exit();
    }else{
        die("Erro $sql. " . mysqli_error($connection));
    }

        $sql = "INSERT INTO administrador (id_administrador, nome, senha) VALUES
            ('$id_administrador','$nome','$senha')";
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: formulario-login.html");
        exit();
    } else{
        die("Erro $sql. " . mysqli_error($connection));
    }
    mysqli_close($connection);
?>
