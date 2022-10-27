<?php
require_once '../bancoDeDados/conecta.php';

$id = $_POST['id']??0;
// ??quando não existe $_POST['id'] ele acrescenta 0

$id = preg_replace('/\D/','', $id);

 $stmt = $bd -> prepare ("SELECT id, nome, turno, inicio FROM alunos WHERE id = :id");

 $stmt->bindParam(':id', $id);
 $stmt -> execute();
 $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

 //MOSTRAR um formulario html para o usuario com os dados do aluno para serem editados