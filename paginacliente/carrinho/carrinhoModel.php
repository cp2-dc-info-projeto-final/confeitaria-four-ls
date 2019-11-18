<?php
    
    Function fazerpedido($nome,$nomepro,$qtd,$precof) {
       
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
     
        if($connection === false){
            die("Erro" . mysqli_connect_error());
        }
        $sql = "SELECT nome FROM cliente WHERE nome='$nome'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
               
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return false;
            }
        }else{
            die("Erro $sql. " . mysqli_error($connection));

        $sql = "INSERT INTO carrinho (nome,nomepro,qtd,precof) VALUES ('$nome','$nomepro','$qtd',$precof)";

        if(!mysqli_query($connection, $sql)) {
            die("Erro $sql. " . mysqli_error($connection));
        } 

        mysqli_close($connection);
    
    }
        
    ?>
    