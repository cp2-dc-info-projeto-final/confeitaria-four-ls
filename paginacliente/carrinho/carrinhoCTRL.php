<?php

    Require "carrinhoModel.php";
    $cpf = $_POST["cpf"];
    $nomepro = $_POST["nomepro"];
    $qtd = $_POST["qtd"];
    $precof = $_POST["total"];
    session_start();
     

        if (fazerpedido($cpf,$nomepro,$qtd,$precof)) {
            session_unset();
            header("Location: ../cardapio/cardapioView.php");
            exit();
        } else {
            $erro = "Não foi possível realizar o pedido";        
            $_SESSION["erro"] = $erro;
            header("Location: carrinho.php");
            exit();
        }

        
       
       
    
?>
