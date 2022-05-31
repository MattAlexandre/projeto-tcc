<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../estilo/estilo-entrar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> entrar site </title>
</head>
<body>
    
    <section class="body_entrar" id="body_entrar01"> <!-- div geral, corpo da pagina -->

        <section class="box_entrar" id="box_entrar01"> <!-- div box, que vai concentrar o conteudo -->   

            <aside class="aside_entrar" id="aside_e01"> <!-- primeiro aside, detem as divs e seus respectivos conteudo -->

                <div class="conteudo_entrar" id="conteudo_01"> <!-- primeira div, detem os conteudos titulo e forms -->

                    <div class="div_conteudo_e" id="div_title">
                        <h1> Entrar </h1> <!-- titulo -->
                    </div>

                    <!-- campo null --> 
                    <?php
                        if(isset($_SESSION['campNull'])):
                    ?>
                        <div  class="div_conteudo_e" id="div_title">
                            <h1 style="
                                color: white;
                                font: normal bold 2.5vw arial;
                                text-align: center;
                                margin: 15px 10px;
                                background-color: red;
                                padding: 7px 2px;
                                border-radius: 15px;
                                width: 100%;
                            ">
                                campo vazio
                            </h1>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['campNull']);
                    ?>

                    <!-- usuario invalido -->
                    
                    <?php
                        if(isset($_SESSION['naoAutenticado'])):
                    ?>
                        <div  class="div_conteudo_e" id="div_title">
                            <h1 style="
                                color: white;
                                font: normal bold 2.5vw arial;
                                text-align: center;
                                margin: 15px 10px;
                                background-color: red;
                                border-radius: 15px;
                                padding: 7px 2px;
                                width: 100%;
                            ">
                                usuario invalido
                            </h1>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['naoAutenticado']);
                    ?>


                    

                    <div class="div_conteudo_e" id="div_formulario">

                        <form method="post" action="../../arquivos-php/b-end/login.php" id="form"> <!-- formulario -->

                            <label class="text_f"   for=""> E-mail </label><br>  <!-- textbox email -->
                            <input class=input_c maxlength="45" type="email" name="email" ><br>

                            <label class="text_f" for=""> Senha </label> <br><!-- textbox senha -->
                            <input class=input_c maxlength="11" type="password" name="password"><br>

                            <input id="input_env" type="submit" value="Entrar"><br> <!-- bnt enviar -->

                        </form>
                    </div>

                    <div class="div_conteudo_e" id="div_ou">

                        <h2> ou </h2>

                    </div>  

                    <div class="div_conteudo_e" id="div_cadastro">

                        <p> Não Possui Conta ?</p>

                        <a href="../../arquivos-php/f-end/cadastro.php"> Inscrever-se </a>

                    </div>

                    
                </div>
                <hr>
            </aside>

            <aside class="aside_entrar" id="aside_e02"> <!-- segundo aside, detem as divs e seus respectivos conteudos -->

                <div class="conteudo_entrar" id="conteudo_02">

                    <div  class="div_conteudo_e" id="div_text">
                        <h1> Cadastre-se agora em nossa plataforma </h1>

                        <p>
                            O KiPreço muda e facilita o seu dia-a-dia.

                        </p>

                    </div>

                    <div  class="div_conteudo_e" id="div_img">

                        <img src="../../imagens/img-ki-preco.png" alt="imagem-logo-ki img-ki-preco">
                        
                    </div>
                </div>
            </aside>

            <aside>

            </aside>

        </section>
    </section>
</body>
</html>