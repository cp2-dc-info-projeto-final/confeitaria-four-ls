<?php
require "../../connection.php";
function buscapedidos() {
  $conn = getConnection();
  $produtos = null;
  $sql = "SELECT 
            usuario.nome,
            cliente.telefone,
            cliente.endereco,
            produto.nomepro,
            produto.preco,
            venda.data_venda,
            produto_venda.qtd
          FROM usuario
          JOIN cliente ON usuario.id = cliente.id_cliente
          JOIN venda on cliente.id_cliente = venda.id_cliente
          JOIN produto_venda ON produto_venda.id_venda = venda.id_venda
          JOIN produto ON produto.id_produto = produto_venda.id_produto";
  try {
    $query = $conn->query($sql);
    $produtos = $query->fetchAll();
  } catch(PDOExecption $e) {
    print "Error!: $sql" . $e->getMessage() . "</br>";
  }

  $conn = null;
  return $produtos;

}



 
