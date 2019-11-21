<?php
function invisivel($id_produto){
    require "../connection.php";
    $conexao = getConnection();

    $update = $conexao->prepare("UPDATE produto SET visible=0 WHERE id_produto=$id_produto");
    $update->execute();
    if (!$update) {
        die($update->errorInfo());
    
    

}

}