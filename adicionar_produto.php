<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/bootstrap.css"> 

    <style type="text/css">

      #butao{
        background-color: #ff1168; /*cor de fundo*/
      }

    </style>

  </head>
  <body>


<div class="container" style="margin-top: 40px">

<h4>Formulário de Registro</h4>

    <form action="introduzir_produto.php" method="post">
        <div class="form-group">
            <label>Nº Produto</label>
            <input type="number" class="form-control" name="_nproduto" placeholder="Introduza o número do produto"><!--autocomplete="off" não aparece histórico de preenchimento--> 
        </div>
        <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" class="form-control" name="_nome_produto" placeholder="Introduza o nome do produto">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="number" class="form-control" name="_stock" placeholder="Introduza o número de stock do produto" required autocomplete="off"> <!--required serve para não deixar passar sem preencher o campo-->
        </div>
        
        <div class="form-group">
          <label>Categoria de produto</label>
          <select class="form-control" name="_categoria">

          <?php
            
            include 'conexao.php';
            $sql = "SELECT * FROM categoria order by nome_categoria ASC";
            $buscarinfo = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscarinfo)) {

            $id_categoria = $array['id_categoria'];
            $nome_categoria = $array['nome_categoria'];

          ?>

          <option><?php echo $nome_categoria ?></option>

              <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label>Fornecedor</label>
          <select class="form-control" name="_fornecedor">
            <option selected>Escolha o Fornecedor</option>
            
            <?php
            
            include 'conexao.php';
            $sql = "SELECT * FROM fornecedor order by nome_fornecedor ASC";
            $buscarinfo = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscarinfo)) {

            $id_categoria = $array['id_fornecedor'];
            $nome_categoria = $array['nome_fornecedor'];

          ?>

          <option><?php echo $nome_categoria ?></option>

              <?php } ?>
          </select>
        </div>
        <div style="margin-top: 25px;">
          <a  href="menu.php" role="button" class="btn btn-primary">Voltar</a>
          <button type="submit"id="butao" class="btn btn-warning">Registar</button>
        </div>
         

      </form>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="texte/javascript" src="js/bootstrap.js"></script>

  </body>
</html>
