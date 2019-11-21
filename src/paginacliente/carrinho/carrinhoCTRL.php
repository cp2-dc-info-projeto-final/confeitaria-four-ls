<?php

    Require "carrinhoModel.php";
    session_start();
  $id_usuario = $_SESSION['id_cliente'];
  $id_produto = $_SESSION['id'];
  $qtd = $_SESSION['qtd'];
    
    if (isset($_SESSION['id_cliente']){
        if (criarvenda($id_cliente)) {
            if(addprodven($id_produto, $qtd)){
                session_unset();
                header("Location: ../paginacliente.php");
                exit();
            }
        } else {
            $erro = "Não foi possivel realizar o pedido";        
            $_SESSION["erro"] = $erro;
            header("Location: carrinho.php");
            exit();
        }
    } else {
        header("Location: ../../login/login.php")
    }
?>
