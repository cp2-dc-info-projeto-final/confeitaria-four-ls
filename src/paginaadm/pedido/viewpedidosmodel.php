<?php
require "../../connection.php";
function buscapedidos() {
         $host = "localhost";
         $user = "root";
         $password = "";
         $database = "confeitariafourls";

         $conn=mysqli_connect($host, $user, $password, $database );
  $query = ("SELECT usuario.nome, cliente.telefone,cliente.endereco, produto.nomepro, produto.preco, venda.data_venda, produto_venda.qtd FROM usuario JOIN  cliente ON usuario.id=cliente.id_cliente JOIN venda on cliente.id_cliente = venda.id_cliente JOIN produto_venda	ON produto_venda.id_venda = venda.id_venda
 JOIN produto ON produto.id_produto = produto_venda.id_produto");
 $result=mysqli_query($conn, $query);
   if (!$result){
    die(mysqli_error($conn));
  }
  
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



 
