<?php
    
    Function criarvenda($id_cliente, $data_venda,$hora_venda) {
       
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
     
        if($connection === false){
            die("Erro" . mysqli_connect_error());
        }
        $sql = "INSERT INTO venda (id_cliente,data_venda,hora_venda) VALUES ('$id_cliente', '$data_venda','$hora_venda')";

        if(!mysqli_query($connection, $sql)){
            die("Erro $sql. " . mysqli_error($connection));
        }
        
        mysqli_close($connection);

        return mysqli_insert_id($connection);
    
    }
?>
    