<?php
require "../../connection.php";


 function buscapedidos() {
    
    $conn=get_connection();
    if ($conn===false){
        die("Erro de conexão".mysqli_connect_error());
    }
    $sql = "SELECT cliente.nome, cliente.telefone, produto.nomepro, produto.preco, venda.data_venda, produto_venda.qtd FROM cliente JOIN venda on cliente.id_cliente = venda.id_cliente JOIN produto_venda	ON produto_venda.id_venda = venda.id_venda
    JOIN produto ON produto.id_produto = produto_venda.id_produto";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQL_ASSOC);
 }



 $vendas = buscapedidos();

 foreach($vendas as $venda) {

?>

    <div>
        <table>
        <tr>
                <th> Cliente </th>
                <th> E-Mail </th>
                <th> Endereço </th>
                <th> Data </th>
                <th> Valor Total </th>
            </tr>
            <tr>
            <td> <?php echo $venda["nome"]; ?> </td>
            <td> <?php echo $venda["email"]; ?> </td>
            <td> <?php echo $venda["endereco"]; ?> </td>
            <td> <?php echo $venda["data_venda"]; ?>  </td>
            <td> R$ <?php echo number_format ($venda['vtotal'], 2, ',', '.')?></td>
      
            <tr>
                <th> Produto </th>
                <th> Preço </th>
                <th> Quantidade </th>
                <th> Subtotal </th>
            </tr>
            <?php
                $produtos = buscaritens($venda["id"]);
                foreach ($produtos as $produto) {
            ?>   
            <tr>
                <td> <?php echo $produto["nome"]; ?> </td>
                <td> <?php echo $produto["preco"]; ?> </td>
                <td> <?php echo $produto["qtd"]; ?> </td>
                <td> R$ <?php echo number_format ($produto['preco'] * $produto['qtd'], 2, ',', '.') ?> 
                <td> <input type="checkbox"> concluido </td> 
            </tr>
            

            <?php
                }    
            ?>
    </div><br>
<?php
 }
?>