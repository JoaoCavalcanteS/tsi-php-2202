<?php
//dados para nos conectarmos ao SGBD
//Espera o tipo de BD/Qual tabela, Qual maquina(a local) e a porta dele
$dsn= 'mysql:dbname=senac;host=localhost;port=3307';
$user='root';
$pass='';

//conectamos ao SGBD
$bd=new PDO($dsn, $user, $pass);

