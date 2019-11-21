
<?php

function pegafotos(){
     $i=0;
    $conn = mysqli_connect("localhost", "root", "", "confeitariafourls");
    $sql=("SELECT * FROM produto WHERE visible=1");
    if(!mysqli_query($conn, $sql)) {
        die("Erro $sql. " . mysqli_error($conn));
    } 
    $result = mysqli_query($conn, $sql);
    $produtos=[];
    for($i=0; $i<8; $i++){
        $row=mysqli_fetch_assoc($result);
        $produto["imagem"]=$row["imagem"];
        $produto["id_produto"]=$row["id_produto"];
       array_push($produtos, $produto);

    }
    return $produtos;
     
    
}

    require_once "../connection.php";
    function buscarProdutos() {
        $conexao = getConnection();

        $select = $conexao->prepare("SELECT id_produto, nomepro, descricao, preco, imagem FROM produto WHERE visible=1");
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

