<?php
require_once '../controleDeSessao/controle.php';
require_once '../bancoDeDados/conecta.php';

$id = $_POST['id']??0;
// ??quando não existe $_POST['id'] ele acrescenta 0

$id = preg_replace('/\D/','', $id);

 if($bd -> exec ("UPDATE alunos VALUES (:nome, :turno, :inicio)')WHERE id=$id")){
    $apagou=true;
 }
 else{
    $apagou=false;
 }
 include 'index.php';