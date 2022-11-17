<?php
require_once '../controleDeSessao/controle.php';
require_once '../bancoDeDados/conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Atualização</title>
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
    <form action="atualizar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="turno">Turno:</label>
        <select name="turno" id="nome">
            <option value="">Escolha</option>
            <option value="matutino">Matutino</option>
            <option value="verspetino">Vespertino</option>
            <option value="noturno">Noturno</option>
        </select>
        <br>
        <label for="inicio">Inicio:</label>
        <input type="date" name="inicio" id="inicio">
        <br>
        <input type="submit" value="Gravar">
    </form>
    </div>
</body>
</html>