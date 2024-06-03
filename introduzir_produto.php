<?php

include 'conexao.php';

$numeroproduto = $_POST['_nproduto']; //Recebe valor do atributo (from index.php)
$nomeproduto = $_POST['_nome_produto'];
$stock = $_POST['_stock'];
$categoria = $_POST['_categoria'];
$fornecedor = $_POST['_fornecedor'];


//echo $nomeproduto; *echo é tipo printf 

$sql = "INSERT INTO `stock`(`nproduto`, `nomeproduto`, `categoria`, `stock`,`fornecedor`) VALUES ($numeroproduto,'$nomeproduto','$categoria',$stock,'$fornecedor')"; //SE ESQUECER IR BUSCAR FORMULA AO SQL (TABELA->SQL->INSERT)


$Introduzir = mysqli_query($conexao, $sql); //conecta a variavél $conexao(from conexao.php) que faz com que conecte á base de dados e depois executa o comando já definido $sql 

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/bootstrap.css"> 

    <div class="container" style ="width: 500px; margin-top: 20px">

        <center>
        <h4>Produto adicionado á base de dados com sucesso!!!</h4>
        </center>
        <div style="padding-top: 20px;">
            <center>

            <a href="adicionar_produto.php" role="button" class="btn btn-primary">Voltar ao formulário</a>

            </center>

        </div>

    </div>