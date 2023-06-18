
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/geral_style.css" /> 
        <style>
               
                #form_client div {
                    display: block;
                    padding: 0 5px 0 5px;
                    width: 350px;
                    color: azure;
                }

                .cadastro {
                    position: fixed;
                    top: 30%;
                    left: 30%;
                }
  

                #form_client div input{
                    float: right;
                }

                .cadast_enviar{
                    width: 100%;
                    border-radius: 10px;
                    background-color:chartreuse ;
                    font-size: 18px;                   
                }

                

                @media (max-width: 650px) {
                    .cadastro{
                        left: 5px;
                    }

                    #form_client input {
                        width: 250px;
                    }
                }



            </style>     
    </head>
    <body>
    <header>
        <!-- <img src="images/logo_snackbar1.png" class="logotipo"> --> 
        <h1>Snack Bar Lanches</h1>
        <!-- <div class="menu-openner"><span>0</span>🛒</div> -->
        <!-- /menu-openner --> 
        <nav class="nav_site">
            <div class="menu_mobile_site" onclick=" menuSiteShow() ">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul class="ul_site">
                <li class="li_site"><a href="index.php">Home</a></li>
                <li class="li_site"><a href="login.php">Entrar</a></li>
            </ul>
            <div class="user" style="display: flex;">
                <div style="margin-top: 20%; color:aliceblue">user</div>
                <img src="images/user.png" >
            </div>
        </nav>
    </header>  
        
        <div class="cadastro">
            <h1>Cadastro</h1>
            <div class="dados_cliente">
                <h3>Seus Dados:</h3>
                <form action="registra_user.php" id="form_client" method="post">
                    <div>
                        <label for="nome">Nome: *</label>
                        <input type="text" name="nome" id="nome" required />
                    </div><br>

                    <div>
                        <label for="fone">Fone: *</label>
                        <input type="text" name="fone" id="fone" required />
                    </div><br />

                    <div>
                        <label for="bairro">Bairro:</label>
                        <input type="text" name="bairro" id="bairro" />
                    </div><br />

                    <div>
                        <label for="rua">Rua:</label>
                        <input type="text" name="rua" id="rua" />
                    </div><br />

                    <div>
                        <label for="numero">Numero:</label>
                        <input type="text" name="numero" id="numero" />
                    </div><br />

                    <div>
                        <label for="email">e-mail: *</label>
                        <input type="email" name="email" id="email" required />
                    </div><br />

                    <div>
                        <label for="password">Password *</label>
                        <input type="password" name="password" id="password" required />
                    </div><br />

                    <div>
                        <input type="submit" class="cadast_enviar" id="enviar" value="Enviar">
                    </div>
                </form>
            </div> <!--dados_cliente -->
        </div><!--finalizar -->
    
        <script src="js/menurespon.js"></script>
    </body>
</html>