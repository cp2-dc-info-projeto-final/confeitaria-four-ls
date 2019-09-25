<?php
    session_start();
    $_SESSION['carrinho']
    $nome = $_SESSION['cliente']
    $id_cliente = 'SELECT id FROM cliente WHERE nome = $nome'
    $date = now();
    'INSERT INTO venda (id_cliente, data) values ($id_cliente, $date)';
    $id_venda = mysqli_lastrowid();
    FOREACH ($produtos as $p)
    'INSERT INTO produto_venda (id_venda, id_produto, qtd) VALUES ($id_venda, $p['id'], $p['qtd']);'
    "UPDATE produto 
    SET qtd = qtd - $p['qtd']
    WHERE id = $p['id']";
        $insert->execute();
    }