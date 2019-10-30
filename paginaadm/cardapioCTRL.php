<?php

$preco=$_POST['preco'];
$descricao=$_POST['descricao'];
$imagem=$_FILES['imagem'];

$id=cadastro($preco, $descricao, $imagem);
mkdir("../Imagens_Produtos/".$id."/", 755, true);
move_uploaded_file($_FILES["arquivo"]["tmp_name"],'../Imagens_Produtos/'.$id.'/'.$imagem);






