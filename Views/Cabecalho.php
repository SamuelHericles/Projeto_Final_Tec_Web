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
      <title>SisTec - Assistência Técnica</title>
  </head>

  <body class="bodycolor">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../index.php">SisTec</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="../Views/Servico.php">Serviços</a></li>
            <li class="nav-item"><a class="nav-link" href="../Views/Diferenciais.php">Diferenciais</a></li>
            <li class="nav-item"><a class="nav-link" href="../Views/Contato.php">Contato</a></li>
          </ul>
          <form class="form-inline mt-2 mt-md-0" method="POST" action="../Views/Login.php">
            <input type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-green" value="Login">
          </form>
        </div>
      </nav>
    </header>
          