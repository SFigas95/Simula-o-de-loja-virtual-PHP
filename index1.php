<?php

include 'conexao.php';

$email = $_POST['email'];
$password1 = $_POST['_password'];

$sql = "SELECT email_utilizador,password_utilizador FROM utilizadores where email_utilizador = '$email' and status_utilizador ='Ativo'";
$buscarinfo = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscarinfo);

while($array = mysqli_fetch_array($buscarinfo)){


    $password2 = $array['password_utilizador'];

    if($total> 0)
    {

        if($password1 == $password2)
        {
            session_start();
            $_SESSION['email'] = $email;
            header('Location: menu.php');
        }else{
            header('Location: erro.php');
        }


    }else{

        header('location: erro.php');

    }

}


?>