<?php
<<<<<<< HEAD
=======
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
>>>>>>> 64cfd535fee3bdef95bf1327333e973cf4f31ebc
    
    Function fazercadastro($nome, $email, $senha, $confirmasenha, $sexo, $telefone, $cidade, $endereco, $bairro, $cpf) {

    $hash = password_hash($senha, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
 
    if($connection === false){
        die("Erro" . mysqli_connect_error());
<<<<<<< HEAD
    } 

    $sql = "SELECT id_usuario FROM usuario WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";

=======
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
    
>>>>>>> 64cfd535fee3bdef95bf1327333e973cf4f31ebc
    if (mysqli_num_rows($result) > 0) {
        return false;
    }

    $sql = "INSERT INTO usuario (CPF,nome,senha)
    VALUES ('$CPF', '$nome', '$senha')";
    if(!mysqli_query($connection, $sql)){
        die("Erro $sql. " . mysqli_error($connection));
    } 
    
    
    $sql = "SELECT id_usuario FROM usuario WHERE email='$email'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $id_usuario = $row["id_usuario"];          
        }
    }
<<<<<<< HEAD


=======
    $sql = "SELECT id_cliente FROM cliente";
    $result = mysqli_query($connection, $sql);
>>>>>>> 64cfd535fee3bdef95bf1327333e973cf4f31ebc
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
<<<<<<< HEAD
}
?>


?>
=======
?>
>>>>>>> 64cfd535fee3bdef95bf1327333e973cf4f31ebc
