<?php

session_start();

include('../../arquivos-php/b-end/verifica_login.php');
include('../../arquivos-php/graficos/grafico01.php');
include('../../arquivos-php/graficos/grafico02.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo/index.css">
    <link rel="shortcut icon" href="../../imagens/favicon-kipreco.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../estilo/estilo-painel.css">
    <title> ki preco </title>

    
</head>
<body>
            <input type="checkbox" id="check">

            <!---------------------------header ----------------------------------->
            <!-- cabeçalho da pagina -->
            <header id="header">    

            <nav id="nav_topo">

            <a href="../../arquivos-php/f-end/painel.php"><img src="../../imagens/img-ki-preco.png" alt="imagem-logo"></a>

            <ul>

                <li>
                     <label for="check">
                         <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
                    </label>
                </li>

                <li>
                    <a href=""> </a>
                </li>

                <li>
                    <a href="#">navegue</a>

                    <ul>
                        <li id="list"> <a href="#"> utilização </a></li>
                        <li id="list"> <a href="#"> Ofertas    </a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Institucional</a>

                    <ul>
                        <li id="list"> <a href="#"> trabalhe conosco   </a></li>
                        <li id="list"> <a href="#"> duvidas frequentes </a></li>
                        <li id="list"> <a href="#"> acessibilidade     </a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"> contato </a>

                        <ul>
                            <li id="list"> <a href="https://www.instagram.com/oficialkipreco/" target="_blank"> Instagram  </a></li>
                            <li id="list"> <a href="https://www.facebook.com/oficialkipreco" target="_blank">   facebook   </a></li>
                            <li id="list"> <a href="https://twitter.com/KiPreco" target="_blank">               Twitter    </a></li>
                        </ul>
                </li>

            </ul>

            
            
        </nav>

        </header> 

        <!---------------------------main----------------------------------->
        <main>

             <!-- cmc sidebar -->
             <div class="sidebar">

                    <center>
                        <img src="../../imagens/img-ki-preco.png" alt="">
                        <h2> 
                            <?php
                            echo $_SESSION['email'];
                            ?>
                        </h2>
                    </center>

                        <a href="../../arquivos-php/f-end/painel.php">
                            <ion-icon name="home-outline">
                                
                            </ion-icon>
                            <span>
                                Home
                            </span>
                        </a>

                        <a href="../../arquivos-php/f-end/produtos.php">
                            <ion-icon name="cube-outline">
                            
                            </ion-icon>
                            <span>
                                Produtos
                            </span>
                        </a>

                        <a href="../../arquivos-php/b-end/logout.php">
                            <ion-icon name="exit-outline">
                                
                            </ion-icon>
                            <span>
                                    Sair
                            </span>
                        </a>
                    </div>

                    <!-- final sidebar -->
                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                            
                <section class="home">

                        <!--topo--> 
                         <section class="home_topo">
                            <h1 style="
                                font: normal normal 70px var(--font1);
                                font-size: ;
                                color: var(--cor5);
                                text-align: center;
                                padding: 10px;
                                margin:5px;
                            ">
                                Ki Preço
                            </h1>
                        </section> 

                        <!-- body -->
                        <section class="home_body">
                            
                            <!--grafico 1--> 

                            <div id="grafic">

                                <!-- grafico 1 -->
                                <div id="chart_div" style="width: 70%; margin:auto;  height: 100%;"></div>

                            </div> 

                        </section>

                        <section class="home_body">
                            
                            <!--grafico 2--> 

                            <div id="grafic">

                                <!-- grafico 2 -->
                                <div id="piechart" style="width: 70%; margin:auto;  height: 100%;"></div>

                            </div> 

                        </section>
                        
                </section>

        </main>


        <!---------------------------footer----------------------------------->

        
</body>
</html>
