<?php

include "conexao.php"; //incluir a conexão com o banco de dados

$nome = $_POST['nomeUsuarioPHP'];
$sobrenome = $_POST['sobrenomeUsuarioPHP'];
$email = $_POST['emailUsuarioPHP'];
$senha = $_POST['senhaUsuarioPHP']

// comando SQL
$sql = "INSERT INTO informacao_usuarios ('nome', 'sobrenome', 'email', 'senha')
        VALUES ($nome, $sobrenome, $email, $senha)";

// preparando a conexão
$cadastrar = $pdo->prepare($sql);


// tentando executar
try{
    $cadastrar -> execute();
    alert("Informações cadastradas com sucesso!!");
}catch{
    alert("Falha ao cadastrar informações dos usuários!"). $erro->getMessage();
}




?>