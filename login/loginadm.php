<html>
    <head>
            <title>Login - Confeitaria Four'ls</title>
            <meta charset="UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="csslogin.css" />
          </head>

    <body>
        <div class="container" >
            
            <div class="content">      
            <div id="login">
                    <form method="post" action="loginCTRL.php"> 
                        <h1>Login</h1> 
                        <p> 
                            <label for="cod">Digite o código para entrar:</label>
                            <input id="cod" name="cod" required="required" type="text"> 
               </p>
                        <p> 
                            <input type="submit" value="Entrar" /> 
                            <?php
                            session_start();
                            if(array_key_exists('erro', $_SESSION) == true){
                                $erro = $_SESSION["erro"];
                                echo "<br><b>$erro</b>";
                            }
                            ?>
                        </p>
                    
                        
                    </form>
            </div>
        </div>