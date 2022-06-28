<?php

session_start();

include('../../arquivos-php/b-end/conect.php');

/*validação cadastro nulo volta para o entrar */


/* email nulo */
if(empty($_POST['email']) ){
    $_SESSION['emailNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/* name nulo */
if(empty($_POST['name']) ){
    $_SESSION['nameNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/* telefone nulo */
if(empty($_POST['telephone']) ){
    $_SESSION['telephoneNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}


/* cep nulo */
if(empty($_POST['cep']) ){
    $_SESSION['cepNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/* cnpj nulo */
if(empty($_POST['cnpj']) ){
    $_SESSION['cnpjNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/* password nulo */
if(empty($_POST['password']) ){
    $_SESSION['passwordNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/* acept nulo */
if(empty($_POST['aceptEmail']) || empty($_POST['aceptTerms'])  ){
    $_SESSION['aceptNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/* passando os valores */
            
    $email     = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $name      = mysqli_real_escape_string($conexao, trim($_POST['name']));
    $cep       = mysqli_real_escape_string($conexao, trim($_POST['cep']));
    $cnpj      = mysqli_real_escape_string($conexao, trim($_POST['cnpj']));
    $password  = mysqli_real_escape_string($conexao, trim($_POST['password']));


    $var = $_POST['name_input'];

    /*validação emal existente */

$sql = "SELECT COUNT(*) as total FROM companies WHERE email  = '$email' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = TRUE;
    header('Location: ../../arquivos-php/f-end/cadastro.php');
    exit();
}

/*insert*/
                          
$sql = " INSERT INTO companies (cnpj,  zip_code, name, email, password) VALUES ('$cnpj', '$cep', '$name', '$email', '$password') ";

/*validação insert*/

if($conexao->query($sql) === TRUE){
     $_SESSION['status_cadastro'] = TRUE;
} 
else{
    $_SESSION['status_not_cadastro'] = TRUE;
}


$conexao->close();

header('Location: ../../arquivos-php/f-end/entrar.php');
exit();


