<?php

include'conexao.php';

$id = $_GET['id']; //pega o id do produto
$nivel = $_GET['nivel']; 


if ($nivel == 1) {

    $update = "UPDATE utilizadores SET status_utilizador = 'Ativo', nivel_utilizador = 1 WHERE id_utilizador = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "ADMINISTRADOR APROVADO";
} 

if ($nivel == 2) {

    $update = "UPDATE utilizadores SET status_utilizador = 'Ativo', nivel_utilizador = 2 WHERE id_utilizador = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "FUNCIONÁRIO APROVADO";
}

if ($nivel == 3) {

    $update = "UPDATE utilizadores SET status_utilizador = 'Ativo', nivel_utilizador = 3 WHERE id_utilizador = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "LEITOR APROVADO";
}
?>