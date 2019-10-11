<?php
session_start();
if(!isset($_SESSION['itens']))
{
    $_SESSION['itens'] = array();
}

if(isset($_GET['add']) && $_GET['add'] == "carrinho")
{
    $idProduto = $_GET['id'];
    if(!isset($_SESSION['itens'] [$idProduto]))
    {
        $_SESSION['itens'] [$idProduto] = 1;
    }else{
        $_SESSION['itens'] [$idProduto] += 1;
    }
}

if(count($_SESSION['itens']) == 0){
    echo 'Carrinho Vazio<br><a href="cardapio.php">Adicionar itens</a>';
}else{
    $_SESSION['carrinho'] = array();
    foreach($_SESSION['itens'] as $idProduto => $qtd)
    {
        $conexao = new PDO ('mysql:host=localhost;dbname=meusprodutos',"root","");
        $select = $conexao->prepare("SELECT * FROM produtos WHERE id=?");
        $select->bindParam(1,$idProduto);
        $select->execute();
        $produtos = $select->fetchAll () ;
        $total = $qtd * $produtos[0] ["preco"]
        echo
           'Nome: '.$produtos[0] ["nome"].'<br/>
            Preço: '.number_format($produtos[0] ["preco"],2,",",".").'<br/>
            Quantidade: '.$produtos[0] ['qtd'].'<br/>
            Total: '.number_format($total,2,",",".").'<br/>
            <a href="remover.php?remover=carrinho&id='.$idProduto.'">Remover Tudo</a>
            <hr/>

            ';
    array_push(
        $_SESSION['carrinho']
        array('id_produto' => $idProduto,
        'qtd' => $produtos[0] ['qtd'],
        'preco' => $produtos[0] ["preco"],
        'total' => $total
        )
        );
    }

    echo '<a href="finalizar.php">Finalizar Pedido</a>';
}