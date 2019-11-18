
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
    for($i=0; $i<6; $i++){
        $row=mysqli_fetch_assoc($result);
        $produto=$row["imagem"];
       array_push($produtos, $produto);

    }
    return $produtos;
     
    
}


