<?php 

try {

    $pdo = new PDO("mysql:dbname=t.c.c;host=localhost","root","");

} catch (PDOException $e) {
    echo"erro banco : ".$e->getMessage();
}catch(Exception $e){
    echo"erro generico".$e->getMessage();
}
pdo()->close();


// $var = (instancia var) new class( "parametros1(banco de dados) bdname;host;", parametro2, "usuario","senha" )
// bdname - nome do banco de dados 
// host - endereço do servidor
// usuario e senha 

/*
$pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");

//----------- inserção de dados-INERT -----------------

//primeira forma - passar algum parametro e substituir
/*

$res = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email) 
VALUE(:n, :t, :E)");

//fomrmas parametros

//primeira - aceita parametros genericos 
$res->bindValue(":n","miriam");
$res->bindValue(":t","981220724");
$res->bindValue(":e","miriam@gmail.com")
$res->execute();//executar o insert
*/



//segunda - so aceita parametros  por variaveis
/*
$nome ="miriam";
$res->bindParam(":n","");
*/

//segunda forma  - nao precisa fazer nehuma substituicao 
/*
$pdo->query("INSERT INTO pessoa(nome,telefone,email) 
    value('miriam','981220724','mariam@gmail.com')");
*/

//----- DELETE AND UPDATE -----------------------
/*

$cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id ");
$id = 2;
$cmd->bindValue(":id",$id);
$cmd->execute 
*/

//ou
/*
$res = $pdo->query("DELETE FROM pessoa WHERE id = '3' ");

//-------update----------
/*
$cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = id ");
$cmd->bindValue(":e","miriam@gmail.com");
$cmd->bindValue(":id",1);
$cmd->execute 
*/
/*
$res = $pdo->query("UPDATE pessoa SET email = 'paulo2@gmail.com' 
WHERE id = '4' ");
*/

//--------select-----------
/*

$cmd = $pdo->prepare("SELECT * FROM  pessoa WHERE id_pessoa = :id");
$cmd->bindValue(":id",4);
$cmd->execute();

//acessar as informações do banco 

//apenas uma linha do banco de dados
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);

//ou

//mais de um registro do banco de dados 
//$cmd->fetchall();

foreach ($resultado as $indice => $value) {
    echo $indice.": ".$value."<br>"; 
}

*/
