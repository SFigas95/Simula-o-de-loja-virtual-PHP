<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>
<body>
<?php
    include 'conexao.php';
    session_start();
    $email = $_SESSION['email'];

    if(!isset ($_SESSION['email'])){
    header('LOCATION: index.php');
    }


    $sql = "SELECT nivel_utilizador FROM utilizadores WHERE email_utilizador = '$email' and status_utilizador ='Ativo'";
    $buscar = mysqli_query($conexao,$sql);
    $array = mysqli_fetch_array($buscar);

    $nivel = $array['nivel_utilizador'];
?>
<div class="container" style ="margin-top: 40px;">
<h3>Lista de Produtos</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">N Produtos</th>
      <th scope="col">Nome Produtos</th>
      <th scope="col">Categoria</th>
      <th scope="col">Stock</th>
      <th scope="col">Fornecedores</th>
      <th scope="col">Ação</th>

    </tr>
  </thead>


        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `stock`";
            $buscarinfo = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($buscarinfo)){

                $id_stock = $array['id_stock'];
                $numeroproduto = $array['nproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $stock = $array['stock'];
                $fornecedor = $array['fornecedor'];
        ?>

            <tr>
        
                <td><?php echo $numeroproduto ?></td>
                <td><?php echo $nomeproduto ?></td>
                <td><?php echo $categoria ?></td>
                <td><?php echo $stock ?></td>
                <td><?php echo $fornecedor ?></td>
                <td>
                    <?php 
                    if($nivel ==1 || $nivel == 2){
                    ?>
                    <a role="button" class="btn btn-warning" style="color:#fff" href="editar_produto.php?id=<?php echo $id_stock?>">Editar</a>
                    <?php } ?>
                    <?php 
                    if($nivel ==1){
                    ?>
                    <a role="button" class="btn btn-danger" style="color:#fff" href="remover_produto.php?id=<?php echo $id_stock?>">Remover</a>
                    <?php } ?>
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