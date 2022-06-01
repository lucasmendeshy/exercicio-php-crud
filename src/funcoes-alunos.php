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

function inserirAlunos (PDO $conexao, string $nome, float $primeira, float $segunda, float $media, string $situacao):void {
    $sql = "INSERT INTO alunos(nome, primeira, segunda, media, situacao) VALUES (:nome, :primeira, :segunda, :media, :situacao)";


    try {
         $consulta = $conexao->prepare($sql);

         $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
         $consulta->bindParam(':primeira', $primeira, PDO::PARAM_STR);
         $consulta->bindParam(':segunda', $segunda, PDO::PARAM_STR);
         $consulta->bindParam(':media', $media, PDO::PARAM_STR);
         $consulta->bindParam(':situacao', $situacao, PDO::PARAM_STR);
         
         $consulta->execute();
    } catch (Exception $erro) {
        die("erro:" .$erro->getMessage());
    };
}
?>