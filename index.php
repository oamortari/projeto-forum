<html>
    <head>
        <title>Oito</title>
        <script type="text/javascript" src="js.js"></script>
        <link href="style.css" rel="stylesheet"/>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no">
    </head>
    <body>
    <?php include "config.php";?>
        <div class=container>
            <div class=mestre>
                <div id="topo">
                    <div id="logo">For<span>u</span>m</div>
                    <div id="menu">
                        <nav>
                            <ul class="pages">
                                <li>Início</li>
                                <li>Sobre
                                    <div class="submenu">
                                        <div class="sub_item">Sub1</div>
                                        <div class="sub_item">Sub2</div>
                                        <div class="sub_item">Sub3</div>
                                    </div>
                                    <!-- Fim do div submenu-->
                                </li>
                                <!-- Fim do submenu-->
                                <li>Contato</li>
                            </ul>
                            <!-- Fim do menu geral-->
                        </nav>

                </div>
                </div>
                <div id="banner"><a href="style.css">Banner</a></div>
                <div id="banner_menu">
                    <div class="menu_display">
                        <img class="white" src="img/homew.png"/>
                        <img class="black" src="img/home.png"/>
                      Home
                    </div>

                    <div class="menu_display">
                        <img class="white" src="img/pastaw.png"/>
                        <img class="black" src="img/pasta.png"/>
                        Posts</div>
                    <div class="menu_display">
                        <img class="white" src="img/lupaw.png"/>
                        <img class="black" src="img/lupa.png"/>
                        Pesquisa</div>
                </div>
                <div class="meio">
                   <?php include 'meio.php' ?>
                </div>
                <div class="meio_amarelo">
                    <div id="amarelo_cont">
                        <div id="amarelo_img"><img src="img/forum.png"/></div>
                        <div id="amarelo_title"><h1>Olá!</h1><p>Um fórum de discussão é uma ferramenta para páginas de Internet destinada a promover debates.</p>
                        <button>Acessar</button>
                        </div>
                    </div>
                </div>
                <div class="rodape"><a href="admin/admin.php">Admin</a></div>
                 </div>
             </div>


    </body>
</html>