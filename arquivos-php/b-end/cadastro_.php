<?php

session_start();

include('../../arquivos-php/b-end/conect.php');

/*validação cadastro nulo volta para o entrar */

if(  
    empty($_POST['email'])         ||
    empty($_POST['name'])          ||
    empty($_POST['telephone'])     ||
    empty($_POST['cep'])           ||
    empty($_POST['cnpj'])          ||
    empty($_POST['password'])      ||
    empty($_POST['aceptEmail'])    ||
    empty($_POST['aceptTerms'])

    ){
    $_SESSION['campNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/* passando os valores */
            
    $email     = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $name      = mysqli_real_escape_string($conexao, trim($_POST['name']));
    $telephone = mysqli_real_escape_string($conexao, trim($_POST['telephone']));
    $cep       = mysqli_real_escape_string($conexao, trim($_POST['cep']));
    $cnpj      = mysqli_real_escape_string($conexao, trim($_POST['cnpj']));
    $password  = mysqli_real_escape_string($conexao, trim($_POST['password']));

    /*validação emal existente */

$sql = "SELECT COUNT(*) as total FROM empresa WHERE email_empresa  = '$email' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = TRUE;
    header('Location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/*insert*/
                          
$sql = "INSERT INTO empresa(cnpj_empresa, cep_empresa, nome_empresa, telefone_empresa, email_empresa, senha) VALUES ('$cnpj', '$cep', '$name', '$telephone', '$email', '$password')";

/*validação insert*/

if($conexao->query($sql) === TRUE){
     $_SESSION['status_cadastro'] = TRUE;
} 

$conexao->close();

header('Location: ../../arquivos-php/f-end/entrar.php');
exit;


