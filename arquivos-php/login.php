<?php

include('../arquivos-php/conect.php');

/*validação login nulo volta para o entrar */

if(empty($_POST['email']) || empty($_POST['password'])){
    header('location: ../arquivos-html/entrar.html');
    exit();
}

/* passando os valores */
            
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);


$query = "SELECT empresa.email_empresa , empresa.senha FROM empresa WHERE email_empresa ='{$email}' AND senha ='{$password}' ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo$row;exit;

/*

if($row == 1){
    $_session['email'] = $email;
    header('location: ../arquivos-php/painel.php');
    exit();
}else{
    header('location: ../arquivos-html/entrar.html');
    exit();
}*/