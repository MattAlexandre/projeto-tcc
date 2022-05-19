<?php

session_start();
include('../arquivos-php/verifica_login.php');
?>

<h2> hello , <?php echo $_SESSION['usuario']; ?></h2>
<h2> <a href="../arquivos-php/logout.php">sair</a></h2>