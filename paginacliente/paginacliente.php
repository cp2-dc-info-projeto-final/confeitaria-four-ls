<!DOCTYPE html>
<html lang="br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="descrição" content="">
  <meta name="autor" content="">

  <title>Confeitaria Four'ls</title>

  <!-- Custom fonts for this theme (botar link css quando estiver pronto)-->
  <link href="paginacliente.css" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="paginacliente.css" rel="stylesheet">

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
            <a class="nav-link py-3 px-0 px-lg-3" href="carrinho/carrinho.php">Meu carrinho</a>
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

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Cardápio Grid Items -->
      <div class="row">
 <?php
   REQUIRE "pclienteCTRL.php";
  foreach ($produtos as $key ) {
    echo "<img src='$key' >";
  };
 ?>
</div>
  

    </div>
    <br>
    <br>
  <center>
      <div>
        <a href="cardapio/cardapioView.php">Ver mais</a>
      </div>
    </center>

  <!-- Sobre nós  Section -->
  <section class="page-section bg-primary text-white mb-0" id="sobrenos">
    <div class="container">

      <!-- Sobre nós Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Sobre nós</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Sobre nós Section Content -->
      
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Nós da Confeitaria Four' Ls temos um grande reconhecimento sobre os nossos produtos na região
            metropolitana do Rio de Janeiro e visamos desenvolver produtos de qualidade para nossos clientes, e que
            desde 2016 trazemos delícias com amor e carinho para nosso público.</p>
        </div>
      

  </section>

  <!-- Fale conosco Section -->
  <section class="page-section" id="faleconosco">
    <div class="container">

      <!-- Fale conosco Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Fale conosco</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Fale conosco Section Form -->
      <center>
        <br>
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <h5 class="text-uppercase mb-4">confeitariafourls@gmail.com</h5>
        </div>
      </div>
      </center>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Localização</h4>
          <p class="lead mb-0">Rua Caviana
            <br>396, casa 7 - Taquara,JPA</p>
        </div>


      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)(alterar quando estiver pronto o js)
  obs:sei nem para que esses comandos servem mas parecem importantes-->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>


  <!-- Bootstrap core JavaScript (alterar quando estiver pronto o js)-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript (alterar quando estiver pronto o js)-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript (alterar quando estiver pronto o js)-->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template (alterar quando estiver pronto o js)-->
  <script src="js/freelancer.min.js"></script>

</body>

</html>