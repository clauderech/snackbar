<?php
    $nome = 'user';
    session_start();
    if(isset($_SESSION['nome']))
        $nome = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="icon" href="images/logo_snackbar.png" /> -->

    <title>Cardapio</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/geral_style.css" />
    <style>
        .menu_mobile_pagina {
            display: none;
            position: absolute;
            left: 10px;
            background: #f5f1f1;
            width: 36px;
            height: 28px;
            border-radius: 2px;    
        }

        .menu_mobile_pagina div{
            width: 24px;
            height: 1px;
            background: #021013;
            margin: 6px;
            border-radius: 2px;
        }

        .nav_pagina {
            margin-left: 0;
            display: flex;
            position: fixed;
            top: 125px;
            height: 50px;
            width: 100%;
            text-align: left;
            background-color: #01282e;
            align-items: center;
            margin-bottom: 10px;
        }

        .nav_pagina .ul_pagina{
            margin: 0;
            width: auto;
            height: 100%;
            text-align: left;
            align-items: left;
            display: flex;
            list-style: none;
            
        }

        .nav_pagina .ul_pagina .li_pagina{
            margin: 0 5px;
            
            
        }

        .nav_pagina .ul_pagina .li_pagina a{
            color: #f2f2f2;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 2px 5px;
            border-radius: 5px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .nav_pagina .ul_pagina .li_pagina a.active,
        .nav_pagina .ul_pagina .li_pagina a:hover{
            background: #f88f06;
        }

        @media (max-width:900px) {

            .nav_pagina {
                width: auto;
            }

            .menu_mobile_pagina{
                display: block;
            }

            .nav_pagina .ul_pagina.abrir{
                left: 0;
            }

            .nav_pagina .ul_pagina{
                top: 180px;
                position: fixed;
                left: -100%;
                background-color: #003840;
                height: 500px;
                width: 100%;
                text-align: left;
                display: block;
                transition: all 0.3s ease;
                overflow-y: auto;
            }

            .nav_pagina .ul_pagina .li_pagina{
            margin: 0 0px;
            
            }

            .nav_pagina .ul_pagina .li_pagina a{
            color: #f2f2f2;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 2px 5px;
            border-radius: 5px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

            .nav_pagina .ul_pagina .li_pagina a.active,
            .nav_pagina .ul_pagina .li_pagina a:hover{
                background: none;
                color: #f88f06;
            }
        }
    </style>
</head>
<body>
        <!-- modelos de categorias e itens na lista e no carrinho -->
    <div class="models">
        <div class="categ">
           
            <h2><div class="categ--name">--</div></h2>
           
        </div>

        <div class="itens">
            <div data-key="id"></div>
            <h3><div class="item--name">--</div>
            <div class="item--preco">--</div></h3>
            <div class="item--descr">--</div>
            <a>
                <div class="item--add">+</div>
            </a>
        </div>

        <!-- itens no carrinho -->
        <div class="cart--item">
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>
        
    </div>
    <!-- /models -->

    <header>
        <div class="header-title">
            <!-- <img src="images/logo_snackbar1.png" class="logotipo"> --> 
            <h1>Snack Bar Lanches</h1>
            <div class="menu-openner"><span>0</span>🛒</div>
        </div>

        <nav class="nav_pagina">            
            <div class="menu_mobile_pagina" onclick="menuPaginaShow()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul class="ul_pagina">
                <li class="li_pagina" onclick="fecharMenuPagina()"><a class="nav-link-pagina" href="#Xis">Xis</a></li>
                <li class="li_pagina" onclick="fecharMenuPagina()"><a class="nav-link-pagina" href="#Dogs">Dogs</a></li>
                <li class="li_pagina" onclick="fecharMenuPagina()"><a class="nav-link-pagina" href="#Torradas">Torradas</a></li>
                <li class="li_pagina" onclick="fecharMenuPagina()"><a class="nav-link-pagina" href="#Pasteis">Pasteis</a></li>
                <li class="li_pagina" onclick="fecharMenuPagina()"><a class="nav-link-pagina" href="#Porções">Porções</a></li>
                <li class="li_pagina" onclick="fecharMenuPagina()"><a class="nav-link-pagina" href="#Picados">Picados</a></li>
                <li class="li_pagina" onclick="fecharMenuPagina()"><a class="nav-link-pagina" href="#Pizzas">Pizzas</a></li>
            </ul>
        </nav>
                
        <nav class="nav_site">            
            <div class="menu_mobile_site" onclick=" menuSiteShow() ">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul class="ul_site">
                <li class="li_site"><a class="nav-link" href="index.php">Home</a></li>
            </ul>
            <div class="user" style="display: flex;">
                <div class="user_name" style="margin-top: 10%; color:aliceblue"><?php echo $nome; ?></div>
                <img src="images/user.png" >
            </div>
        </nav>

       
    </header>
    <!-- /menu-openner --> 

   

    <!-- conteudo principal -->
    <main>
        <h2>Cardápio</h2>
        <div class="cardapio"></div>
    </main>
    <!-- /conteudo principal -->
    
    <!-- aside do carrinho -->
    <aside class="carrinho">
        <div class="cart--area">
            <div class="menu-closer">❌</div>
            <h1>Seu Pedido</h1>
            <div class="cart"></div>
            <div class="">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--finalizar"><a href="#">Finalizar a compra</a></div>
            </div>
        </div>
    </aside>
    <!-- /aside do carrinho -->
        
    <!-- janela modal .xisWindowArea -->
    <div class="itemWindowArea">
        <div class="itemWindowBody">
            <div class="itemInfo--cancelMobileButton">Voltar</div>
            <!-- <div class="xisBig">
                <img src="" />
            </div> -->
            <div class="itemInfo">
                <h1>--</h1>
                <div class="itemInfo--desc">--</div>
                <div data-key="L" class="lanches"></div>
                <div class="itemInfo--pricearea">
                    <div class="itemInfo--sector">Preço</div>
                    <div class="itemInfo--actualPrice">R$ --</div>
                    <div class="itemInfo--qtde">
                        <div class="itemInfo--qtarea">
                            <button class="itemInfo--qtmenos">-</button>
                            <div class="itemInfo--qt">1</div>
                            <button class="itemInfo--qtmais">+</button>
                        </div>
                    </div>
                    <div class="ItemInfo--form_observ">
                        <form id="observ">
                            <label for="msg" >Observação:</label>
                            <input type="text" id="msg" name="msg" placeholder="Digite sua observação aqui">
                        </form>
                    </div>
                </div>
                <div class="itemInfo--addButton">Adicionar ao carrinho</div>
                <div class="itemInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>

    
    <!-- /janela modal .xisWindowArea -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/cardapio.js"></script>
    <script src="js/cardapio_pesquisa.js"></script>
    <script src="js/script.js"></script>
    <script src="js/registra_pedido.js"></script>
    <script src="js/menurespon.js"></script>
</body>
</html>