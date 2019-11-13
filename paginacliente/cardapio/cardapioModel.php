<?php

    function buscarProdutos() {
        $conexao = new PDO('mysql:host=localhost;dbname=confeitariafourls',"root","");

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