<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
  <link rel="stylesheet" href="css/bootstrap.css"> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container" style="margin-top: 40px;width: 500px">
    <h4>Registro de categoria</h4>
    <form action="introduzir_categoria.php" method="post">
        <label>Categoria</label>
        <div class="form-group">

            <input type="text" name="_categoria" class="form-control" placeholder="Introduza o nome da categoria" autocomplete="off">

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