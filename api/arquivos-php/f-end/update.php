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
    <link rel="stylesheet" href="../../estilo/index.css">
    <link rel="stylesheet" href="../../estilo/estilo-cadastro-produtos.css">
    <link rel="stylesheet" href="../../estilo/estilo-painel.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="shortcut icon" href="../imagens/favicon-kipreco.ico" type="image/x-icon">
    <title> ki preco </title>

    
</head>
<body>
            <input type="checkbox" id="check">

            <!---------------------------header ----------------------------------->
            <!-- cabeçalho da pagina -->
            <header id="header">    

            <nav id="nav_topo">

            <a href="../../arquivos-php/f-end/painel.php"><img src="../../imagens/remo.png" alt="imagem-logo"></a>

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
                        <img src="../../imagens/remo.png" alt="">
                        <h2> 
                            <?php echo $_SESSION['email']; ?>
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
                                    sair
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

                                    <div class="list_p"> <!-- forms -->
                                   
                                    <?php /* adicionadno o conteudo das variaveis nos inputs */ 
                                    
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                    

                                        $query = "SELECT * FROM products where id = '$id' ";
                                        $result = mysqli_query($conexao, $query);

                                        if(!$result){
                                            die("query failed".mysqli_error());
                                        }
                                        else{
                                                $row = mysqli_fetch_assoc($result);

                                                
                                        }
                                    }
                                    ?>

                                        <?php   /* update dos campos */ 
                                    
                                        if(isset($_POST['atualizar_produto'])){


                                            if(isset($_GET['newId'])){
                                                $id = $_GET['newId'];
                                            }
                                        

                                            $newName  = $_POST['newName'];
                                            $newDesc  = $_POST['newDesc'];
                                            $newCod   = $_POST['newCod'];
                                            $newMarca = $_POST['newMarca'];


                                            $query = "UPDATE products SET name='$newName', description='$newDesc', bar_code='$newCod', brand='$newMarca' WHERE id = '$id' ";
                                            $result = mysqli_query($conexao, $query);

                                            if(!$result){
                                                die("query failed".mysqli_error());
                                            }
                                            if ($result){
                                                 
                                                $_SESSION['atualizado'] = true;
                                                echo" <h1 style=' color:var(--cor2);  font-family:var(--font1);'> Produto Atualizado <a href='../../arquivos-php/f-end/produtos.php'
                                                 style='
                                                 color:var(--cor5); 
                                                 font-family:var(--font1);
                                                 border-radius: 10px;
                                                 padding:10px
                                                 background-color: var(--cor6);
                                                 '> acesse aqui <a/></h1>";
                                                exit;
                                            }
                                        }
                                    
                                    ?>

                                    <form method="post" action="../../arquivos-php/f-end/update.php? newId=<?php echo $id; ?>" id="form">
                                            

                                        <div id="inputs">
                                            
                                                
                                            <div clas="input_p" id="input_p01">
                                                        

                                                <label class="text_f" for=""> Nome Produto </label><br>  <!-- textbox name -->
                                                <input class="input_c" maxlength="45" type="text" name="newName" value="<?php echo $row['name']; ?>"><br>

                                                     <!-- name null --> 
                                                    <?php
                                                            if(isset($_SESSION['nameNull'])):
                                                        ?>
                                                            <div  class="div_conteudo_e" id="div_title">
                                                                <h1 style="
                                                                    color: red;
                                                                    font: normal bold 1.5vw 'arial';
                                                                    text-align: center;
                                                                    width: 100%;
                                                                ">
                                                                    <ion-icon name="close-circle-outline"></ion-icon> Nome vazio
                                                                </h1>
                                                            </div>
                                                        <?php
                                                            endif;
                                                            unset($_SESSION['nameNull']);
                                                        ?>

                                                <label class="text_f" for=""> Descrição Produto </label><br>  <!-- textbox descrição produto-->
                                                <input class="input_c" maxlength="45" type="text" name="newDesc"  value="<?php echo $row['description']; ?>" ><br>


                                                    <!-- desc null --> 
                                                    <?php
                                                            if(isset($_SESSION['descNull'])):
                                                        ?>
                                                            <div  class="div_conteudo_e" id="div_title">
                                                                <h1 style="
                                                                    color: red;
                                                                    font: normal bold 1.5vw 'arial';
                                                                    text-align: center;
                                                                    width: 100%;
                                                                ">
                                                                    <ion-icon name="close-circle-outline"></ion-icon> Descrição vazia
                                                                </h1>
                                                            </div>
                                                        <?php
                                                            endif;
                                                            unset($_SESSION['descNull']);
                                                        ?>

                                            </div>

                                            <div clas="input_p" id="input_p02">

                                                <label class="text_f" for=""> Codigo de barra </label><br>  <!-- textbox codigo de barra -->
                                                <input class="input_c" type="number" name="newCod" value="<?php echo $row['bar_code']; ?>" ><br>

                                                    <!-- codBar null --> 
                                                    <?php
                                                            if(isset($_SESSION['codPNull'])):
                                                        ?>
                                                            <div  class="div_conteudo_e" id="div_title">
                                                                <h1 style="
                                                                    color: red;
                                                                    font: normal bold 1.5vw 'arial';
                                                                    text-align: center;
                                                                    width: 100%;
                                                                ">
                                                                    <ion-icon name="close-circle-outline"></ion-icon> Codigo vazio
                                                                </h1>
                                                            </div>
                                                        <?php
                                                            endif;
                                                            unset($_SESSION['codPNull']);
                                                        ?>

                                               


                                                <label class="text_f" for=""> Marca Produto </label><br>  <!-- textbox descrição produto-->
                                                <input class="input_c" maxlength="45" type="text" name="newMarca" value="<?php echo $row['brand']; ?>"><br>

                                                 <!-- marca null --> 
                                                        <?php
                                                            if(isset($_SESSION['marcaNull'])):
                                                        ?>
                                                            <div  class="div_conteudo_e" id="div_title">
                                                                <h1 style="
                                                                    color: red;
                                                                    font: normal bold 1.5vw 'arial';
                                                                    text-align: center;
                                                                    width: 100%;
                                                                ">
                                                                    <ion-icon name="close-circle-outline"></ion-icon> Marca Vazia
                                                                </h1>
                                                            </div>
                                                        <?php
                                                            endif;
                                                            unset($_SESSION['marcaNull']);
                                                        ?>

                                            </div>

                                        </div>

                                        <input id="input_env" type="submit" value="Atualizar" name="atualizar_produto"><br> <!-- bnt enviar -->

                                                        <!-- produto existe -->
                                                        <?php
                                                            if(isset($_SESSION['cod_existe'])):
                                                        ?>
                                                            <div  class="div_conteudo_e" id="div_title">
                                                                <h1 style="
                                                                    color: red;
                                                                    font: normal bold 1.5vw 'arial';
                                                                    text-align: center;
                                                                    width: 100%;
                                                                ">
                                                                    <ion-icon name="close-circle-outline"></ion-icon> Produto Existe
                                                                </h1>
                                                            </div>
                                                        <?php
                                                            endif;
                                                            unset($_SESSION['cod_existe']);
                                                        ?>

                                    </form>

                            </div>

        </main>
        
</body>
</html>
