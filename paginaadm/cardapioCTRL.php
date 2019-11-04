<?php

$nomepro=$_POST['nomepro'];
$imagem=$_FILES['imagem'];
$preco=$_POST['preco'];
$descricao=$_POST['descricao'];


$id=cadastro($nomepro, $imagem, $preco, $descricao);
mkdir("../Imagens_Produtos/".$id."/", 755, true);
move_uploaded_file($_FILES["arquivo"]["tmp_name"],'../Imagens_Produtos/'.$id.'/'.$imagem);






