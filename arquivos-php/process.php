<?php

/*recebendo dados do login*/ 

        $emailLogin = $_POST['emailL'];         /*email login */
        $password = $_POST['password'];         /*senha*/

/*recebendo dados do cadastro*/

        $emailCadastro = $_POST['emailC'];      /*email cadastro */
        $name = $_POST['name'];                 /* nome  */
        $telephone = $_POST['telephone'];       /*telefone */ 
        $cep = $_POST['cep'];                   /*cep */
        $cnpj = $_post['cnpj'];                 /* cnpj */
        $openingDate = $post['openingDate'];    /*data de abertura*/

/* checkbox */

        $aceptEmail = $_POST['aceptEmail'];
        $aceptTerms = $_POST['aceptTerms'];