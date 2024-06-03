<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
  <link rel="stylesheet" href="css/bootstrap.css"> 

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
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
  
<div class="container" style="margin-top: 40px">
  <?php
    if($nivel ==1 || $nivel == 2){
  ?>
  <div class="row">

    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Adicionar Produto</h5>
          <p class="card-text">Opção para adicionar produtos no nosso stock</p>
          <a href="adicionar_produto.php" class="btn btn-primary">Registar Produto</a>
        </div>
      </div>
    </div>
  <?php }?>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Lista de Produtos</h5>
          <p class="card-text">Ver,Editar e Remover produtos.</p>
          <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
        </div>
      </div>
    </div>
    <?php
      if($nivel ==1 || $nivel == 2){
    ?>
    <div class="col-sm-6 mb-3 mb-sm-0" style="margin-top: 20px">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Adicionar Categoria</h5>
          <p class="card-text">Opção para adicionar categoria de produtos</p>
          <a href="adicionar_categoria.php" class="btn btn-primary">Registar Categoria</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6" style="margin-top: 20px">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Adicionar Fornecedor</h5>
          <p class="card-text">Opção para adicionar fornecedores.</p>
          <a href="adicionar_fornecedor.php" class="btn btn-primary">Fornecedores</a>
        </div>
      </div>
    </div>
    <?php }?>
    <?php
      if($nivel ==1){
    ?>
      <div class="col-sm-6 mb-3 mb-sm-0" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Aprovar Utilizador</h5>
            <p class="card-text">Opção para aprovar utilizadores.</p>
            <a href="aprovar_utilizador.php" class="btn btn-primary">Aprovar</a>
          </div>
        </div>
      </div>
    <?php }?>
    <?php
      if($nivel ==1){
    ?>
    <div class="col-sm-6 mb-3 mb-sm-0" style="margin-top: 20px">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Criar conta</h5>
          <p class="card-text">Criar conta para novos utilizadores</p>
          <a href="criar_conta.php" class="btn btn-primary">criar conta</a>
        </div>
      </div>
    </div>
    <?php }?>


  </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="texte/javascript" src="js/bootstrap.js"></script>

</body>
</html>