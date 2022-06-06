<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../estilo/estilo-cadastro.css">
    <link rel="shortcut icon" href="../imagens/favicon-kipreco.png" type="image/x-icon">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
                        Cadastre-se agora e venha fazer parte da família
                        KiPreço
                    </p>

                    <!-- validação usuario existente -->

                    <?php
                                    if(isset($_SESSION['usuario_existe'])):
                                ?>

                                        <div  id="div_title">
                                            <h1 style="
                                                color: red;
                                                font: normal bold 2vw 'arial';
                                                text-align: center;
                                                width: 100%;
                                            ">
                                                <ion-icon name="close-circle-outline"></ion-icon> usuario existente     
                                            </h1>
                                        </div>

                                <?php
                                        unset($_SESSION['usuario_existe']);
                                        endif;
                                ?>
                    
                </div>
            </section>

            <section class="formulario_cadastro" id="form_c">

                <form id="form_cadastro" method="post" action="../../arquivos-php/b-end/cadastro_.php">

                    <div class="div_form" id="div_form_c01">

                        <!-- input email -->
                        <label for=""> E-mail </label><br>
                        <input type="email"  maxlength="45" name="email" id=""><br>


                                <!-- validação campo email -->

                                <?php
                                    if(isset($_SESSION['emailNull'])):
                                    ?>

                                        <div id="div_title">
                                        
                                            <h1 style="
                                                color: red;
                                                font: normal bold 2vw 'arial';
                                                text-align: center;
                                                width: 100%;
                                            ">
                                                 <ion-icon name="close-circle-outline"></ion-icon> email vazio
                                            </h1>
                                        </div>

                                    <?php
                                        unset($_SESSION['emailNull']);
                                        endif;
                                    ?>

                                


                        <a href=""> Enviar Codigo De Verificação </a>

                    
                    </div>

                    <div class="div_form" id="div_form_c02">

                        <div class="div_input" id="div_input_01">

                            <!-- input nome -->
                            <label for=""> Nome Empresarial </label><br>
                            <input type="text" maxlength="45" name="name" id=""><br>

                                <!-- validação campo nome -->

                                <?php
                                    if(isset($_SESSION['nameNull'])):
                                    ?>

                                        <div id="div_title">
                                        
                                            <h1 style="
                                                color: red;
                                                font: normal bold 2vw 'arial';
                                                text-align: center;
                                                width: 100%;
                                            ">
                                            <ion-icon name="close-circle-outline"></ion-icon> nome vazio
                                            </h1>
                                        </div>

                                    <?php
                                        unset($_SESSION['nameNull']);
                                        endif;
                                    ?>

                            <!-- input telefone -->
                            <label for=""> Telefone </label><br>
                            <input type="number" name="telephone" id=""><br>

                                        <!-- validação campo nome -->
                                        <?php
                                                if(isset($_SESSION['telephoneNull'])):
                                                ?>

                                                    <div id="div_title">
                                                    
                                                        <h1 style="
                                                            color: red;
                                                            font: normal bold 2vw 'arial';
                                                            text-align: center;
                                                            width: 100%;
                                                        ">
                                                            <ion-icon name="close-circle-outline"></ion-icon> Telefone vazio
                                                        </h1>
                                                    </div>

                                                <?php
                                                    unset($_SESSION['telephoneNull']);
                                                    endif;
                                                ?>

                            <!-- input CEP -->
                            <label for=""> CEP </label><br>
                            <input type="number" name="cep" id=""><br> 

                                        <!-- validação campo cep -->
                                        <?php
                                                if(isset($_SESSION['cepNull'])):
                                                ?>

                                                    <div id="div_title">
                                                    
                                                        <h1 style="
                                                            color: red;
                                                            font: normal bold 2vw 'arial';
                                                            text-align: center;
                                                            width: 100%;
                                                        ">
                                                            <ion-icon name="close-circle-outline"></ion-icon> cep vazio
                                                        </h1>
                                                    </div>

                                                <?php
                                                    unset($_SESSION['cepNull']);
                                                    endif;
                                                ?>

                        </div>

                        <div class="div_input" id="div_input_02">

                            <!-- input CNPJ -->
                            <label for=""> CNPJ </label><br>
                            <input type="number" name="cnpj" id=""><br>

                                        <!-- validação campo cnpj -->
                                        <?php
                                                if(isset($_SESSION['cnpjNull'])):
                                                ?>

                                                    <div id="div_title">
                                                    
                                                        <h1 style="
                                                            color: red;
                                                            font: normal bold 2vw 'arial';
                                                            text-align: center;
                                                            width: 100%;
                                                        ">
                                                            <ion-icon name="close-circle-outline"></ion-icon> cnpj vazio
                                                        </h1>
                                                    </div>

                                                <?php
                                                    unset($_SESSION['cnpjNull']);
                                                    endif;
                                                ?>

                            <!-- input data de abertura -->
                            <label for=""> Senha </label><br>
                            <input type="password" maxlength="11" name="password" id=""><br>

                                        <!-- validação campo cep -->
                                        <?php
                                                if(isset($_SESSION['passwordNull'])):
                                                ?>

                                                    <div id="div_title">
                                                    
                                                        <h1 style="
                                                            color: red;
                                                            font: normal bold 2vw 'arial';
                                                            text-align: center;
                                                            width: 100%;
                                                        ">
                                                            <ion-icon name="close-circle-outline"></ion-icon> senha vazio
                                                        </h1>
                                                    </div>

                                                <?php
                                                    unset($_SESSION['passwordNull']);
                                                    endif;
                                                ?>


                            <label id="label_s" for="" style="color: rgba(0, 0, 0, 0);"> a </label>
                            <!-- input cadastrar  -->
                            <input  id="submit" type="submit" value="Cadastrar"><br>
                        </div>
                    </div>

                    <div class="div_form" id="div_form_c03">
                        <div id="div_cbox">
                            <!-- -->
                            <input type="checkbox" name="aceptEmail" id="">
                            <label for=""> Aceita Receber Email Do KiPreço </label><br>
                            

                            <!---->
                            <input type="checkbox" name="aceptTerms" id="">
                            <label for=""> Li e Aceito os Regulamentos do Site </label>

                            <!-- validação campo cep -->
                            <?php
                                                if(isset($_SESSION['aceptNull'])):
                                                ?>

                                                    <div id="div_title">
                                                    
                                                        <h1 style="
                                                            color: red;
                                                            font: normal bold 2vw 'arial';
                                                            text-align: center;
                                                            width: 100%;
                                                        ">
                                                            <ion-icon name="close-circle-outline"></ion-icon> box vazia
                                                        </h1>
                                                    </div>

                                                <?php
                                                    unset($_SESSION['aceptNull']);
                                                    endif;
                                                ?>
                            
                        </div>
                    </div>
                </form>
        </section>
        </section>
    </section>
</body>
</html>