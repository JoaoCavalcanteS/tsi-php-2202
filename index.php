<?php
//Comentário de linha
#Comentário de linha 
/*
Comentário
de 
bloco
*/
$nome='Aluno, João';
echo "Olá, $nome"; //INTERPOLAÇÃO
//FOR//
for ($i = 1; $i <= 10; $i++){
    echo "<br>JOAOo";
}

//WHILE;
$i=0;
while($i<=10){
    echo "<br>João";
    $i++;
}

//DO WHILE
$c=0;
do{
    echo "Joaozinho";
    $c++;
}while($c<=10);
//////////////////////////////////////////
//CONDICIONAIS


//IF
if(5>10){
    echo "<br>CINCO É MAIOR DO QUE DEZ";
}
else{
    echo "CINCO NÃO É MAIOR DO QUE 10";
}
//FIM CONDICIONAIS
$Dias=6;

//DIAS DA SEMANA//
switch ($Dias) {
    case '0':
        echo "<br>Domingo";
        break;
    case '1':
        echo "<br>Segunda";
        break;  
    case '2':
        echo "<br>Terça";
        break;
    case '3':
        echo "<br>Quarta";
        break;  
    case '4':
        echo "<br>Quinta";
        break;  
    case '5':
        echo "<br>Sexta";
        break;
    case '6':
        echo "<br>Sábado";
        break;
}
?>