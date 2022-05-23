<?php

session_start();
session_destroy();
header('location: ../arquivos-php/entrar.php');
exit();