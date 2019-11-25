<?php 
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin']==true){ 

  ?>
  <!DOCTYPE html>
<html lang="br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="descrição" content="">
  <meta name="autor" content="">

  <title>Confeitaria Four'ls</title>

  <!-- Custom fonts for this theme (botar link css quando estiver pronto)-->
  <link href="cardapioadm.css" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="cardapioadm.css" rel="stylesheet">
 <style>
 .button{
   background-color:#e65786;
 }
 </style>
</head>

<body id="page-top">

  
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
          <img class="logo" src="logo.png" height="100" width="100"> 
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Confeitaria Four'ls</a>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="viewadm.php">Visualizar cardápio</a>
          </li>
          <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="pedido/viewpedido.php">Ver pedidos</a>
          </li>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../sair.php">Sair da conta</a>
          </li>
        </div>
    </nav>

            <br><br>
            <br><br>
            <br><br>
            <br>
    <div>
      <center>
      <br>
            <br>
          <form class="center-form" action="cardapioCTRL.php" method="post" name="formu" id="form1" accept-charset="utf-8" enctype="multipart/form-data" >
          <p>
		<label for="nomepro">Nome do produto:</label><br>
          <input id="nomepro" name="nomepro" required="required" type="text" maxlength="60">
        </p>
        <p>
        <label for="preco">Preço do produto:</label><br>
          <input id="preco" name="preco" required="required" type="text" maxlength="70">
        </p>
        <p>
        <label for="descricao">Descrição do produto:</label><br>
          <input id="descricao" name="descricao" required="required" type="text" maxlength="90">
        </p>
        <p>
        <label for="conteudo">Adicionar imagem:</label>
        <br>
            
        <input type="file" name="arquivo" accept="image/*">   
        <br>
        <br>
            <br>
          <button type="submit">Enviar</button>
            <br>
            <br>
            <input class="button" name="limpar" id="limpar" required="required" type="reset" value="Limpar Campos preenchidos">
            <br>
            <br>
        </p>
        </form>
</center>
    </div>

</html>
<?php
} else {echo '<html><title>ERRO!</title><h1><p style=\'color:black;\'>Você não pode acessar esta página!!!</p></h1></html>';}
?>
