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



<style>

body {
    background-color: #f3f3f3;
    font-family: Verdana, Geneva, Tahoma, sans-serif;

}


.home {
    background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     border: 1px solid #CCCCCE;
     border-radius: 3px;
     box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                   0 2px 7px rgba(0, 0, 0, 0.2);
     color: orange;
     display: block;
     font-family: "Trebuchet MS";
     font-size: 14px;
     font-weight: bold;
     line-height: 25px;
     text-align: center;
     text-decoration: none;
     text-transform: uppercase;
     text-shadow:1px 1px 0 #FFF;
     padding: 5px 15px;
     position: relative;
     width: 80px;
     margin-bottom: 10px;
}

.atualizar {
   

    background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     border: 1px solid #CCCCCE;
     border-radius: 3px;
     box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                   0 2px 7px rgba(0, 0, 0, 0.2);
     color: green;
     display: block;
     font-family: "Trebuchet MS";
     font-size: 14px;
     font-weight: bold;
     line-height: 25px;
     text-align: center;
     text-decoration: none;
     text-transform: uppercase;
     text-shadow:1px 1px 0 #FFF;
     padding: 5px 15px;
     position: relative;
     width: 80px;
     margin-bottom: 10px;
}

.excluir  {
    background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     border: 1px solid #CCCCCE;
     border-radius: 3px;
     box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                   0 2px 7px rgba(0, 0, 0, 0.2);
     color: red;
     display: block;
     font-family: "Trebuchet MS";
     font-size: 14px;
     font-weight: bold;
     line-height: 25px;
     text-align: center;
     text-decoration: none;
     text-transform: uppercase;
     text-shadow:1px 1px 0 #FFF;
     padding: 5px 15px;
     position: relative; 
     width: 80px;
     margin-bottom: 10px;

}


.voltar {
    background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     border: 1px solid #CCCCCE;
     border-radius: 3px;
     box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                   0 2px 7px rgba(0, 0, 0, 0.2);
     color: darkblue;
     font-family: "Trebuchet MS";
     font-size: 14px;
     font-weight: bold;
     line-height: 25px; 
     text-align: center; 
     text-decoration: none;
     text-transform: uppercase;
     text-shadow:1px 1px 0 #FFF;
     padding: 10px 50px;
     position: relative;
     width: 100px;

}

.container h1 {
    text-align: center;
    
}
</style>

</head>
<body>
<div class="container">
    <h1>Lista de Alunos</h1>
    <hr>
    
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

        <?php if($aluno['media']<=7) { ?> <p style="background-color: red; color: white;">Situação: <?=$aluno['situacao']?> </p> 

            <?php } else { ?>
                <p style="background-color: green; color: white;">Situação: <?=$aluno['situacao']?> </p> 
                <?php } ?>

        <a class="atualizar" href="atualizar.php?id=<?=$aluno['id']?>">Atualizar</a> 

        <a class="excluir" href="excluir.php?id=<?=$aluno['id']?>">Excluir</a>

        <a class="home" href="inserir.php">Home</a>

        <hr>

    </article>
    </div>

        <?php
          }
        ?>
    <p><a class="voltar" href="../index.php">Voltar ao início</a></p>
</div>


<script>

    const links = document.querySelectorAll('.excluir');
    for ( let i = 0; i < links.length; i++) {
        links[i]. addEventListener("click", function(event){
            event.preventDefault();
            let resposta = confirm ("Deseja realmente excluir?");
            if (resposta)location.href = links[i].getAttribute('href');
        });
    }
</script>

<p class=" <?= ( $aluno ['media'] >= 7 ) ? 'style:background-color: green;' : 'style: background-color: red;';?>"> </p>
</body>
</html>