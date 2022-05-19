<?php

session_start();
session_destroy();
header('location: ../arquivos-html/entrar.html');
exit();