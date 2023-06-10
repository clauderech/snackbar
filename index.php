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
    <link rel="stylesheet" href="css/slide.css" />
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
        <div>
            <h1>Snack Bar Lanches</h1>
            <p>Bem vindo ao site do Snack Bar Lanches!<br><br>
            Uma das melhores lancherias de Caxias Do Sul, para você pedir online ou também pode nos visitar.
            </p>
        </div>
        
        <div class="slider">
            <div class="slides">
                <!--Radio Buttons-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--Fim Radio Buttons-->

                <!--Slide images-->
                <div class="slide first">
                    <img src="images/xisbanner1.jpg" alt="Xis 1">
                </div>
                <div class="slide">
                    <img src="images/xis_banner2.jpg" alt="Xis 2">
                </div>
                <div class="slide">
                    <img src="images/xis_banner3.jpg" alt="Xis 3">
                </div>
                <div class="slide">
                    <img src="images/banner.png" alt="banner 1">
                </div>
                <!--Fim Slide images-->

                <!--Navigation auto-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>

            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>

        </div>

        <script src="js/slide.js"></script>
        <script src="js/menurespon.js"></script>
    </body>
</html>