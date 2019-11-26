<?php
session_start();          
      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }
        
      //adiciona produto
        
      if(isset($_GET['acao'])){
           
 
          //ADICIONAR CARRINHO
          if($_GET['acao'] == 'add'){
            $id = intval($_GET['id_produto']);
            if(!isset($_SESSION['carrinho'][$id])){
              $_SESSION['carrinho'][$id] = 1;
              header("location: carrinho.php");
            }else{
              $_SESSION['carrinho'][$id] += 1;
              header("location: carrinho.php");
            }
          }

          // DECREMENTAR DO CARRINHO
          if($_GET['acao'] == 'down'){
            $id = intval($_GET['id_produto']);
            if(isset($_SESSION['carrinho'][$id])){
              $_SESSION['carrinho'][$id] = $_SESSION['carrinho'][$id] - 1;
              if ($_SESSION['carrinho'][$id] == 0)
              {
                unset($_SESSION['carrinho'][$id]);
              }
            header("location: carrinho.php");
            }
          }
           
         //REMOVER CARRINHO
         if($_GET['acao'] == 'del'){
            $id = intval($_GET['id_produto']);
            if(isset($_SESSION['carrinho'][$id])){
              unset($_SESSION['carrinho'][$id]);
            }
         }
           
        
      }         
           
    ?>
    <?php 
/*if (isset($_SESSION['admin']) && $_SESSION['admin']==false){*/ 

  ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Meu carrinho</title>
        <link rel="stylesheet" type="text/css" href="carrinho.css"/>
        <style>
        #cpf{
          margin: 10px;
          text-align: 100px;
        }
        #concluir{
          margin: 10px;
          text-align: 100px;
        }
        .tabela-carrinho {
          margin: 100px;
          border: 2px solid black;
          width: 85%;
          height: 50px;
          }

        h3{
          margin: 28px;
          text-align: center;
        }
        </style>
    </head>
    <body id="page-top">
  

  
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
          <img class="logo" src="logo.png" height="100" width="100"> 
          <a class="navbar-brand js-scroll-trigger" href="../paginacliente.php">Confeitaria Four'ls</a>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../cardapio/cardapioViewcliente.php">Cardápio</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../paginacliente.php#sobrenos">Sobre nós</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="../paginacliente.php#faleconosco">Fale conosco</a>
              </li>
              <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../sair.php">Sair da Conta</a>
          </li>
         
        </ul>
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
    <div class="interface">
      <br>
      <br>
      <center>
      <caption><h3 class="detalhes">Ótima escolha!</h3></caption>
         <h3>Obrigado por comprar na Confeitaria Four'ls!
         Preencha os campos abaixo para efetivar a compra.</h3>
      </center>
        <table class="tabela-carrinho">
    <thead>
    
          <tr>
            <th width="244">Produto</th>
            <th width="79">Quantidade</th>
            <th width="89">Preço</th>
            <th width="100">SubTotal</th>
            <th width="64">Remover</th>
          </tr>
   
    </thead>  
    <tbody>
        <?php
            require_once "../../connection.php";
              if(count($_SESSION['carrinho']) == 0){
                echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
              }else{
                $conexao = getConnection();
                $total = 0;
                foreach($_SESSION['carrinho'] as $id => $qtd){
                      try {
                        $sql   = "SELECT id_produto, nomepro, descricao, preco, imagem FROM produto WHERE id_produto = :id_produto";
                        $query = $conexao->prepare($sql);
                        $query->bindParam(":id_produto", $id);
                        $query->execute();
                        $row = $query->fetch();
                    
                        
                        $nomepro = $row["nomepro"];
                        $preco = $row["preco"];
                        $sub = $row["preco"] * $qtd;
                          
                        $total += $sub;

                      } catch( PDOExecption $e ) { 
                          die("Erro ao buscar carrinho! " . $e->getMessage());
                      } 

                      

                      
                    echo '<tr>       
                          <td>'.$nomepro . '</td>
                          <td>
                          <a href="?acao=down&id_produto='.$id.'">-</a>
                          <input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" />
                          <a href="?acao=add&id_produto='.$id.'">+</a></td>
                          <td>R$ '.$preco.'</td>
                          <td>R$ '.$sub.'</td>
                          <td><a href="?acao=del&id_produto='.$id.'">Remover</a></td>

                      </tr>';
                }
                    
                    if (isset($total))
                    {
                      echo '<tr>
                              <td colspan="4">Total</td>
                              <td>R$ '.$total.'</td>
                        </tr>';
                    }
                      
              }
              if (isset($total)) {
                $_SESSION["total"] = $total;
              }
              
        ?>

     </tbody>
     <tfoot>
            <?php
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
            ?>
            
    </tfoot>
        </form>
    </form>
            </table>
        </div>
        <center>
        <tr>
            <td><button class="linkback"><a style="color: black" href="../cardapio/cardapioViewcliente.php" class="color-white">Continuar comprando</a></button></td>
            </tr>
            <tr>
              <td><button class="linkback"><a style="color: black" href="finalizar.php" class="color-white">Finalizar Compra</a></button>
              </td>
            </tr>
            </center>

          
        

    </body>
    <br>
    <br>
  <footer class="footer text-center">
    <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0">
      <h4 class="text-uppercase mb-4">Localização</h4>
      <p class="lead mb-0">Rua Caviana
      <br>396, casa 7 - Taquara,JPA</p>
  </div>
</html>
