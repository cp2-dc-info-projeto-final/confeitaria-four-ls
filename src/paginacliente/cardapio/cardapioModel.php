<?php

    require_once "../../connection.php";
    function buscarProdutos() {
        $conexao = getConnection();

        $select = $conexao->prepare("SELECT id_produto, nomepro, descricao, preco, imagem FROM produto WHERE visible=1");
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