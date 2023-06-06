<?php
    $nome = 'user';
    session_start();
    if(isset($_SESSION['nome'])) {
        $nome = $_SESSION['nome'];
        
    }
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/geral_style.css" />
    <link rel="stylesheet" href="css/style.css" />
    
</head>
    <body>
    <header>
        <div class="header-title">
            <!-- <img src="images/logo_snackbar1.png" class="logotipo"> --> 
            <h1>Snack Bar Lanches</h1>
        </div>
                
        <nav>            
            <div class="menu_mobile" onclick=" menuShow() ">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul>
                <li><a class="nav-link" href="cardapio.php">Cardápio</a></li>
                <li><a class="nav-link" href="cadastro.php">Cadastro</a></li>
                <li><a class="nav-link" href="login.php">Entrar</a></li>
            </ul>
            <div class="user" style="display: flex;">
                <div class="user_name" style="margin-top: 10%; color:aliceblue"><?php echo $nome; ?></div>
                <img src="images/user.png" >
            </div>
        </nav>
    </header>            
        <script src="js/menuRespon.js"></script>
    </body>
</html>