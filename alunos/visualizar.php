<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>
   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.
Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


<table>
    <caption style="color: red;">Lista de Alunos</caption>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th colspan="2">Operações</th>
    </tr>



    </thead>
    <tbody>

    <?php
    foreach($listaDeAlunos as $aluno) {?>

         <tr>
             <td> <?=$aluno['id']?> </td>
             <td> <?=$aluno['nome']?> </td>
             <td> <a href="atualizar.php?id=<?=$aluno['id']?>">Atualizar </a>  </td>
             <td> <a class="excluir" href="excluir.php?id=<?=$aluno['id']?>"> </a>  </td>
         </tr>

        <?php
          }
          ?>

 </tbody>
</table>


    <p><a href="index.php">Voltar ao início</a></p>
</div>
</body>
</html>