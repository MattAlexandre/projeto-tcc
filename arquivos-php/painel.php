<?php

session_start();

include('../arquivos-php/verifica_login.php');

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/estilo-painel.css">
    <link rel="stylesheet" href="../estilo/index.css">
    <title>Document</title>
</head>
<body>
            <input type="checkbox" id="check">

            <!---------------------------header ----------------------------------->
            <!-- cabeçalho da pagina -->
            <header id="header">    

            <nav id="nav_topo">

            <a href="../arquivos-php/painel.php"><img src="../imagens/img-ki-preco.png" alt="imagem-logo"></a>

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
                </li>

            </ul>

            
            
        </nav>

        </header> 

        <!---------------------------main----------------------------------->
        <main>

             <!-- cmc sidebar -->
             <div class="sidebar">

                    <center>
                        <img src="../imagens/img-footer.png" alt="">
                        <h2> 
                            <?php
                            echo $_SESSION['email'];
                            ?>
                        </h2>
                    </center>

                    <a href="">
                        <ion-icon name="desktop-outline">
                            
                        </ion-icon>
                        <span>
                            prompt
                        </span>
                    </a>

                    <a href="">
                        <ion-icon name="calendar-clear-outline">
                        
                        </ion-icon>
                        <span>
                            forms
                        </span>
                    </a>


                    <a href="">
                        <ion-icon name="settings-outline">
                            
                        </ion-icon>
                        <span>
                            settings
                        </span>
                    </a>

                    <a href="../arquivos-php/logout.php">
                        <ion-icon name="exit-outline">
                            
                        </ion-icon>
                        <span>
                                exit
                        </span>
                    </a>
                    </div>

                    <!-- final sidebar -->
                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                            
                <section class="home">

                        <!--topo--> 
                        <section class="home_topo">

                        </section>

                        <!-- body -->
                        <section class="home_body">
                            <div id="grafic">

                            </div>

                            <div id="text_grafic">

                            </div>

                        </section>
                        

                        <!-- asides -->
                        <section class="home_aside">

                            <div class="h_aside" id="h_aside_01">

                            </div>

                            <div class="h_aside" id="h_aside_02">

                            </div>

                            <div class="h_aside" id="h_aside_03">

                            </div>

                        </section>

                </section>

        </main>


        <!---------------------------footer----------------------------------->

        <footer id="footer"> <!-- rodapé pagina-->

        <section id="footer_s">

            <div class="div_footer" id="div_f_01">
                <img src="../imagens/img-ki-preco.png" alt="">

                <a href=""> entre em contato conosco </a>
                
            </div>

            <div class="div_footer" id="div_f_02">
                <ul>

                    <h2> Navegue </h2>

                    <li><a href=""> Utilização</a></li>
                    <li><a href=""> Ofertas  </a></li>

                </ul>
                <ul>

                    <h2> Institucional </h2>

                    <li><a href=""> Trabalhe Conosco </a></li>
                    <li><a href=""> Dúvidas Frequentes </a></li>
                    <li><a href=""> Acessibilidade </a></li>
                </ul>

            </div>

            <div class="div_footer" id="div_f_03">
                
                <div class="div_links" id="div_l_01">

                    <a href="../arquivos-php/entrar.php"> entrar </a>

                </div>

                <div class="div_links" id="div_l_02">
                    
                    <ul id="ul_f01">

                        <li>
                            <a href="">

                                <img src="../imagens/face-escuro.png" alt="">
                                
                                <img src="../imagens/face-claro.png " alt="">
                            </a>
                        </li>

                        <li>
                            <a href="">

                                <img src="../imagens/insta-escuro.png" alt="">
                                
                                <img src="../imagens/insta-claro.png" alt="">
                            </a>
                        </li>

                        <li>
                            <a href="">

                                <img src="../imagens/twitter-escuro.png" alt="">
                                
                                <img src="../imagens/twitter-claro.png" alt="">
                            </a>
                        </li>

                        <li>
                            <a href="">

                                <img src="../imagens/abaixar-escuro.png" alt="">
                                
                                <img src="../imagens/asbaixar-claro.png" alt="">

                            </a>
                        </li>

                    </ul>

                </div>
                
            </div>

        </section id="footer_ss">

            <div id="div_footer_ss">    

                <a href=""> politica de privacidade </a>
                
                <a href=""> termos de uso </a>

                <p> © 2022 pankakes </p>

                <img src="../imagens/img-ki-preco.png" alt="">

                

            </div>

        <section>

        </section>
        </footer>
</body>
</html>
