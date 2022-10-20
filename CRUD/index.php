<?php
require_once '../bancoDeDados/conecta.php';

$STMT = $bd->query('SELECT ID, NOME, TURNO, INICIO FROM ALUNOS ');

$alunos=[];
// $saida = $STMT->fetch(PDO::FETCH_ASSOC);
// var_dump($saida);

// while($saida = $STMT->fetch(PDO::FETCH_ASSOC)){
//     var_dump($saida);
//     echo '<br>';
// };

while($linha = $STMT->fetch()) {
    $alunos[]=$linha;

} 

include 'view/listar.php';

?>