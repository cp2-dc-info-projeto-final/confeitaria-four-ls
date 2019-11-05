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

</head>

<body id="page-top">

  
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
          <img class="logo" src="logo.png" height="100" width="100"> 
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Confeitaria Four'ls</a>
        </div>
    </nav>
            <br><br>
            <br><br>
            <br><br>
            <br>
    <div>
          <form class="center-form" action="enviar.php" method="post" name="formu" id="form1" accept-charset="utf-8" enctype="multipart/form-data" >
          <p>
		<label for="nomepro">Nome do produto:</label><br>
          <input id="nomepro" name="nomepro" required="required" type="text" maxlength="60">
        </p>
        <p>
        <label for="imagem">Imagem do Produto:</label><br>
          <input id="imagem" name="imagem" required="required" type=><br>
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
            <input class="button" name="adicionar" id="add" required="required" type="submit" value="Adicionar"> 
            <br>
            <br>
            <input class="button" name="limpar" id="limpar" required="required" type="reset" value="Limpar Campos preenchidos">
            <br>
            <br>
            <input class="button" name="sair" id="sair" type="button" href="paginainicial.html" value="Sair da conta">
        </p>
        </form>
    </div>

</html>