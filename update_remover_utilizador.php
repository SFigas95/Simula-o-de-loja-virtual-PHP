<?php

include 'conexao.php';
$id = $_GET['id'];

$delete = "DELETE FROM  utilizadores where id_utilizador = $id";
$coluna = mysqli_query($conexao,$delete);


header("Location: aprovar_utilizador.php"); // redireciona para a página de aprovação.

?>