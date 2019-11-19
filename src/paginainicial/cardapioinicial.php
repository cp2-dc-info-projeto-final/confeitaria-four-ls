<!DOCTYPE html>
<html lang="br">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="descrição" content="">
  <meta name="autor" content="">
  <form class="form" action="enviar.php" method="post" name="form" id="form1" accept-charset="utf-8" enctype="multipart/form-data" ></form>

  <title>Confeitaria Four'ls</title>

  <!-- Custom fonts for this theme (botar link css quando estiver pronto)-->
  <link href="cardapio.css" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="cardapio.css" rel="stylesheet">
<style>
.tabela{
  text-align: center;
  margin: 100px;
          border: 3px solid black;
          width: 80%;
          height: 40px;

}
.imagem{
  width: 300px;
      height: 300px;
      border: 2px solid #ddd;
      border-radius: 4px;
    
}
</style>
</head>

<body id="page-top">

  
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
          <img class="logo" src="logo.png" height="100" width="100"> 
          <a class="navbar-brand js-scroll-trigger" href="../paginacliente.php">Confeitaria Four'ls</a>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cardapioViewcliente.php">Cardápio</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../paginacliente.php#sobrenos">Sobre nós</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../paginacliente.php#faleconosco">Fale conosco</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../carrinho/carrinho.php">Meu carrinho</a>
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

  <table class="tabela">
        <tr>
          <th>
          </th>
          <th>
            Nome:
          </th>
         
          <th>
            Descrição:
          </th>
         
          <th>
            Preço:
          </th>
          <th>
          </th>
        </tr>
  <?php 

    require_once "../paginacliente/cardapio/cardapioCtrl.php";

    $produtos = buscarProdutosCtrl();

    foreach($produtos as $produto){
  ?>


      <tr>
        <td>
          <img class= "imagem" src="../../Imagens_Produtos/<?php echo $produto['id_produto'];?>/<?php echo $produto['imagem'];?>"  />
        </td>
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
          <a href="../carrinho/carrinho.php?acao=add&id_produto=<?php echo  $produto['id_produto']?>">Adicionar ao carrinho</a> 
          
        </td>
      </tr>
  <?php    
      }  
  ?>

  </table>
  </div>
  

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