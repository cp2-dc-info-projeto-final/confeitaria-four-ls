<?php
    
    Function fazercadastro($nome,$cpf, $email, $senha, $confirmasenha, $sexo, $telefone, $cidade, $endereco, $bairro) {
       
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
     
        if($connection === false){
            die("Erro" . mysqli_connect_error());
        }
        $sql = "SELECT id FROM usuario WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
               
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return false;
            }
        }else{
            die("Erro $sql. " . mysqli_error($connection));
        }
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (nome,senha,email) VALUES ('$nome', '$hash','$email')";

        if(!mysqli_query($connection, $sql)) {
            die("Erro $sql. " . mysqli_error($connection));
        } 

        $user_id = mysqli_insert_id($connection);

        $sql = "INSERT INTO cliente (id_cliente, nome, cpf, sexo, telefone, cidade, endereco, bairro)
        VALUES ($user_id,'$nome','$cpf', '$sexo','$telefone','$cidade', '$endereco','$bairro')";
        if(mysqli_query($connection, $sql)){
            return true;
        }else{
            die("Erro $sql. " . mysqli_error($connection));
        }
        
        mysqli_close($connection);
    
    }
        
    ?>
    