<?php
   
   function fazerlogin($email, $senha) {
        $connection = mysqli_connect("localhost", "root", "", "confeitariafourls");
        
        // Check connection
        if($connection === false){
            die("Erro" . mysqli_connect_error());
        }

        $sql = "SELECT senha,email FROM usuario WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
            
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];          
            }
        }
        mysqli_close($connection);
   }
    
?>