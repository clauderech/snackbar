
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/geral_style.css" /> 
        <style>
                #form_client input {
                    float:right;
                    padding-top: 10px;
                    margin-left: 10px;
                    margin-top: 10px;
                    width: 300px;
                }

                #form_client label {
                    display: inline;
                    color: #ffff;
                    float: left;
                    left: 15px;
                    padding: 10px 0px 0px 5px;
                    margin-top: 5px;
                    margin-bottom: 5px;
                }

                .container {
                    margin-top: 70px;
                    margin-left: 15%;
                    max-width: 380px;
                }

                @media (max-width: 450px) {
                    .container {
                    margin-top: 120px;
                    margin-left: 2px;
                    max-width: 350px;
                    }

                    #form_client input {
                        width: 270px;
                    }
                }



            </style>     
    </head>
    <body>
    <header>
        <!-- <img src="images/logo_snackbar1.png" class="logotipo"> --> 
        <h1>Snack Bar Lanches</h1>
        <!-- <div class="menu-openner"><span>0</span>🛒</div> -->
        </header>
        <!-- /menu-openner --> 
        <nav>
            <div class="menu_mobile" onclick=" menuShow() ">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Entrar</a></li>
            </ul>
            <div class="user" style="display: flex;">
                <div style="margin-top: 20%; color:aliceblue">user</div>
                <img src="images/user.png" >
            </div>
        </nav>  
        
        <div class="container">
            <div class="cadastro">
                <h1>Cadastro</h1>
                <div class="dados_cliente">
                    <h3>Seus Dados</h3>
                    <form action="registra_user.php" id="form_client" method="post">
                        <div>
                            <label for="nome">Nome: *</label>
                            <input type="text" name="nome" id="nome" required />
                        </div>

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
                            <input type="submit" class="cart--finalizar" id="enviar" value="Enviar Pedido">
                        </div>
                    </form>
                </div> <!--dados_cliente -->
            </div><!--finalizar -->
        </div> <!--conatainer-->
        <script src="js/menuRespon.js"></script>
        <script src="js/cadastro.js"></script>
    </body>
</html>