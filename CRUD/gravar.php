<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//Include_once(); não gera erro fatal se não existir

$nome=$_POST['nome'];
$turno=$_POST['turno'];
$inicio=$_POST['inicio'];


//INSERT INTO INSERIR DADOS NA TABELA ALUNOS
$consulta = $bd->prepare('INSERT INTO alunos
                (nome, turno, inicio)
            VALUES (:nome, :turno, :inicio)');
/*
A função $bd->prepare() retorna outra variável (objeto), essa outra variável consegue juntar os dados do usuário com a consulta SQL
*/


$consulta-> bindParam(':nome', $nome);
$consulta-> bindParam(':turno', $turno);
$consulta-> bindParam(':inicio', $inicio);
/*
A função $consulta-> bindParam() substitui os rotulos (ex:nome) pelos dados inseguros
*/
if($consulta->execute()){
    $gravou = true;
}
else{
    $gravou = false;
}

include 'index.php';
//Executa a consulta no sgbd
