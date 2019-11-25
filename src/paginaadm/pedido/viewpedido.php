

  <!DOCTYPE html>
<html lang="br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="descrição" content="">
  <meta name="autor" content="">

  <title>Confeitaria Four'ls</title>

  <!-- Custom fonts for this theme (botar link css quando estiver pronto)-->
  <link href="pedido.css" rel="stylesheet" type="text/css">

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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../cardapio/cardapioView.php">Visualizar cardápio</a>
          </li>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../sair.php">Sair da Conta</a>
          </li>
        </div>
    </nav>
 
 <?php
require "viewpedidoscontrol.php";

$pedidos = buscapedidos();

foreach($pedidos as $pedido){
  ?>


      <tr>
        <td>
          <?php echo $pedido['nome']; ?>
        </td>
        <td>
          <?php echo $pedido['telefone']; ?>
        </td>
        <td>
          <?php echo $pedido['nomepro']; ?>
        </td>
        <td>
          <?php echo "R$ " . number_format($pedido['preco'],2,",",".") ?>
        </td>
        <td>
          <?php echo number_format($pedido['data_venda'],2,",",".") ?>
        </td>
        <td>
          <?php echo number_format($pedido['qtd'],2,",",".") ?>
        </td>
      </tr>
  <?php    
      }  
  ?>



</body>
</html>


