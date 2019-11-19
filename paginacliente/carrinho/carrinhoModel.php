<?php
    
    Function fazerpedido($cpf,$nomepro,$qtd,$precof) {
       
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
        if($connection === false){
            die("Erro" . mysqli_connect_error());
        }
        $sql = "SELECT cpf FROM cliente WHERE cpf='$cpf'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
               
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return true;
            }
        }else{
            die("Erro $sql. " . mysqli_error($connection));
        }

        $sql = "INSERT INTO carrinho (cpf,nomepro,qtd,precof) VALUES ('$cpf','$nomepro','$qtd','$precof')";

        if(!mysqli_query($connection, $sql)) {
            return true;
        }else{
            die("Erro $sql. " . mysqli_error($connection));
        }

        mysqli_close($connection);
    
    }
        
?>
    
