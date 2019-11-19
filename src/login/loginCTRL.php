<?php
    require "loginmodel.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];
        
    session_start();
    if ($usuario = fazerlogin($email, $senha)) {
        session_unset();
        session_start();
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["email"] = $usuario["email"]; 
        $_SESSION["id_usuario"] = $usuario["id"]; 
        $_SESSION["admin"]= administrador($email);
        if ($_SESSION["admin"]==true){
        header("Location: ../paginaadm/cardapioadm.php");
        } else if ($_SESSION["admin"]==false){
            header("Location: ../paginacliente/paginacliente.php");
        }

        exit();
    }
    
    else {
        $erro = "Login ou senha incorretos";        
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }    