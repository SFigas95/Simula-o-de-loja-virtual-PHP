<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
  <link rel="stylesheet" href="css/bootstrap.css"> 


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
</head>
<body>
    
<div class="container">

    <form action="introduzir_utilizador.php" method="post">
        <div class="form-group">
            <label>Nome de Utilizador</label>
            <input type="text" name="_utilizador" class="form-control" placeholder="Nome de Utilizador" required autocomplete="off">
        </div>
        
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="_email" class="form-control" placeholder="Email" required autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="_password" class="form-control" placeholder="Password" required autocomplete="off" id="txtpassword">
        </div>
        <div class="form-group">
            <label>Confirmar Password</label>

            <input type="password" name="_confirmar_password" class="form-control" placeholder="Confirmar Password" required autocomplete="off" oninput="validarpassword(this)">

        </div>
        <div class="form-group">
            <label>Nível de acesso</label>
             <select name="_nivelutilizador" class="form-control">

                <option value="1">Admin</option>
                <option value="2">Funcionário</option>
                <option value="3">Leitor</option>

             </select>
        </div>

        <div style="margin-top: 25px;">
         <a  href="index.php" role="button" class="btn btn-primary">Voltar</a>
         <button type="submit"id="butao" class="btn btn-danger">Sign up</button>
    </div>

    </form>

    <script>

    function validarpassword(input){
        if(input.value != document.getElementById('txtpassword').value){
            input.setCustomValidity('Repita a password corretamente');

        }else{
            input.setCustomValidity('');
        }
    }

    </script>


</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="texte/javascript" src="js/bootstrap.js"></script>

</body>
</html>