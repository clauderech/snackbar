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
            margin-top: 300px;
            margin-left: 30%;
            max-width: 400px;
           
        }

        #formlogin input{
            float:right;
            margin-top: 10px;
            margin-left: 5px;
            width: 300px;
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

        #formlogin #submit {
            background-color:chartreuse;
            border-radius: 20px;
        }

        @media (max-width:600px) {
            .form_login {
                margin-left: 50px;
            }
        }

        @media (max-width:380px) {
            #formlogin input{
            float:right;
            margin-top: 10px;
            margin-left: 5px;
            width: 200px;
            margin-right: 20px;
            }

            .form_login {
            margin-top: 200px;
            margin-left: 10%;
            max-width: 300px;
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
                
        <nav>            
            <div class="menu_mobile" onclick=" menuShow() ">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul>
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="cadastro.php">Cadastro</a></li>
            </ul>
            <div class="user" style="display: flex;">
                <div class="user_name" style="margin-top: 10%; color:aliceblue"><?php //echo $_SESSION['login']; ?></div>
                <img src="images/user.png" >
            </div>
        </nav>
    </header>  
    
    

    <div class="form_login">
        <form method="post" action="verifica_login.php" id="formlogin" name="formlogin" >
        <fieldset id="fie">
            <legend>LOGIN</legend><br />
            <label>@EMAIL :</label>
            <input type="text" name="login" id="login"  /><br />
            <label>SENHA :</label>
            <input type="password" name="senha" id="senha" /><br />
            <input type="submit" id="submit" value="LOGAR   "   />
        </fieldset> 
        </form>
    </div>
    <script src="js/menuRespon.js"></script>
</body>
</html>
    