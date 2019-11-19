<html>
<head>
  <title>Cadastro - Confeitaria Four'ls</title>
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
		<label for="cpf">CPF:</label><br>
          <input id="cpf" name="CPF" required="required" type="text" maxlength="60">
        </p>
        <p>
        <label for="email">Email:</label><br>
          <input id="email" name="email" required="required" type="text" maxlength="60">
        </p>
        <p>
        <label for="sexo">Sexo:</label><br>
          <input name="sexo" required="required" type="radio" value="Masculino" checked>
            Masculino 
            <input name="sexo" required="required" type="radio" value="Feminino">
            Feminino
        </p>
        <p>
        <label for="tel">Telefone:</label><br>
          <input id="tel" name="telefone" required="required" type="text"><br>
              <span>Apenas números</span>
        </p>
        <p>
        <label for="ender">Endereço:</label><br>
          <input id="ender" name="endereco" required="required"type="text" maxlength="70">
        </p>
        <p>
        <label for="cidade">Cidade:</label><br>
          <input id="cidade" name="cidade" required="required" type="text" maxlength="20">
        </p>
        <p>
        <label for="bairro">Bairro:</label><br>
          <input id="bairro" name="bairro" required="required" type="text" maxlength="20">
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
    