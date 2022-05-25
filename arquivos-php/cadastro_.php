<?php

session_start();

include('../arquivos-php/conect.php');

/*validação cadastro nulo volta para o entrar */

if(  
    empty($_POST['email'])       ||
    empty($_POST['name'])        ||
    empty($_POST['telephone'])   ||
    empty($_POST['cep'])         ||
    empty($_POST['cnpj'])        ||
    empty($_SESSION['password']) 
    ){
    $_SESSION['campNull'] = true;
    header('location: ../arquivos-php/cadastro.php');
    exit();
}

/* passando os valores */
            
    $email     = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $name      = mysqli_real_escape_string($conexao, trim($_POST['name']));
    $telephone = mysqli_real_escape_string($conexao, trim($_POST['telephone']));
    $cep       = mysqli_real_escape_string($conexao, trim($_POST['cep']));
    $cnpj      = mysqli_real_escape_string($conexao, trim($_POST['cnpj']));
    $password  = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));


$sql = "SELECT COUNT(*) AS TOTAL FROM WHERE email_empresa  = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = $email;
    header('location: ../arquivos-php/cadastro.php');
    exit();
}


$sql = " INSERT INTO empresa (
    cnpj_empresa,
    cep,_empresa,
    nome_empresa,
    telefone_empresa,
    email_empresa,
    senha
    ) VALUES(
    '$cnpj',
    '$cep',
    '$name',
    '$telephone',
    '$email',
    '$password'
    )
    ";


/*validação insert*/

if($conexao->query(sql) === true){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('location: ../arquivos-php/cadasdtro.php');
exit();