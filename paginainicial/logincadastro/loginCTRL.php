<?php

     Require "login.php";
     $email = $_POST["email"];
     $senha = $_POST["senha"];
    
    if(fazerlogin($email, $senha))
    {
        session_start();   
        $_SESSION["nome"] = $row["nome"]; 
        header("Location: paginacliente.html");
        exit();
    } else {
        $erro = "Login ou senha incorreta";        
        $_SESSION["erro"] = $erro;
        header("Location: loginview.html");
        exit();
    }    
?>