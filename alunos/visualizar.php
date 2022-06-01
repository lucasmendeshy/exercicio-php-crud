<?php
require_once "../src/funcoes-alunos.php";

$listaDeAlunos = lerAlunos($conexao);
?>


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
    <p><a href="inserir.php">Home</a></p>
   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.
Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    <!-- <div class="alunos">

    <article>
        <p>Nome:</p>
        <p>Primeira:</p>
        <p>Segunda:</p>
        <p>Média:</p>
        <p>Situação:</p>
    </article>

    </div> -->
    
    <?php foreach($listaDeAlunos as $aluno) {?>
 
   <div class="alunos">

    <article>
        <h3><b>Nome:</b> <?=$aluno['nome']?> </h3>
        <p>Primeira: <?=$aluno['primeira']?> </p>
        <p>Segunda: <?=$aluno['segunda']?> </p>
        <p>Média:  <?=$aluno['media']?> </p>
        <p>Situação: <?=$aluno['situacao']?> </p>

        <button a href="atualizar.php?id=<?=$aluno['id']?>">Atualizar</a></button> 

        <button a class="excluir" href="excluir.php?id=<?=$aluno['id']?>">Excluir </a> </button>

    </article>
    </div>

        <?php
          }
        ?>
    <p><a href="../index.php">Voltar ao início</a></p>
</div>
</body>
</html>