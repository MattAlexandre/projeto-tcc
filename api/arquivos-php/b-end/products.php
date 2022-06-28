<?php

session_start();

include('../../arquivos-php/b-end/conect.php');

/*validação cadastro nulo volta para o entrar */


/* nome nulo */
if(empty($_POST['nameP']) ){
    $_SESSION['nameNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro-produtos.php');
    exit();
}

/* descrição  nulo */
if(empty($_POST['descP']) ){
    $_SESSION['descNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro-produtos.php');
    exit();
}

/* codBar nulo */
if(empty($_POST['codP']) ){
    $_SESSION['codPNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro-produtos.php');
    exit();
}


/* marca nulo */
if(empty($_POST['marcaP']) ){
    $_SESSION['marcaNull'] = TRUE;
    header('location: ../../arquivos-php/f-end/cadastro-produtos.php');
    exit();
}


/* passando os valores */
            
    $name      = mysqli_real_escape_string($conexao, trim($_POST['nameP']));
    $desc      = mysqli_real_escape_string($conexao, trim($_POST['descP']));
    $cod       = mysqli_real_escape_string($conexao, trim($_POST['codP']));
    $marca     = mysqli_real_escape_string($conexao, trim($_POST['marcaP']));


/*validação emal existente */

$sql = "SELECT COUNT(*) as total FROM produtos WHERE barCode_produto  = '$cod' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['cod_existe'] = TRUE;
    header('Location: ../../arquivos-php/f-end/cadastro-produtos.php');
    exit();
}

/*insert*/
                          
$sql = " INSERT INTO products (name, description, bar_code, brand, image) VALUES('$name','$desc','$cod','$marca', '')";
/*validação insert*/

if($conexao->query($sql) === TRUE){
     $_SESSION['cadastro_produto'] = TRUE;
} 

$conexao->close();

header('Location: ../../arquivos-php/f-end/produtos.php');
exit;


