<?php
    //formulario para o login do usuario
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/geral_style.css" />
    <style>
        .form_login {
            position: relative;
            top:200px;
            margin: 200px auto auto auto;
            align-items: center;
            max-width: 400px;
           
        }

        #formlogin input{
            float:right;
            margin-top: 10px;
            margin-left: 5px;
            width: 250px;
        }

        #formlogin label {
            color: burlywood;
            float: left;
            margin-top: 10px;
            margin-left: 5px;
        }

        #fie {
            color:bisque;
            padding-bottom: 10px;
        }

        #fie div{
            display: block;
        }

        #formlogin #submit {
            width: 100%;
            background-color:chartreuse;
            border-radius: 20px;
        }

        #formlogin #submit:hover{
            background-color:darkseagreen;
            cursor: pointer;

        }

        @media (max-width:600px) {
            .form_login {
                position: relative;
                top: 200px;
                margin: auto;
                max-width: 360;
            }
        }

        @media (max-width:280px) {
            #formlogin input{
                float:left;
                margin-top: 10px;
                max-width: 220px;
                
            }

            
            #fie {
                margin: auto;
                width: auto;
            }
            
        }

    </style>
</head>
<body>
    <header>
        <div class="header-title">
            <!-- <img src="images/logo_snackbar1.png" class="logotipo"> --> 
            <h1>Snack Bar Lanches</h1>
            <!-- <div class="menu-openner"><span>0</span>🛒</div> -->
        </div>
                
        <nav class="nav_site">            
            <div class="menu_mobile_site" onclick=" menuSiteShow() ">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul class="ul_site">
                <li class="li_site"><a class="nav-link-site" href="index.php">Home</a></li>
                <li class="li_site"><a class="nav-link-site" href="cadastro.php">Cadastro</a></li>
            </ul>
            
        </nav>
    </header>  
    
    

    <div class="form_login">
        <form method="post" action="verifica_login.php" id="formlogin" name="formlogin" >
        <fieldset id="fie">
            <legend>LOGIN</legend><br />
            <div>
                <label>@EMAIL :</label>
                <input type="text" name="login" id="login"  />
            </div><br />
            <div>
                <label>SENHA :</label>
                <input type="password" name="senha" id="senha" />
            </div><br />
            <input type="submit" id="submit" value="LOGAR   "   />
        </fieldset> 
        </form>
    </div>
    <script src="js/menurespon.js"></script>
</body>
</html>
    