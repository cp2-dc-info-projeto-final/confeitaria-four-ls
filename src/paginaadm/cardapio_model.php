<?php
function cadastro($nomepro, $imagem, $preco, $descricao){
    $conn = mysqli_connect("localhost", "root", "", "confeitariafourls");
    $sql="INSERT INTO produto(nomepro, imagem, preco, descricao) VALUES ('$nomepro', '$imagem', '$preco', '$descricao')";
    if(!mysqli_query($conn, $sql)) {
        die("Erro $sql. " . mysqli_error($conn));
    } 
    $id = mysqli_insert_id($conn);
    return $id;
    $sql="UPDATE produto SET imagem='Imagens_Produtos/$id/$imagem'
                WHERE id_produto=$id";
                mysqli_query($conn, $sql);
}

?>