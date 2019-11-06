<?php

    function buscarProdutos() {
        $conexao = new PDO('mysql:host=localhost;dbname=confeitariafourls',"root","");

        $select = $conexao->prepare("SELECT id_produto, nomepro, descricao, preco FROM produto");
        $select->execute();


        if ($select) {
            $fetch = $select->fetchAll();

            foreach($fetch as $produto){
                echo $produto['id_produto'] . "<br>";
                echo $produto['nomepro'] . "<br>";
                echo $produto['descricao'] . "<br>";
                echo $produto['preco'] . "<br>";
            }

            return $fetch;
        } else {
            die($select->errorInfo());
        }

        return null;
    }
    
?>