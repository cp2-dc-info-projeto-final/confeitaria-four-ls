<!DOCTYPE html>
<html lang="br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="descrição" content="">
  <meta name="autor" content="">
  <form class="form" action="enviar.php" method="post" name="form" id="form1" accept-charset="utf-8" enctype="multipart/form-data" ></form>

  <title>Confeitaria Four'ls</title>

  <!-- Custom fonts for this theme (botar link css quando estiver pronto)-->
  <link href="cardapio.css" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="cardapio.css" rel="stylesheet">

</head>

<body id="page-top">

  
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
          <img class="logo" src="logo.png" height="100" width="100"> 
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Confeitaria Four'ls</a>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../paginacliente.html#sobrenos">Sobre nós</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../paginacliente.html#faleconosco">Fale conosco</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../carrinho/carrinho.html">Meu carrinho</a>
              </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3" href="../perfil/htmlperfil.html">Perfil</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
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

  <div style="display: block; margin: 100px;">

  <table>
        <tr>
          <th>
            Nome
          </th>
          <th>
            Descricao
          </th>
          <th>
            Preco
          </th>
          <th>
          </th>
        </tr>
  <?php

    require_once "cardapioCtrl.php";

    $produtos = buscarProdutosCtrl();

    foreach($produtos as $produto){
  ?>


      <tr>
        <td>
          <?php echo $produto['nomepro']; ?>
        </td>
        <td>
          <?php echo $produto['descricao']; ?>
        </td>
        <td>
          <?php echo "R$ " . number_format($produto['preco'],2,",",".") ?>
        </td>
        <td>
          <a href="paginacliente/carrinho/carrinho.php?acao=add&id=<?php echo  $produto['id_produto']?>">Adicionar ao carrinho</a> 
        </td>
      </tr>
  <?php    
      }  
  ?>

  </table>
  </div>
  
      

<!-- 
  <php
-->
  

  <footer class="footer text-center">
    <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0">
      <h4 class="text-uppercase mb-4">Localização</h4>
      <p class="lead mb-0">Rua Caviana
      <br>396, casa 7 - Taquara,JPA</p>
  </div>
</div>
</div>
</html>
