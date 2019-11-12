<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="estilo.css">
    
</head>


        <body id = "login" class="text-center">
          
            <form class="form-signin" action = "<?php  
              require_once 'database.php';
              $cliente = new Cliente();

              $cliente = $cliente->getCliente($_GET["email"], $_GET["senha"]);
              if($cliente){
                header("http://localhost:8080/cliente.php");
              }
              else{
                header("#");
              }
            ?>" method = "get">
              
              <div class="entrada">
                <img class="mb-4" src="logo.png" alt="" width="50%" height="50%">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email:" required="" autofocus="">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha:" required="">
                <a href="registrar.php">Registar-se</a>

                <input id="inputEnter" type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-green" value="Entrar">
              </div>

            </form>
            
            
            </body>

</html>