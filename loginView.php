<html>
    <head>
            <title>Login - Confeitaria Four'ls</title>
            <meta charset="UTF-8"/>
          </head>

    <body>
        <div class="container" >
            
            <div class="content">      
            <div id="login">
                    <form method="post" action="loginCTRL.php"> 
                        <h1>Login</h1> 
                        <p> 
                            <label for="e-mail">E-mail</label>
                            <input id="e-mail" name="e-mail" required="required" type="text" placeholder=" exemplo@gmail.com"/> 
                        </p>
                        
                        <p> 
                            <label for="senha">Senha</label>
                            <input id="senha" name="senha" required="required" type="password" placeholder=" ex= 54321"/>
                        </p>
                        
                    
                        <p> 
                            <input type="submit" value="Entrar" /> 
                        </p>
                        
                        <div class="link">
                            <p>0,
                                Ainda não tem conta?
                            </p>
                            <p>
                                <a id="id_cliente" href="formulario-cadastro.html">Cadastre-se agora mesmo</a>
                    
                            </p>
                        </div>
                    </form>
            </div>
        </div>
