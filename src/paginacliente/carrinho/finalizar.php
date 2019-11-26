<?php 
require_once "../../connection.php";
session_start();
if (isset($_SESSION["id_usuario"])) {
    echo $_SESSION["id_usuario"];
    $idcliente = $_SESSION["id_usuario"];
} else {
    header("Location: ../../login/loginview.php");
}
$carrinho = $_SESSION["carrinho"];
$data = date ("Y-m-d");
$total = $_SESSION["total"];

var_dump($data);


function FinalizarCompra($carrinho, $idcliente, $data, $total){

    $conn = getconnectmsq();
    $sql = "INSERT INTO venda (id_cliente, data_venda, total) VALUES ($idcliente, '$data', $total)";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $id_venda = mysqli_insert_id($conn);

        foreach ($carrinho as $id_produto => $qtd) {
            //inserir em produto venda: id_venda, id_produto, quantidade
            $sql = "INSERT INTO produto_venda (id_produto, id_venda, qtd) VALUES ($id_produto, $id_venda, $qtd)";
            $result2 = mysqli_query($conn, $sql);
            if (!$result2){
                die(mysqli_error($conn));
            }
        }

        return true;
    } else {
        die(mysqli_error($conn));
        return false;
    }
    
}

if(FinalizarCompra($carrinho, $idcliente, $data, $total)) {
    unset($_SESSION["carrinho"]);
    header("location: aviso.php");
}
?>