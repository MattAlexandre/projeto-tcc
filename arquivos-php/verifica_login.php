<?php
session_start();

if(!$_SESSION['email']){
    header('location: ../arquivos-html/entrar.html');
    exit();
}