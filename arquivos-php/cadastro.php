<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../estilo/estilo-cadastro.css">
    <link rel="shortcut icon" href="../imagens/favicon-kipreco.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cadastro  </title>
</head>
<body>
    <section class="body_cadastro" id="body_cadastro" > <!-- corpo da pagina -->

        <section id="central">

            <section class="conteudo_cadastro" id="conteudo_cadastro"><!-- conteudo cacbeçalho, text-->

                <div class="text_cadastro" id="text_c01">
                    <h1> Criar Conta </h1>

                    <p>
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Impedit minima simil
                        ique voluptate facilis eius amet, inci
                        dunt quasi quibusdam quae, iste molest
                    </p>


                    <!-- validação campo email -->

                    <?php
                        if(isset($_SESSION['campNull'])):
                        ?>

                            <div id="div_title">
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
                                    campo vazio
                                </h1>
                            </div>

                        <?php
                            unset($_SESSION['campNull']);
                            endif;
                        ?>

                    <!-- validação usuario existente -->

                    <?php
                        if(isset($_SESSION['usuario_existe'])):
                    ?>

                            <div  id="div_title">
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
                                    usuario existente
                                </h1>
                            </div>

                    <?php
                            unset($_SESSION['usuario_existe']);
                            endif;
                    ?>

                    <!-- confirmação cadastro  -->

                    <?php
                        if(isset($_SESSION['status_cadastro'])):
                    ?>

                            <div  id="div_title">
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
                                    usuario cadastrado , <a href="../arquivos-php/entrar.php"> acesse </a>
                                </h1>
                            </div>

                    <?php
                            unset($_SESSION['status_cadastro']);
                            endif;
                    ?>

                </div>
            </section>

            <section class="formulario_cadastro" id="form_c">

                <form id="form_cadastro" method="post" action="../arquivos-php/cadastro_.php">

                    <div class="div_form" id="div_form_c01">

                        <!-- input email -->
                        <label for=""> e-mail </label><br>
                        <input type="email" name="email" id=""><br>


                        <a href=""> Enviar Codigo De Verificação </a>

                    
                    </div>

                    <div class="div_form" id="div_form_c02">

                        <div class="div_input" id="div_input_01">

                            <!-- input nome -->
                            <label for=""> Nome Empresarial </label><br>
                            <input type="text" name="name" id=""><br>

                            <!-- input telefone -->
                            <label for=""> Telefone </label><br>
                            <input type="number" name="telephone" id=""><br>

                            <!-- input CEP -->
                            <label for=""> cep </label><br>
                            <input type="number" name="cep" id=""><br> 

                        </div>

                        <div class="div_input" id="div_input_02">

                            <!-- input CNPJ -->
                            <label for=""> cnpj </label><br>
                            <input type="number" name="cnpj" id=""><br>

                            <!-- input data de abertura -->
                            <label for=""> senha </label><br>
                            <input type="password" name="password" id=""><br>

                            <label id="label_s" for="" style="color: rgba(0, 0, 0, 0);"> a </label>
                            <!-- input cadastrar  -->
                            <input  id="submit" type="submit" value="Cadastrar"><br>
                        </div>
                    </div>

                    <div class="div_form" id="div_form_c03">
                        <div id="div_cbox">
                            <!-- -->
                            <input type="checkbox" name="aceptEmail" id="">
                            <label for=""> Aceitas Receber Email Do ki-preço </label><br>
                            

                            <!---->
                            <input type="checkbox" name="aceptTerms" id="">
                            <label for=""> Li e Aceitos os Regulamentos do Site </label>
                            
                        </div>
                    </div>
                </form>
        </section>
        </section>
    </section>
</body>
</html>