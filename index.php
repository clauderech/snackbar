<?php
    $nome = 'user';
    session_start();
    if(isset($_SESSION['nome'])) {
        $nome = $_SESSION['nome'];
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackBarTio, um local onde as pessoas podem comer excelentes lanches.</title>
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
                    
            <nav class="nav_site">            
                <div class="menu_mobile_site" onclick=" menuSiteShow() ">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <ul class="ul_site">
                    <li class="li_site"><a class="nav-link-site" href="cardapio.php">Cardápio</a></li>
                    <li class="li_site"><a class="nav-link-site" href="cadastro.php">Cadastro</a></li>
                    <li class="li_site"><a class="nav-link-site" href="login.php">Entrar</a></li>
                </ul>
                <div class="user" style="display: flex;">
                    <div class="user_name" style="margin-top: 10%; color:aliceblue"><?php echo $nome; ?></div>
                    <img src="images/user.png" >
                </div>
            </nav>
        </header> 
        <div class="container">
            <div>
                <div class="hello"><br>
                    <p>Seja bem vindo!</p>
                    <h2>Snack Bar Lanches</h2>
                    <p> Uma das melhores lancherias da Serra Gaúcha.</p><br>
                    <a href="cardapio.php">Peça online</a><br>
                </div><br>
                
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
            </div>
            
            <div class="contato">
                <div>
                    <p>Você também pode nos visitar.</p>
                    <p> Estamos localizados em:</p>
                    <ul class="ul_contato">
                        <li><b>Rua:</b> João Venâncio Girarde, 260.</li>
                        <li><b>Cidade:</b> Caxias Do Sul, RS.</li>
                        <li><b>Fone:</b> (54)-99125-3180</li>
                        <li><b>WhatsApp:</b> (54)-99125-3180</li>
                        <li><b>E-mail:</b> contato@snackbartio.com.br</li>
                    </ul>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d13935.949502519297!2d-51.23675897345555!3d-29.165044270340495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x951ea25986f1eb3d%3A0xc937820f2488f7f6!2sR.%20Jo%C3%A3o%20Ven%C3%A2ncio%20Girardi%20-%20Cidade%20Nova%2C%20Caxias%20do%20Sul%20-%20RS%2C%2095112-235!3m2!1d-29.165063399999998!2d-51.226480699999996!5e0!3m2!1spt-BR!2sbr!4v1686692191573!5m2!1spt-BR!2sbr" width="350" height="360" style="border:0; border-radius:3px; margin-left: 5px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div><!-- Fim container -->
                

        <script src="js/slide.js"></script>
        <script src="js/menurespon.js"></script>
    </body>
</html>