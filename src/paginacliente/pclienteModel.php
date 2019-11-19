<?php

function pegafotos(){
     $i=0;
    $conn = mysqli_connect("localhost", "root", "", "confeitariafourls");
    $sql=("SELECT * FROM produto");
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
