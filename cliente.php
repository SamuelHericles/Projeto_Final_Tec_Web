<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="estilo.css">

    <title>SisTec - Assistência Técnica</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="#">Olá Zé da Bodega!</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Meus pedidos</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Histórico</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Alterar dados</a>
              </li>

            </ul>

            <form class="form-inline mt-2 mt-md-0" method="POST" action="login.php">
              <input type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-blue" value="Sair">
            </form>
          
          </div>
        </nav>
    </header>


    <main>

    <div class="MPedidos">
    
    <?php
    
    
    ?>
    
    
    
    </div>
    <div class="Historico"></div>


    
    <div class="ADados"></div>

    </main>



</body>

</html>