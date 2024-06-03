<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar utilizador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>
<body>
    
<div class="container" style ="margin-top: 40px;">
<h3>Lista de aprovação de utilizadores</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome </th>
      <th scope="col">Email </th>
      <th scope="col">Ação </th>



    </tr>
  </thead>


        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM utilizadores WHERE status_utilizador = 'Inativo'";
            $buscarinfo = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($buscarinfo)){

                $id_utilizador = $array['id_utilizador'];
                $nomeutilizador= $array['nome_utilizador'];
                $email = $array['email_utilizador'];

        ?>

            <tr>
        
                <td><?php echo $nomeutilizador ?></td>
                <td><?php echo $email ?></td>

                
                
                
                <td>
                    <a role="button" class="btn btn-warning" style="color:#fff" href="update_aprovar_utilizador.php?id=<?php echo $id_utilizador?>&nivel=1">admin</a>
                    <a role="button" class="btn btn-warning" style="color:#fff" href="update_aprovar_utilizador.php?id=<?php echo $id_utilizador?>&nivel=2">funcionario</a>
                    <a role="button" class="btn btn-warning" style="color:#fff" href="update_aprovar_utilizador.php?id=<?php echo $id_utilizador?>&nivel=3">leitor</a>
                    <a role="button" class="btn btn-danger" style="color:#fff" href="update_remover_utilizador.php?id=<?php echo $id_utilizador?>">Remover</a>
                </td>

            </tr>    

        <?php } ?>          

    </tr>

</table>

<a href="menu.php" role="button" class="btn btn-primary">Voltar</a>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="texte/javascript" src="js/bootstrap.js"></script>
</body>
</html>