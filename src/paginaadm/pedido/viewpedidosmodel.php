<?php
require "../../connection.php";
function buscapedidos() {
  $conn = get_connection();
  $query = "SELECT cliente.nome, cliente.telefone, produto.nomepro, produto.preco, venda.data_venda, produto_venda.qtd FROM cliente JOIN venda on cliente.id_cliente = venda.id_cliente JOIN produto_venda	ON produto_venda.id_venda = venda.id_venda
 JOIN produto ON produto.id_produto = produto_venda.id_produto";
  $result = mysqli_query($conn, $query);
  
  $pedidos = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $pedidos;
  
  if ($query) {
    $fetch = $query->fetchAll();
    return $fetch;
} else {
    die($query->errorInfo());
}

return null;

}

 
