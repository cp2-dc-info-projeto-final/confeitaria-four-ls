<?php
require_once "../connection.php";

function cadastro($nomepro, $imagem, $preco, $descricao){
    $conn = getConnection();
    

    try {
        $sql="INSERT INTO produto(nomepro, imagem, preco, descricao, visible) VALUES 
        (:nomepro, :imagem, :preco, :descricao, 1)";

        $query = $conn->prepare($sql);
        $query->bindValue(':nomepro', $nomepro);
        $query->bindValue(':imagem', $imagem);
        $query->bindValue(':preco', $preco);
        $query->bindValue(':descricao', $descricao);

        $query->execute();

        $id = $conn->lastInsertId();
    } catch(PDOExecption $e) {
        print "Error!: $sql" . $e->getMessage() . "</br>";
    } 
    
    try {
        $sql="UPDATE produto 
                SET imagem='Imagens_Produtos/:id/:imagem'
                WHERE id_produto=:id";

        $query = $conn->prepare($sql);
        $query->bindValue(':imagem', $imagem);
        $query->bindValue(':id', $id);
        $query->execute();
    } catch(PDOExecption $e) {
        print "Error!: $sql" . $e->getMessage() . "</br>";
    } 
    return $id;
}

?>
