<?php

include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `stock` WHERE id_stock = $id";
$remover = mysqli_query($conexao,$sql)


?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
<link rel="stylesheet" href="css/bootstrap.css"> 

<div class="container" style="width:400px">

    <center>

        <h3>Removido com sucesso</h3>
        <div style="margin-top: 10px">

            <a href="listar_produtos.php" class = "btn btn-sm btn-warning" style"color:#fff">Voltar</a>
    
        </div>
    </center>

</div>