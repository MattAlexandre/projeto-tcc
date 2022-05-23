<?php

session_start();

include('../arquivos-php/verifica_login.php');

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <h2> hello
            <?php echo $_SESSION['email'];?>
        </h2>

        <h2> <a href="../arquivos-php/logout.php">sair</a></h2>

</body>
</html>
