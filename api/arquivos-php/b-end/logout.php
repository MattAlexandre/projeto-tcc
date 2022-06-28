<?php

session_start();
session_destroy();
header('location: ../../arquivos-php/f-end/entrar.php');
exit();