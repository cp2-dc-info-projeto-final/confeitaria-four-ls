<?php
    require "loginmodel.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];
        
    session_start();
    if (fazerlogin($email, $senha) == true) {
        session_unset();
        session_start();
        $_SESSION["nome"] = $row["nome"]; 
<<<<<<< HEAD
        $_SESSION["admin"]= administrador($email);
        if ($_SESSION["admin"]==true){
        header("Location: ../paginaadm/cardapioadm.php");
        } else if ($_SESSION["admin"]==false){
            header("Location: ../paginacliente/paginacliente.php");
        }
=======
        header("Location: ../paginacliente/paginacliente.php");
>>>>>>> 02affde38b491b0868f4671582216dfa3d5a17d0
        exit();
    }
    
    else {
        $erro = "Login ou senha incorretos";        
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }    