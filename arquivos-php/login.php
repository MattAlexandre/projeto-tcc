<?php

session_start();

include('../arquivos-php/conect.php');

/*validação login nulo volta para o entrar */

if(empty($_POST['email']) || empty($_POST['password'])){
    $_SESSION['campNull'] = true;
    header('location: ../arquivos-php/entrar.php');
    exit();
}

/* passando os valores */
            
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);


$query = "SELECT email_empresa , senha FROM empresa WHERE email_empresa ='{$email}' AND senha ='{$password}' ";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('location: ../arquivos-php/painel.php');
    exit();
}else{
    $_SESSION['naoAutenticado'] = true;
    header('location: ../arquivos-php/entrar.php');
    exit();
}

