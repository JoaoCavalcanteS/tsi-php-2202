<?php
//dados para nos conectarmos ao SGBD
$dsn= 'mysql:dbname=senac;host=localhost;port=3307';
$user='root';
$pass='';

//conectamos ao SGBD
$bd=new PDO($dsn, $user, $pass);

var_dump($bd);