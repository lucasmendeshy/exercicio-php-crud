<?php

require_once "conecta.php";

function lerAlunos (PDO $conexao) {

    $sql = "SELECT id, nome, primeira, segunda, media, situacao FROM alunos ORDER BY nome";


    try {
        
       $consulta = $conexao->prepare($sql);

       $consulta->execute();

       $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro: " .$erro->getMessage());
    }
};


/* Inserindo alunos */

function inserirAlunos (PDO $conexao, string $nome):void {
    $sql = "INSERT INTO alunos(nome) VALUES (:nome)";


    try {
         $consulta = $conexao->prepare($sql);

         $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
         
         $consulta->execute();
    } catch (Exception $erro) {
        die("erro:" .$erro->getMessage());
    };
}
?>