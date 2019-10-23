<?php

     Require "login.php";
     $email = $_POST["email"];
     $senha = $_POST["senha"];
    
    
        session_start();   
        
        if (fazerlogin($email, $senha) == true) {
            session_unset();
        $_SESSION["nome"] = $row["nome"]; 
        header("Location: ../paginacliente/paginacliente.html");
        exit();
    } else {
        $erro = "Login ou senha incorreta";        
        $_SESSION["erro"] = $erro;
        header("Location: loginview.php");
        exit();
    }    
?>