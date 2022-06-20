<?php

session_start();

include('../../arquivos-php/b-end/verifica_login.php'); 
include('../../arquivos-php/b-end/conect.php'); 


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        

        $query = "DELETE from products  where id = '$id'";

        $result = mysqli_query($conexao, $query);

        if(!$result){
            die("query failend".mysqli_error());
        }
        else{
            $_SESSION['delete'] = true;
            header('location: ../../arquivos-php/f-end/produtos.php');
            exit();
        }
    }   