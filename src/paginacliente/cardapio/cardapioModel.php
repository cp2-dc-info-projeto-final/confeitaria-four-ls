<?php

    require_once "../paginacliente/carrinho/connection.php";
    function buscarProdutos() {
        $conexao = getConnection();

        $select = $conexao->prepare("SELECT id_produto, nomepro, descricao, preco, imagem FROM produto");
        $select->execute();


        if ($select) {
            $fetch = $select->fetchAll();
            return $fetch;
        } else {
            die($select->errorInfo());
        }

        return null;
    }
    
?>