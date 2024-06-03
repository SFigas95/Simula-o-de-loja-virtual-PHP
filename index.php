<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
  <link rel="stylesheet" href="css/bootstrap.css"> 


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<div class="container">

    <form action="index1.php" method="post">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" required autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="_password" class="form-control" placeholder="Password" required autocomplete="off">
        </div>

        <div style="margin-top: 25px;">
         <a  href="criar_conta_externa.php" role="button" class="btn btn-primary">Sign up</a>
         <button type="submit"id="butao" class="btn btn-danger">Login</button>
        </div>
    </form>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="texte/javascript" src="js/bootstrap.js"></script>

</body>
</html>