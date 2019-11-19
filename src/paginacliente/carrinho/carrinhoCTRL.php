<?php

    Require "carrinhoModel.php";
    
    $qtd = $_POST["qtd"];
    session_start();

  $id_usuario = $_SESSION["id_cliente"];
  $id_produto = $_SESSION["id"];
    
        if (criarvenda($id_cliente, $data_venda,$hora_venda)) {
            session_unset();
            header("Location: ../paginacliente.php");
            exit();
        } else {
            $erro = "Não foi possivel realizar o pedido";        
            $_SESSION["erro"] = $erro;
            header("Location: carrinho.php");
            exit();
        }
?>
