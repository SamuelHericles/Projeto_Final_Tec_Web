<?php
  $login = $_POST['login'];
  $con      = mysqli_connect("127.0.0.1:3306","root","1234","emp");
  $result_cliente = mysqli_query($con,"SELECT * FROM cliente where email='$login'");
  $dado = $result_cliente->fetch_array();
?>
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
                <a class="nav-link" href="#ADados">Alterar dados</a>
              </li>

            </ul>

            <form class="form-inline mt-2 mt-md-0" method="post" action="logout.php">
              <input type="submit" name="BTSair" class="btn btn-primary btn-lg btn-block btn-blue" value="Sair">
            </form>
          
          </div>
        </nav>
    </header>


    <main>

    <div class="MPedidos">
    <div class="container">
      <h1>Pedidos</h1>
    </div>

    <?php
    
    
    ?>
        
    
    </div>

    <div class="container"><div class="linha"></div></div>

    <div class="Historico">
        <!-- Requer conexão com o banco -->
        <div class="container">
          <h1>Histórico</h1>

        </div>

    </div>

<div class="container"><div class="linha"></div></div>

    <div id="ADados" class="ADados">
      <div class="container">
        <h1>Alterar Dados Pessoais</h1>
      <form action="">
            <div class="form-group">
                <label for="nome">Novo nome</label>
                <input id="nome" name="nome" type="text" class="form-control" value="<?php echo $dado['nome']?>" >
            </div>
            <div class="form-group">
                <label for="email">Novo E-Mail</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="exemplo@exemplo.com">
            </div>
            <div class="form-group">
            <div class="form-row">
                <div class = "col">
                    <label for="senha">Nova Senha</label>
                    <input id="senha" type="password" name="senha" class="form-control">
                </div >
                <div class="col">
                    <label for="c-senha">Confirme a nova senha</label>
                    <input id="c-senha" type="password" name="c-senha" class="form-control">
                </div>
            </div>
            </div>
            <input  type="submit"  name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-green" value="Finalizae">
        </form>
      </div>    
  </div>

    </main>



</body>

</html>