<!DOCTYPE html>
<html lang="pt-br">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../Models/reset.css">
      <link rel="stylesheet" href="../Models/css/bootstrap.min.css">
      <link rel="stylesheet" href="../Models/css/bootstrap.css">
      <link rel="stylesheet" href="../Models/Carousel.css">
      <link rel="stylesheet" href="../Models/Estilo.css">
      <title>Login</title>
  </head>

  <body id = "login" class="text-center">
    <form class="backbtn form-inline " method="POST" action="../index.php">
      <input type="submit" name="BTEnvia" class="btn btn-info " value="Voltar">
    </form>
    <div class="divlogin">
      <form class="form-signin" method = "post" action ="./Acess.php" >
        <div class="entrada">
          <img class="mb-4" src="../Imagens/Logo.png" alt="" width="50%" height="50%">
          <input  type="loginb" name ="login" id="inputEmail" class="form-control" placeholder="Email:" required="" autofocus="">
          <input  type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha:" required="">
          <a href="./Registrar.php">Registar-se</a>
          <input id="inputEnter" type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-green" value="Entrar">
        </div>
      </form>
    </div>  
  </body>
  <?php
          $v = $_GET['v'];
          if ($v==1) {
            echo "<script>
            window.alert('Email ja cadastrado!');
          </script>";
        }
        if ($v==2) {
          echo "<script>
          window.alert('As senhas devem ser iguais!');
        </script>";
      }
         ?>
</html>