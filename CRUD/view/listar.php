<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="formIncluir.php"><button class='btn'> Incluir aluno</button></a>
            <?php
            //mensagem com mensagem de sucesso ou falha na hora de gravar o aluno
                if(isset($apagou)){
                        if(!$apagou){
                            echo  '<div class="alert alert-danger" role="alert">
                            Erro ao tentar gravar o aluno!Aluno gravado com sucesso!
                        </div>';  
                        }
                        else{
                            echo  '<div class="alert alert-success" role="alert">
                            Erro ao tentar gravar o aluno!
                        </div>';
                        }
                }
            ?>
            <form method="post">        
                                <table class="table">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Turno</th>
                                            <th>Inicio</th>   
                                            <th>Ações</th>        
                                        </tr>
                                
                                <?php
                                foreach($alunos as $aluno){
                                    echo "<tr>
                                            <td>{$aluno["ID"]}</td>
                                            <td>{$aluno["NOME"]}</td>
                                            <td>{$aluno["TURNO"]}</td>
                                            <td>{$aluno["INICIO"]}</td>
                                            <td>
                                                <button class = 'btn btn-danger' formaction='apagar.php' value = '{$aluno["ID"]}' name='id'> 
                                                    Apaga   
                                                </button>    
                                            </td>
                                            <td>
                                                <button class = 'btn btn-danger' formaction='atualizarForm.php' value = '{$aluno["ID"]}' name='id'> 
                                                    Atualizar   
                                                </button>    
                                            </td>
                                    <tr>";
                                }        
                                ?>
                    </form>
            </table>
    </div> 
</body>
</html>