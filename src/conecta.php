<?php

/* Script de conexão ao Banco de Dados */

/* Parâmetros */ 
$servidor = "localhost";
$usuario = "webmaio1_mendes";
$senha = "Luc@s4674";
$banco = "webmaio1_mendeslucas";


try {

  // Criando a Conexão com o MySQL (API/Driver de conexão)

  $conexao = new PDO (
    "mysql:host=$servidor; dbname=$banco; charset=utf8",
    $usuario,
    $senha
);    

// Habilitação a verificação de erros

$conexao->setAttribute (
    PDO::ATTR_ERRMODE, // Constante de erros em geral
    PDO::ERRMODE_EXCEPTION // Constante de exceções de erro
);    

} catch (Exception $erro) {
    die("Erro: " .$erro->getMessage());
}

/*var_dump($conexao); */
?>