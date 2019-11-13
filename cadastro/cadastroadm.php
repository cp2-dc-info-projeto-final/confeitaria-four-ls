<html>
<head>
  <title>Cadastro - Confeitaria Four'Ls</title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="csscadastro.css" />
</head>

<body>
<div class="container" >
<div class="content"> 
<div id="cadastro">
	<h1>Cadastro</h1>
    <form name="0.1_cadastro" method="post" action="cadastroCTRL.php">
        <p>
		<label for="nome">Nome:</label><br>
          <input id="nome" name="nome" required="required" type="text" maxlength="60">
        </p>
        <p>
        <label for="email">Email:</label><br>
          <input id="email" name="email" required="required" type="text" maxlength="60">
        </p>
        <p>
        <label for="senha">Senha:</label><br>
          <input id="senha" name="senha" required="required" type="password" maxlength="12">
        </p>
        <p>
        <label for="confsenha">Confirmar senha:</label><br>
          <input id="confsenha" name="confirmaSenha" required="required" type="password" maxlength="12">
        </p>
        <p>
            <input name="cadastrar" required="required" type="submit" value="Concluir meu Cadastro"> 
           
            <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
    ?>

            <br>
            <input name="limpar" required="required" type="reset" value="Limpar Campos preenchidos">
        </p>
    </form>
    </div>
	</div>
	</div>
    </body>
	</html>
    