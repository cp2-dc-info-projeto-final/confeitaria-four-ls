<?php

    Require "carrinhoModel.php";
    
    $data_venda = $_POST["data_venda"];
    $hora_venda = $_POST["hora_venda"];
    $qtd = $_POST["qtd"];
    session_start();

  $id_cliente = $_SESSION["id_cliente"];
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
