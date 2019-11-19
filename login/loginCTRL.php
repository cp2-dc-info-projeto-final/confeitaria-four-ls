<?php
    require "login.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];
        
    session_start();
    if (fazerlogin($email, $senha) == true) {
        //session_unset();
        $_SESSION["nome"] = $row["nome"]; 
        

        header("Location: ../paginacliente/paginacliente.php");
        exit();
    }
    else {
        $erro = "Login ou senha incorretos";        
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }    