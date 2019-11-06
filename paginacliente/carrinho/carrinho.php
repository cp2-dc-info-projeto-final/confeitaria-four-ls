<?php 
	session_start();
	require_once "functions/product.php";
	require_once "functions/cart.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], 1);			
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		} 
		header('location: carrinho.php');
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);


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
  <link href="carrinho.css" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="carrinho.css" rel="stylesheet">

</head>

<body id="page-top">

  
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
          <img class="logo" src="logo.png" height="100" width="100"> 
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Confeitaria Four'ls</a>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../cardapio/cardapio.html">Cardápio</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../paginacliente.html#sobrenos">Sobre nós</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../paginacliente.html#faleconosco">Fale conosco</a>
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
 <br>
 <br>
 <br>
 <br>
 <br>

 <div style="display: block; margin: 100px;">
  
 <?php if($resultsCarts) : ?>
        <form action="carrinho.php?acao=up" method="post">
        <table class="table table-strip">
          <thead>
            <tr>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Preço</th>
              <th>Subtotal</th>
              <th>Ação</th>

            </tr>				
          </thead>
          <tbody>
            <?php foreach($resultsCarts as $result) : ?>
            <tr>
              
              <td><?php echo $result['name']?></td>
              <td>
                <input type="text" name="prod[<?php echo $result['id']?>]" value="<?php echo $result['quantity']?>" size="1" />
                              
                </td>
              <td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
              <td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
              <td><a href="carrinho.php?acao=del&id=<?php echo $result['id']?>" class="btn btn-danger">Remover</a></td>
              
            </tr>
          <?php endforeach;?>
          <tr>
            <td colspan="3" class="text-right"><b>Total: </b></td>
            <td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
            <td></td>
          </tr>
          </tbody>
          
        </table>

        <a class="btn btn-info" href="../cardapio/cardapio.php">Continuar Comprando</a>
        <button class="btn btn-primary" type="submit">Atualizar Carrinho</button>

        </form>
    <?php endif?>

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
