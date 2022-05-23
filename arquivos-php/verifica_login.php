<?php


if(!$_SESSION['email']){
    header('location: ../arquivos-php/entrar.php');
    exit();
}