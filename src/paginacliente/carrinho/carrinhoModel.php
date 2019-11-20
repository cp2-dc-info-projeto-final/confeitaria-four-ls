<?php
    
    Function criarvenda($id_cliente) {
       
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
     
        if($connection === false){
            die("Erro" . mysqli_connect_error());
        }
        $sql = "INSERT INTO venda (id_cliente) VALUES ('$id_cliente')";

        if(!mysqli_query($connection, $sql)){
            die("Erro $sql. " . mysqli_error($connection));
        }
        
        mysqli_close($connection);

        return mysqli_insert_id($connection);

        Function addprodven($id_produto, $qtd) {
       
            $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
         
            if($connection === false){
                die("Erro" . mysqli_connect_error());
            }
            $sql = "INSERT INTO produto_venda (id_produto,qtd) VALUES ('$id_produto', '$qtd')";
    
            if(!mysqli_query($connection, $sql)){
                die("Erro $sql. " . mysqli_error($connection));
            }
            
            mysqli_close($connection);
    
    }
?>
    