<?php

session_start();

include('../../arquivos-php/b-end/conect.php');

/*validação login nulo volta para o entrar */



if(empty($_POST['email']) ){
    $_SESSION['emailNull'] = true;
    header('location: ../../arquivos-php/f-end/entrar.php');
    exit();
}

if(empty($_POST['password']) ){
    $_SESSION['passwordNull'] = true;
    header('location: ../../arquivos-php/f-end/entrar.php');
    exit();
}

/* passando os valores */
            
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

/*delimitando caracteres*/


$query = "SELECT email , password FROM companies WHERE email ='{$email}' AND password ='{$password}' ";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('location: ../../arquivos-php/f-end/painel.php');
    exit();
}else{
    $_SESSION['naoAutenticado'] = true;
    header('location: ../../arquivos-php/f-end/entrar.php');
    exit();
}

