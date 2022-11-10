<?php
require_once '../bancoDeDados/conecta.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$stmt = $bd->prepare(
    "UPDATE ALUNOS
     SET NOME =:NOME,
     TURNO =:TURNO,
     INICIO =:INICIO
     WHERE
     id = :id"
);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':turno', $turno);
$stmt->bindParam(':inicio', $inicio);

$stmt->execute();

$atualizou = false;

if($stmt->rowCount() > 0){
    $atualizou = true;
};

include 'index.php';