<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmaSenha = $_POST["confirmaSenha"];
    $sexo = $_POST["sexo"];
	$telefone = $_POST["telefone"];
	$cidade = $_POST["cidade"];
	$endereco = $_POST["endereco"];
    session_start();
    if ($senha != $confirmaSenha) {    
        $erro = "As senhas não são as mesmas";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastro.php");
        exit();
    }
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
 
    if($connection === false){
        die("Erro" . mysqli_connect_error());
    }
    $sql = "SELECT id_cliente FROM cliente WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastro.php");
        exit();
    }
    $sql = "INSERT INTO cliente (nome, email, senha, sexo, telefone, cidade, endereco)
    VALUES ('$nome', '$email', '$senha','$sexo','$telefone','$cidade', '$endereco')";
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: login.php");
        exit();
    } else{
        die("Erro $sql. " . mysqli_error($connection));
    }
    mysqli_close($connection);
?>

