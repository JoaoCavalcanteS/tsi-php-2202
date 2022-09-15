<?php

//Vetores
$diaSemana =[0=>'Domingo', 1=>'Segunda', 2=>'Terça',3=>'Quarta', 4=>'Quinta', 5=>'Sexta', 6=>'Sábado'];

echo "<pre>";
$data=date('w');
echo "Hoje é {$diaSemana[$data]}<br>";


//Usando vetores
$aluno= ['matricula'=>6556, 'nome'=>'João', 'Semestre'=>2];


//var_dump($) depurar código
var_dump($aluno);


//Usando uma Matriz
$alunos=[0=>['matricula'=>232, 'Nome'=>'Paula',         'Semestre'=>2],
        1=>['matricula'=>775, 'Nome'=>'Joao','Semestre'=>2],
        2=>['matricula'=>634, 'Nome'=>'Gabie',         'Semestre'=>2]];

var_dump($alunos);
echo count($aluno);


//A TABELA COMEÇA AQUI E TERMINA NO FIM
echo "<table border=1>
        <tr>
            <td>matricula</td>
            <td>Nome</td>
            <td>Semestre</td>
        </tr>";

for($i=0; $i<count($alunos); $i++){
     //A repitição está colocando o valor da matriz, linha por linha
    echo "<tr>
        <td>{$alunos[$i]['matricula']}</td>
        <td>{$alunos[$i]['Nome']}</td>
        <td>{$alunos[$i]['Semestre']}</td>
    </tr>";
}

//foreach é um FOR para Arrays, irá depurar todo o seu vetor esperando um indice e valor
foreach($alunos as $ind => $val){
    echo "<tr>
        <td>{$val['matricula']}</td>
        <td>{$val['Nome']}<td>
        <td>{$val['Semestre']}</td>
    </tr>";
}
echo "</table>";
?>