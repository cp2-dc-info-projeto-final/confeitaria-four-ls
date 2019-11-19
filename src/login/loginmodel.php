
<<?php
    function fazerlogin($email, $senha) {
        
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
 
        // Check connection
        if($connection === false){
            die("Erro de Conexão" . mysqli_connect_error());
        }
        
        $sql = "SELECT senha,nome FROM usuario WHERE email='$email'";
    
        $result = mysqli_query($connection, $sql);

      
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
    
                if (password_verify($senha, $hash)) {
                    return $row;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
        mysqli_close($connection);
    }  
    

    function administrador($email){
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
        if($connection === false){
            die("Erro de Conexão" . mysqli_connect_error());
        }
        $sql="SELECT * FROM usuario AS u JOIN  administrador AS a ON u.id=a.id_admin  WHERE u.email='$email'";
        $result=mysqli_query($connection, $sql);
        if (!$result){die(mysqli_error($connection));}
        if(mysqli_num_rows($result)==1){
            return true;
        } else {return false;}

    }

    



?>