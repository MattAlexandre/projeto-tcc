<?php

session_start();

include('../../arquivos-php/b-end/verifica_login.php'); 
include('../../arquivos-php/b-end/conect.php'); 

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo/estilo-painel.css">
    <link rel="stylesheet" href="../../estilo/index.css">
    <link rel="stylesheet" href="../../estilo/estilo-produto.css">
    <link rel="shortcut icon" href="../imagens/favicon-kipreco.png" type="image/x-icon">
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
                    <a href="#">Navegue</a>

                    <ul>
                        <li id="list"> <a href="#"> Utilização </a></li>
                        <li id="list"> <a href="#"> Assinatura  </a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Institucional</a>

                    <ul>
                        <li id="list"> <a href="#"> Trabalhe conosco   </a></li>
                        <li id="list"> <a href="#"> Dúvidas frequentes </a></li>
                        <li id="list"> <a href="#"> Acessibilidade     </a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"> Contato </a>
                </li>

            </ul>

            
            
        </nav>

        </header> 

        <!---------------------------main----------------------------------->
        <main>

             <!-- cmc sidebar -->
             <div class="sidebar">

                    <center>
                        <img src="../../imagens/img-footer.png" alt="">
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
                                home
                            </span>
                        </a>

                        <a href="../../arquivos-php/f-end/produtos.php">
                            <ion-icon name="cube-outline">
                            
                            </ion-icon>
                            <span>
                                produtos
                            </span>
                        </a>

                        <a href="../arquivos-php/f-end/ferramenta.php">
                            <ion-icon name="settings-outline">
                                
                            </ion-icon>
                            <span>
                                ferramenta
                            </span>
                        </a>

                        <a href="../../arquivos-php/b-end/logout.php">
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
                            
                 <!-----------------------conteudo------------------------>
                    <section  class="produto">

                            <!--topo--> 
                            <section class="topo_p">
                                <h1>Produtos</h1>

                                <p>
                                    Cadastre os seus produtos.
                                </p>

                            </section>

                            <!-- body -->

                            <section class="body_p">

                                <div class="list_p">
                                                        <!-- produto existe -->
                                                        <?php
                                                            if(isset($_SESSION['cadastro_produto'])):
                                                        ?>
                                                            <div  class="div_conteudo_e" id="div_title">
                                                                <h1 style="
                                                                    color: #507997;
                                                                    font: normal bold 2vw 'arial';
                                                                    text-align: center;
                                                                    width: 100%;
                                                                ">
                                                                    <ion-icon name="checkmark-outline"></ion-icon> Produto cadastrado
                                                                </h1>
                                                            </div>
                                                        <?php
                                                            endif;
                                                            unset($_SESSION['cadastro_produto']);
                                                        ?>

                                                        <!-- produto existe -->
                                                        <?php
                                                            if(isset($_SESSION['atualizado'])):
                                                        ?>
                                                            <div  class="div_conteudo_e" id="div_title">
                                                                <h1 style="
                                                                    color: #507997;
                                                                    font: normal bold 2vw 'arial';
                                                                    text-align: center;
                                                                    width: 100%;
                                                                ">
                                                                    <ion-icon name="checkmark-outline"></ion-icon> Produto atualizado
                                                                </h1>
                                                            </div>
                                                        <?php
                                                            endif;
                                                            unset($_SESSION['atualizado']);
                                                        ?>
                                    <table> <!--tabela -->

                                    <?php
                                        $consulta = "SELECT * FROM produtos";
                                        $con = mysqli_query($conexao, $consulta);
                                       /* $result = mysqli_query($conexao, $query);*/
                                    ?>

                                        <tr><!-- linha -->
                                            <td >produto </td>
                                            <td >Nome produto </td>
                                            <td> Descrição </td>
                                            <td> Código de barra </td>
                                            <td> Marca </td>
                                            <td> Ki Preço </td>
                                        </tr>

                                    <?php
                                        while($dado = $con->fetch_array()){
                                    ?>
                                        <tr>

                                            <td>
                                                <?php echo $dado['id_produto']; ?> 
                                            </td>

                                            <td>
                                                <?php echo $dado['nome_produto']; ?> 
                                            </td>

                                            <td>
                                                <?php echo $dado['desc_produto']; ?>
                                            </td>

                                            <td>
                                                <?php echo $dado['barCode_produto']; ?>
                                            </td>

                                            <td> 
                                                <?php echo $dado['marca_produto']; ?>
                                            </td>

                                            <td>
                                            <a href="../../arquivos-php/f-end/update.php? id=<?php echo $dado['id_produto']; ?> ">
                                                <ion-icon name="pencil-outline">
                                
                                                </ion-icon>
                                                    Editar 
                                                </a>
                                                <a href="../../arquivos-php/b-end/delete.php? id=<?php echo $dado['id_produto']; ?> ">
                                                <ion-icon name="trash-outline">
                                
                                                </ion-icon>
                                                    Excluir
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    </table>
                                </div>

                            </section>

                            <!-- final -->
                            <section class="final_p">
                                <a href="../../arquivos-php/f-end/cadastro-produtos.php">Cadastrar - Produto</a>
                            </section>


                    </section>

        </main>


        <!---------------------------footer----------------------------------->

        <footer id="footer"> <!-- rodapé pagina-->

        <section id="footer_s">

            <div class="div_footer" id="div_f_01">
                <img src="../../imagens/img-ki-preco.png" alt="">

                <a href=""> Entre em contato conosco. </a>
                
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



                </div>

                <div class="div_links" id="div_l_02">
                    
                    <ul id="ul_f01">

                        <li>
                            <a href="">

                                <img src="../../imagens/face-escuro.png" alt="">
                                
                                <img src="../../imagens/face-claro.png " alt="">
                            </a>
                        </li>

                        <li>
                            <a href="">

                                <img src="../../imagens/insta-escuro.png" alt="">
                                
                                <img src="../../imagens/insta-claro.png" alt="">
                            </a>
                        </li>

                        <li>
                            <a href="">

                                <img src="../../imagens/twitter-escuro.png" alt="">
                                
                                <img src="../../imagens/twitter-claro.png" alt="">
                            </a>
                        </li>

                        <li>
                            <a href="">

                                <img src="../../imagens/abaixar-escuro.png" alt="">
                                
                                <img src="../../imagens/asbaixar-claro.png" alt="">

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

                <img src="../../imagens/img-ki-preco.png" alt="">

                

            </div>

        <section>

        </section>
        </footer>
</body>
</html>
