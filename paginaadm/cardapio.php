<?php
    $conexao = new PDO('mysql:host=localhost;dbname=meusprodutos',"root","");

    $select = $conexao->prepare("SELECT * FROM produtos");
    $select->execute();
    $fetch = $select->fetchAll();

    foreach($fetch as $produto){
        echo 'Nome do produto: '.$produto['nome'].' &nbsp;
        Quantidade: '.$produto['qtd'].' &nbsp;
        Preço: R$ '.number_format($produto['preco'],2,",",".").'
        <a href="carrinho.php?add=carrinho&id='.$produto['id'].'">Adicionar ao carrinho</a>
        <br/>
        <hr/>
        ';
    }
?>