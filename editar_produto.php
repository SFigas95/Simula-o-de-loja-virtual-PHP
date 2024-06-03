<?php

include'conexao.php';

 $id = $_GET['id']; //pega o id do produto


?>

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

    <form action="atualizar_produto.php" method="post">
        <?php

        $sql = "SELECT * FROM `stock` WHERE id_stock = $id";
        $buscarinfo = mysqli_query($conexao,$sql);
        while($array = mysqli_fetch_array($buscarinfo)){

            $id_stock = $array['id_stock'];
            $numeroproduto = $array['nproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $stock = $array['stock'];
            $fornecedor = $array['fornecedor'];

        ?>


        <div class="form-group">
            <label>Nº Produto</label>
            <input type="number" class="form-control" name="_nproduto" value="<?php echo $numeroproduto ?>"><!--autocomplete="off" não aparece histórico de preenchimento--> 
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">

          </div>
        <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" class="form-control" name="_nome_produto"  value="<?php echo $nomeproduto ?>"> <!--dissabled serve para bloquear a edição-->
        
          </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="number" class="form-control" name="_stock"  value="<?php echo $stock ?>"> <!--required serve para não deixar passar sem preencher o campo-->
       
          </div>
        
        <div class="form-group">
          <label>Categoria de produto</label>
          <select class="form-select" name="_categoria"  value="<?php echo $categoria ?>">
            <option selected >Abre este menu para escolher</option>
            <option>Ratos</option>
            <option>Teclados</option>
            <option>Monitores</option>
          </select>
        </div>

        <div class="form-group">
          <label>Fornecedor</label>
          <select class="form-select" name="_fornecedor"  value="<?php echo $fornecedor ?>">
          <option selected>Escolha um fornecedor</option>
            <option>China</option>
            <option>India</option>
            <option>EUA</option>
          </select>
        </div>
        <button type="submit" id="butao" class="btn">Update</button>
        <?php } ?>
      </form>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="texte/javascript" src="js/bootstrap.js"></script>

  </body>
</html>
