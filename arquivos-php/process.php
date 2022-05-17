<?php
/*requerimento arquivos */


require_once 'pessoa.php';


/*recebendo dados do login*/ 

        $emailLogin = $_POST['emailL'];         /*email login */
        $passwordL = $_POST['passwordL'];         /*senha*/

/*recebendo dados do cadastro*/

        $emailCadastro = $_POST['emailC'];      /*email cadastro */
        $name = $_POST['name'];                 /* nome  */
        $telephone = $_POST['telephone'];       /*telefone */ 
        $cep = $_POST['cep'];                   /*cep */
        $cnpj = $_post['cnpj'];                 /* cnpj */
        $passwordC = $post['passwordC'];    /*data de abertura*/

/* checkbox */

        $aceptEmail = $_POST['aceptEmail'];
        $aceptTerms = $_POST['aceptTerms'];


/*instancia classe*/

$empresa = new Empresa("t.c.c","localhost","root","");

             