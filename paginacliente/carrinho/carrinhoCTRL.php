<?php

    Require "carrinhoModel.php";
    $nome = $_POST["nome"];
    $nomepro = $_POST[$nomepro];
    $qtd = $_POST[$qtd];
    $precof = $_POST[$total];
    session_start();
    
    if ($senha != $confirma_senha) {    
        $erro = "As senhas não são as mesmas";        
        $_SESSION["erro"] = $erro;
        header("Location:cadastroview.php");
        exit();
    } 

    else{

        if (fazerpedido($nome,$nomepro,$qtd,$precof)) {
            session_unset();
            header("Location: ../cardapio/cardapioView.php");
            exit();
        } else {
            $erro = "Não foi possível realizar o pedido";        
            $_SESSION["erro"] = $erro;
            header("Location: carrinho.php");
            exit();
        }

        
    }     
       
    
?>
