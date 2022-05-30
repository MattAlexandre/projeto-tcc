<?php


if(!$_SESSION['email']){
    header('location: ../../arquivos-php/f-end/entrar.php');
    exit();
}