<!DOCTYPE html>
<html lang="br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="descrição" content="">
  <meta name="autor" content="">

  <title>Confeitaria Four'ls</title>

  <!-- Custom fonts for this theme (botar link css quando estiver pronto)-->
  <link href="paginainicial.css" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="paginainicial.css" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Confeitaria Four'ls</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#cardapio">Cardápio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#sobrenos">Sobre nós</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#faleconosco">Fale conosco</a>
          </li>
		   <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#meucarrinho">Meu carrinho</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logincadastro/loginview.html">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <img class="logo" src="logo.png" height="400" width="400">

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Confeitaria - Gostosuras - Doces</p>

    </div>
  </header>

  <!-- Cardápio Section (teremos que alterar os links [acho] das imagens dependendo do aparelho que vamos utilizar)-->
  <section class="page-section cardapio" id="cardapio">
    <div class="container">

      <!-- Cardápio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cardápio</h2>

<?php
    $conexao = new PDO('mysql:host=localhost;dbname=meusprodutos',"root","");

    $select = $conexao->prepare("SELECT * FROM produtos");
    $select->execute();
    $fetch = $select->fetchAll();

    foreach($fetch as $produto){
        echo 'Nome do produto: '.$produto['nome'].' &nbsp;
        Quantidade: '.$produto['qtd'].' &nbsp;
        Preço: R$ '.number_format($produto['preco'],2,",",".").'
        <a href="carrinho.php?add=carrinho&id='.$produto['id'].'">Adicionar ao carrinho</a>
        <br/>
        <hr/>
        ';
    }
?>
</html>