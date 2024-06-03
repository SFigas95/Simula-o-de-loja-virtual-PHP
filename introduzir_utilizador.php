<?php

include 'conexao.php';

$nomeutilizador = $_POST['_utilizador'];
$email = $_POST ['_email'];
$password = $_POST['_password'];
$nivel = $_POST['_nivelutilizador'];
$status = 'Ativo';



$sql = "INSERT INTO `utilizadores`(`nome_utilizador`, `email_utilizador`, `password_utilizador`, `nivel_utilizador`, `status_utilizador`) VALUES ('$nomeutilizador','$email','$password',$nivel,'$status')";
$Introduzir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
<link rel="stylesheet" href="css/bootstrap.css"> 

<div class="container" style="width:400px">

    <center>

        <h3>Utilizador adicionado com sucesso</h3>
        <div style="margin-top: 10px">

            <a href="menu.php" class = "btn btn-sm btn-warning" style"color:#fff">Voltar</a>
    
        </div>
    </center>

</div>