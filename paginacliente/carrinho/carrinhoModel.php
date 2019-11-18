<?php
    
    Function fazerpedido($nome,$nomepro,$qtd,$precof) {
       
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
     
        if($connection === false){
            die("Erro" . mysqli_connect_error());
        }

        $sql = "INSERT INTO carrinho (nome,nomepro,qtd,precof) VALUES ('$nome','$nomepro','$qtd',$precof)";

        if(!mysqli_query($connection, $sql)) {
            die("Erro $sql. " . mysqli_error($connection));
        } 

        mysqli_close($connection);
    
    }
        
    ?>
    